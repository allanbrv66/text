/**
 * CONFIGURAÇÃO DE CONEXÃO COM O SUPABASE
 */
const SUPABASE_URL = "https://jqezxsrgyssuxhmlesbr.supabase.co";
const SUPABASE_KEY = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImpxZXp4c3JneXNzdXhobWxlc2JyIiwicm9sZSI6ImFub24iLCJpYXQiOjE3ODEwMTI1MTAsImV4cCI6MjA5NjU4ODUxMH0.rDv0WI-BwlM_pjGD1QQjEC30PPls57Y724n8E0EHHm0"; 

const _supabase = supabase.createClient(SUPABASE_URL, SUPABASE_KEY);

/**
 * FUNÇÃO DE TRADUÇÃO DE NOTIFICAÇÕES
 */
function obterMensagemErroAmigavel(mensagemOriginal) {
    if (!mensagemOriginal) return "Ocorreu um erro inesperado. Tente novamente.";
    
    // Converte a mensagem para letras minúsculas para facilitar a comparação
    const msg = mensagemOriginal.toLowerCase();

    // --- ERROS DE LOGIN E ACESSO ---
    if (msg.includes("rate limit exceeded")) {
        return "Muitas tentativas seguidas! Por segurança, aguarde alguns minutos antes de tentar novamente.";
    }
    if (msg.includes("invalid login credentials")) {
        return "E-mail ou senha incorretos. Por favor, verifique os dados informados.";
    }
    if (msg.includes("email val") || msg.includes("invalid email")) {
        return "Por favor, insira um endereço de e-mail válido.";
    }

    // --- ERROS DE CADASTRO (REGISTRO) ---
    if (msg.includes("user already exists") || msg.includes("already registered")) {
        return "Este endereço de e-mail já está cadastrado. Tente fazer login.";
    }
    if (msg.includes("password should be") || msg.includes("password at least")) {
        return "A senha é muito curta! Insira uma senha com pelo menos 6 caracteres.";
    }
    if (msg.includes("signup requires") || msg.includes("disabled")) {
        return "O cadastro de novos utilizadores está temporariamente desativado.";
    }

    // --- ERROS DE REDE OU SISTEMA ---
    if (msg.includes("network error") || msg.includes("failed to fetch")) {
        return "Não foi possível conectar ao servidor. Verifique a sua ligação à internet.";
    }

    // Se for um erro desconhecido, devolve o erro original formatado
    return `Erro do sistema: ${mensagemOriginal}`;
}

/**
 * CAPTURA DOS FORMULÁRIOS ASSIM QUE A PÁGINA CARREGA
 */
document.addEventListener('DOMContentLoaded', () => {
    const formLogin = document.getElementById('formLogin');
    const formCadastro = document.getElementById('formCadastro');

    // ==========================================
    // LÓGICA DO FORMULÁRIO DE LOGIN
    // ==========================================
    if (formLogin) {
        formLogin.addEventListener('submit', async (e) => {
            e.preventDefault();

            const email = formLogin.querySelector('input[type="email"]').value;
            const senha = formLogin.querySelector('input[type="password"]').value;

            // 1. Checagem de Administrador no backend (login.php)
            try {
                const respostaAdm = await fetch('login.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email: email, senha: senha })
                });
                
                const resultadoAdm = await respostaAdm.json();

                if (resultadoAdm.sucesso) {
                    alert('Acesso administrativo concedido. Bem-vindo ao Painel!');
                    window.location.href = resultadoAdm.redirect; 
                    return; 
                }

                if (resultadoAdm.erro) {
                    alert(resultadoAdm.erro);
                    return; 
                }
            } catch (err) {
                console.error("Erro na checagem de ADM, prosseguindo com Supabase...", err);
            }

            // 2. SE NÃO FOR ADM: Autenticação de Clientes no Supabase
            const { data, error } = await _supabase.auth.signInWithPassword({
                email: email,
                password: senha,
            });

            if (error) {
                const msgPersonalizada = obterMensagemErroAmigavel(error.message);
                alert(msgPersonalizada);
            } else {
                alert('Bem-vindo de volta ao Espaço Singular!');
                formLogin.reset(); 
                if (typeof closeEspec === 'function') closeEspec();
                window.location.href = "cliente.php";
            }
        });
    }

    // ==========================================
// LÓGICA DO FORMULÁRIO DE CADASTRO (REGISTRO)
// ==========================================
if (formCadastro) {
    formCadastro.addEventListener('submit', async (e) => {
        e.preventDefault();

        const email = formCadastro.querySelector('input[type="email"]').value;
        const senha = formCadastro.querySelector('input[type="password"]').value;

        // 1. Cria o usuário no Supabase Auth (necessário para o sistema de login funcionar)
        const { data: authData, error: authError } = await _supabase.auth.signUp({
            email: email,
            password: senha,
        });

        if (authError) {
            // Traduz o erro obtido do cadastro para português
            const msgPersonalizada = obterMensagemErroAmigavel(authError.message);
            alert(msgPersonalizada);
            return; // Para a execução aqui se der erro no Auth
        }

        // 2. Insere DIRETAMENTE na sua tabela 'tb_usuario'
        const { data: tableData, error: tableError } = await _supabase
            .from('tb_usuario')
            .insert([
                {
                    usuario: email,
                    senha: '[PROTEGIDO VIA AUTH]', // Texto padrão que você usa na tabela
                    nvl_acesso: 'USUARIO',         // Passado como String (com aspas)
                    status: 'ATIVO'                // Passado como String (com aspas)
                }
            ]);

        if (tableError) {
            console.error("Erro ao inserir na tabela tb_usuario:", tableError);
            alert("Usuário criado no Auth, mas houve um erro ao salvar os dados na tabela do banco.");
        } else {
            alert('Cadastro realizado com sucesso! Bem-vindo ao Espaço Singular.');
            formCadastro.reset();
            if (typeof closeEspec === 'function') closeEspec();
            window.location.href = "cadastroEsp.php";
        }
    });
}
});
