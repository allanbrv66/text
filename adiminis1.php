<?php
session_start();

// Proteção de Segurança: Se não houver sessão ativa de administrador, redireciona de volta para a clínica
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: clinica.php"); 
    exit; 
}

// 1. Carrega os dados atuais do arquivo JSON para exibir dentro dos campos do formulário dinamicamente
$caminho_json = "dados_pagina.json";
// Altere o array inicial (linhas 12-16) para:
$dados = [
    "titulo_banner_clinica" => "Espaço Singular",
    "subtitulo_banner_clinica" => "Agende sua consulta online",
    "imagem_banner_clinica" => "img/frente.png"
];

if (file_exists($caminho_json)) {
    $conteudo_json = file_get_contents($caminho_json);
    $dados_decorados = json_decode($conteudo_json, true);
    if (is_array($dados_decorados)) {
        $dados = array_merge($dados, $dados_decorados);
    }
}
?>

<strong><?= htmlspecialchars($_SESSION['admin_email'] ?? 'allanlaracunha8@gmail.com') ?></strong>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Espaço Singular</title>

    <link rel="icon" href="img/LogoEsp.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/adiminis1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
<!-- CAMPO DE EDIÇÃO -->
<div class="auth-modal" id="authModal">
    <i class="fa-solid fa-xmark close-icon" onclick="closeEspec()"></i>
    
    <div class="modal-split-container">
        
        <form class="modal-form-side" action="atualizar_banner.php" method="POST" enctype="multipart/form-data">
            <h2>Alterar Banner</h2>
            <p class="form-subtitle">Atualize as informações principais da página inicial.</p>
            
            <div class="input-group-adm">
                <label for="Banner">Selecione o banner</label>
                <select name="Banner" id="Banner">
                    <option value="Clinica">Clinica</option>
                    <option value="Agendamentos" selected>Agendamentos</option>
                    <option value="Cliente">Cliente</option>
                </select>
            </div>

            <div class="input-group-adm">
                <label for="titulo_banner_clinica">Título Principal</label>
                <input type="text" id="titulo_banner_clinica" name="titulo_banner_clinica" value="<?= htmlspecialchars($dados['titulo_banner_clinica']) ?>" required>
            </div>
            
            <div class="input-group-adm">
                <label for="subtitulo_banner_clinica">Subtítulo / Descrição</label>
                <input type="text" id="subtitulo_banner_clinica" name="subtitulo_banner_clinica" value="<?= htmlspecialchars($dados['subtitulo_banner_clinica']) ?>" required>
            </div>
            
            <div class="input-group-adm">
                <label for="imagem_banner_clinica">Nova Imagem de Fundo</label>
                <input type="file" id="imagem_banner_clinica" name="imagem_banner_clinica" accept="image/*">
            </div>
            
            <button type="submit" class="btn-save-banner">
                <i class="fa-solid fa-floppy-disk"></i> Salvar Alterações
            </button>
        </form>

        <div class="modal-preview-side">
            <section class="banner-adm">
                <img src="<?= htmlspecialchars($dados['imagem_clinica']) ?>" alt="Banner Atual">
                <div class="banner-content-adm">
                    <h1><?= htmlspecialchars($dados['titulo_banner_clinica']) ?></h1>
                    <p><?= htmlspecialchars($dados['subtitulo_banner_clinica']) ?></p>
                    <div class="botoes-adm">
                        <button type="button" class="btn-adm cadastrar-adm">Entrar</button>
                        <button type="button" class="btn-adm entrar-adm">Saber Mais</button>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>

<div class="backdropExample">
    <header>
        <div class="logo">
            <a href="clinica.php">
                <img src="img/LogoEsp.png" alt="Logo">
            </a>
        </div>

        <nav>
            <ul>
                <li><a href="clinica.php">Início</a></li>
                <li><a href="#profissionais">Profissionais</a></li>
                <li><a href="#espaco">Nosso Espaço</a></li>
                <li><a href="agendamentos.php">Agendamentos</a></li>

                <li>
                    <a href="#" class="icone">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                </li>

                <li>
                    <a href="perfil.php" class="perfil-link">
                        <img class="perfil" src="img/perfil.png" alt="Perfil">  
                    </a>
                </li>
            </ul>
        </nav>
    </header>

        <main>
            <section>
                <section class="banner">
                <img src="<?= htmlspecialchars($dados['imagem_clinica']) ?>" alt="Banner Atual">
                <div class="banner-content">
                    <h1><?= htmlspecialchars($dados['titulo_banner_clinica']) ?></h1>
                    <p><?= htmlspecialchars($dados['subtitulo_banner_clinica']) ?></p>
                    <div class="botoes">
                        <button onclick="" class="btn entrar" type="button">Entrar</button>
                        <button onclick="" class="btn cadastrar" type="button">Cadastre-se</button>
                    </div>
                </div>
                </section>

                <div style="display: flex;
                            justify-content: center;
                            align-items: center;
                            margin-top: 30px; ">
                    <button onclick="openAuthModal('login')" class="btn cadastrar" type="button" >
                    Alterar Banner</button>
                </div>

            </section>

            <section id="servicos" class="servicos">
            <div class="servicos-header">
                <h2>Nossas Especialidades</h2>
                <p>Contamos com uma equipe multidisciplinar pronta para oferecer um suporte humanizado e o desenvolvimento integral de cada paciente.</p>
            </div>

            <div class="cards-container">
                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="img/psico.png" alt="Psicologia">
                    </div>
                    <div class="card-content">
                        <h3>Psicologia</h3>
                        <p>O psicólogo estuda, analisa e trata emoções, comportamentos e processos cognitivos, promovendo qualidade de vida. Auxilia na resolução de conflitos, traumas e transtornos através da psicoterapia.</p>
                        <a href="javascript:void(0)" onclick="openAuthModal('signup')">Saiba mais <span>→</span></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="img/psicopedag.png" alt="Psicopedagogia">
                    </div>
                    <div class="card-content">
                        <h3>Psicopedagogia</h3>
                        <p>Identifica, diagnostica e trata dificuldades e transtornos de aprendizagem. Utiliza conhecimentos de psicologia e pedagogia para investigar as causas do baixo rendimento escolar.</p>
                        <a href="javascript:void(0)" onclick="openAuthModal('signup')">Saiba mais <span>→</span></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="img/to.png" alt="Terapia Ocupacional">
                    </div>
                    <div class="card-content">
                        <h3>Terapia Ocupacional</h3>
                        <p>Utiliza atividades cotidianas para promover autonomia, independência e qualidade de vida em pessoas com limitações físicas, cognitivas, emocionais ou sociais.</p>
                        <a href="javascript:void(0)" onclick="openAuthModal('signup')">Saiba mais <span>→</span></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="img/pedago.png" alt="Pedagogia">
                    </div>
                    <div class="card-content">
                        <h3>Pedagogia</h3>
                        <p>Especialista em mediar e aprimorar os processos de ensino-aprendizagem, atuando na docência, gestão, planejamento e coordenação, promovendo o desenvolvimento integral.</p>
                        <a href="javascript:void(0)" onclick="openAuthModal('signup')">Saiba mais <span>→</span></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="img/neuro.png" alt="Neuropsicopedagogia">
                    </div>
                    <div class="card-content">
                        <h3>Neuropsicopedagogia</h3>
                        <p>Atua na interseção entre neurociência, psicologia e pedagogia para intervir em dificuldades de aprendizagem, avaliando atenção, memory e linguagem.</p>
                        <a href="javascript:void(0)" onclick="openAuthModal('signup')">Saiba mais <span>→</span></a>
                    </div>
                </div>
            </div>
        </section>
                <div class="add-servico-area">

                    <button class="btn-add-servico">
                        Adicionar Serviço
                    </button>

                </div>
            <section class="agenda">

                <div class="agenda-container">

                    <div class="agenda-box">

                        <h3>Segunda-feira – Sexta-feira</h3>

                        <p>Atendimento com hora marcada</p>

                        <button class="btn-horario">
                            Alterar Horários
                        </button>

                    </div>

                    <div class="agenda-box">

                        <h3>Sábado</h3>

                        <p>Atendimento com hora marcada</p>

                        <button class="btn-horario">
                            Alterar Horários
                        </button>

                    </div>

                    <div class="agenda-box">

                        <h3>Domingo</h3>

                        <p>Fechado</p>

                        <button class="btn-horario">
                            Alterar Horários
                        </button>

                    </div>

                </div>

            </section>


            <section class="form-profissional">

                <div class="form-container">

                    <div class="topo-form">

                        <img src="img/perfil.png" alt="Perfil">

                        <h2>Profissional</h2>

                    </div>

                    <form>

                        <div class="campo-grande">

                            <input type="text" placeholder="Nome completo">

                        </div>

                        <div class="linha-campos">

                            <div class="campo">

                                <input type="date">

                                <label>Data de nascimento</label>

                            </div>

                            <div class="campo">

                                <input type="text">

                                <label>Público-alvo</label>

                            </div>

                            <div class="campo">

                                <input type="text">

                                <label>Área de atuação</label>

                            </div>

                        </div>

                        <div class="campo-grande">

                            <input type="password">

                            <label>Senha</label>

                        </div>

                        <button class="btn-alterar-info">
                            Alterar Informações
                        </button>

                    </form>

                </div>

            </section>

            <section class="consultas-profissional">

                <h3>Minhas Consultas</h3>

                <div class="consulta-card">

                    <div class="consulta-topo">

                        <img src="img/perfil.png" alt="Perfil">

                        <div class="consulta-info">

                            <h4>Lucinda Evaristo</h4>

                            <span>17/05/26 • A ser confirmada...</span>

                        </div>

                    </div>

                    <div class="consulta-status">
                        ”
                    </div>

                    <p>
                        Você tem uma consulta agendada para essa data.
                        <br>
                        Horário: 17:10.
                    </p>

                    <div class="consulta-botoes">

                        <button class="btn-confirmar">
                            Confirmar
                        </button>

                        <button class="btn-alterar-data">
                            Alterar data/Hora
                        </button>

                    </div>

                </div>

                <div class="consulta-card">

                    <div class="consulta-topo">

                        <img src="img/perfil.png" alt="Perfil">

                        <div class="consulta-info">

                            <h4>Yasmin Rocha</h4>

                            <span>17/04/26 • A ser confirmada...</span>

                        </div>

                    </div>

                    <div class="consulta-status">
                        ”
                    </div>

                    <p>
                        Você tem uma consulta agendada para essa data.
                        <br>
                        Horário: 09:30.
                    </p>

                    <div class="consulta-botoes">

                        <button class="btn-confirmar">
                            Confirmar
                        </button>

                        <button class="btn-alterar-data">
                            Alterar data/Hora
                        </button>

                    </div>

                </div>

                <div class="consulta-card">

                    <div class="consulta-topo">

                        <img src="img/perfil.png" alt="Perfil">

                        <div class="consulta-info">

                            <h4>Keicilene Mendes</h4>

                            <span>17/04/26</span>

                        </div>

                    </div>

                    <div class="consulta-status">
                        ❞
                    </div>

                    <p>
                        Sua consulta já foi realizada,
                        agende uma próxima ou aguarde o retorno.
                    </p>

                    <div class="consulta-botoes">

                        <button class="btn-confirmar">
                            Confirmar
                        </button>

                        <button class="btn-retorno">
                            Enviar Retorno
                        </button>

                    </div>

                </div>

            </section>

            <section class="avaliacoes">

        <h2>AVALIAÇÕES</h2>

        <div class="avaliacoes-container">

            <div class="avaliacao-card">

                <div class="avaliacao-topo">

                    <img src="img/perfil.png" alt="Perfil">

                    <h4>Guilherme Castro</h4>

                </div>

                <p>
                    Ótimo espaço! Profissionais maravilhosos e qualificados.
                </p>

                <div class="avaliacao-botoes">

                    <button class="btn-curtir">Curtir</button>

                    <button class="btn-alterar-avaliacao">
                        Responder
                    </button>

                </div>

            </div>

            <div class="avaliacao-card">

                <div class="avaliacao-topo">

                    <img src="img/perfil.png" alt="Perfil">

                    <h4>Carolina Marques</h4>

                </div>

                <p>
                    Serviço impressionante.
                </p>

                <div class="avaliacao-botoes">

                    <button class="btn-curtir">Curtir</button>

                    <button class="btn-alterar-avaliacao">
                        Responder
                    </button>

                </div>

            </div>

            <div class="avaliacao-card">

                <div class="avaliacao-topo">

                    <img src="img/perfil.png" alt="Perfil">

                    <h4>Lucinda Evaristo</h4>

                </div>

                <p>
                    Meu filho teve uma grande melhora de um tempos pra cá,
                    ótima psicopedagoga! Sucesso.
                </p>

                <div class="avaliacao-botoes">

                    <button class="btn-curtir">Curtir</button>

                    <button class="btn-alterar-avaliacao">
                        Responder
                    </button>
                </div>
            </div>
        </div>
    </section>

            <section class="nosso-espaco">

                <h2>Nosso Espaço</h2>

                <p>
                    Garantindo conforto e acolhimento para você e seu filho.
                </p>

                <div class="galeria">

                    <img src="img/janela.png" alt="">
                    <img src="img/brinquedos.png" alt="">
                    <img src="img/mesa.png" alt="">
                    <img src="img/frente.png" alt="">
                    <img src="img/armario.png" alt="">
                    <img src="img/portao.png" alt="">
                    <img src="img/sala.png" alt="">
                    <img src="img/salaespera.png" alt="">

                </div>

            </section>
        </main>

        <footer class="footer">

            <div class="footer-container">

                <div class="footer-left">

                    <img src="img/LogoEsp.png" alt="Logo">

                    <h3>Espaço Singular</h3>

                    <div class="social">

                        <a href="https://www.instagram.com/espacosingular921/">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="https://www.facebook.com/espacosingular921/">
                            <i class="fab fa-facebook"></i>
                        </a>

                    </div>

                </div>

                <div class="footer-col">

                    <h4>Início</h4>

                    <a href="#">Sobre</a>
                    <a href="#">Serviços</a>
                    <a href="#">Informações</a>

                </div>

                <div class="footer-col">

                    <h4>Contato</h4>

                    <a href="#">Profissionais</a>

                    <a href="https://www.google.com/maps?sca_esv=39e7e74914a90773&output=search&q=espa%C3%A7o+singular+taguai&source=lnms&fbs=ADc_l-acAb_3MMOAUx0zmbUpgBqRiigBgL2I_pgQa-94zvB05_ZT_Q1Iqs87J7oFoJEw1LvO_T-F0Zi41VzRYaU7eMd8I2pu8E6VIZ04HuRNhRMRn1fnxXYA2X5W8arg8aSpgb4YMnTj1oXbPsKVdT5DbFrBDo-p6sselQgTegUoPYJ83UqF4fAT705xJTl5S57nJt9zsOrDdDUbbyMGI4B0AEGmfbe4NA&entry=mc&ved=1t:200715&ictx=111">
                        Localização
                    </a>

                    <a href="perfil.php">Perfil</a>

                </div>

                <div class="footer-col">

                    <a href="#">
                        Política de Privacidade
                    </a>

                </div>

            </div>

        </footer>
</div>

<script src="JS/ADM.js"></script>
</body>

</html>

