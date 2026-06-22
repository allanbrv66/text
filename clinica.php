<?php
$caminho_json = "dados_pagina.json";
$dados = [
    "titulo" => "Sobre o Espaço Singular",
    "conteudo" => "Clínica de atendimentos para crianças, adolescentes, adultos e idosos com limitações físicas, cognitivas, sensoriais, mentais ou sociais.",
    "imagem_clinica" => "img/frente.png",
    "titulo_banner_clinica" => "Espaço Singular",
    "subtitulo_banner_clinica" => "Agende sua consulta online" // Adicionado
];

if (file_exists($caminho_json)) {
    $conteudo_json = file_get_contents($caminho_json);
    $dados_decorados = json_decode($conteudo_json, true);
    if (is_array($dados_decorados)) {
        $dados = array_merge($dados, $dados_decorados);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Singular</title>
    <link rel="icon" href="img/LogoEsp.png">
    <link rel="stylesheet" href="CSS/clinica.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
<script src="JS/clinica.js"></script>
<script src="JS/supabase.js"></script>

<div class="auth-modal" id="authModal">
    <i class="fa-solid fa-xmark close-icon" onclick="closeEspec()"></i>
    
    <div class="auth-form-container sign-up">
        <form id="formCadastro">
            <h1 style="color: #333; font-size: 28px; margin-bottom: 10px;">Criar Conta</h1>
            <div class="social-icons">
                <a href="#" class="icons"><i class="fa-brands fa-google"></i></a>
                <a href="#" class="icons"><i class="fa-brands fa-apple"></i></a>
            </div>
            <span>Cadastrar com E-mail</span>
            <input type="email" id="cadEmail" placeholder="E-mail" required>
            <input type="password" id="cadSenha" placeholder="Senha" required>
            <button type="submit">Cadastrar-se</button>
            <span class="mobile-switch">Já tem conta? <a href="javascript:void(0)" id="switchToLoginMobile">Entrar</a></span>
        </form>
    </div>

    <div class="auth-form-container sign-in">
        <form id="formLogin">
            <h1 style="color: #333; font-size: 28px; margin-bottom: 10px;">Entrar</h1>
            <div class="social-icons">
                <a href="#" class="icons"><i class="fa-brands fa-google"></i></a>
                <a href="#" class="icons"><i class="fa-brands fa-apple"></i></a>
            </div>
            <span>Entrar com e-mail e senha</span>
            <input type="email" id="logEmail" placeholder="E-mail" required>
            <input type="password" id="logSenha" placeholder="Senha" required>
            <a href="#">Esqueceu sua senha?</a>
            <button type="submit">Entrar</button>
            <span class="mobile-switch">Não tem conta? <a href="javascript:void(0)" id="switchToRegisterMobile">Cadastre-se</a></span>
        </form>
    </div>

    <div class="auth-toggle-container">
        <div class="auth-toggle">
            <div class="auth-toggle-panel auth-toggle-left">
                <h1>Bem-vindo ao<br> Espaço Singular</h1>
                <p>Caso já possua um perfil cadastrado no sistema, faça o seu login clicando abaixo.</p>
                <button class="btn-toggle" id="loginBtnOverlay">Entrar</button>
            </div>
            <div class="auth-toggle-panel auth-toggle-right">
                <h1>Espaço Singular</h1>
                <p>Cadastre-se agora e agende sua consulta diretamente em nosso site.</p>
                <button class="btn-toggle" id="registerBtnOverlay">Cadastre-se</button>
            </div>
        </div>
    </div>
</div>

<header>
    <div class="logo">
        <img src="img/LogoEsp.png" alt="Logo Espaço Singular">
    </div>
    <nav id="navMenu">
        <ul>
            <li><a href="clinica.php">Início</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#agenda">Informações</a></li>
            <li><a href="#espaco">Nosso Espaço</a></li>
        </ul>
    </nav>  
</header>

<div class="backdropExample">
<main>
    <section class="banner">
        <img src="<?= htmlspecialchars($dados['imagem_clinica']) ?>" alt="Fachada da Clínica Espaço Singular">
        <div class="banner-content">
            <h1><?= htmlspecialchars($dados['titulo_banner_clinica'] ?? 'Espaço Singular') ?></h1>
            <p><?= htmlspecialchars($dados['subtitulo_banner_clinica'] ?? 'Agende sua consulta online') ?></p>
            <div class="botoes">
                <button onclick="openAuthModal('login')" class="btn entrar" type="button">Entrar</button>
                <button onclick="openAuthModal('signup')" class="btn cadastrar" type="button">Cadastre-se</button>
            </div>
        </div>
    </section>

    <div id="sobre" class="sobre">
        <div class="sobre-grid">
            <div class="sobre-texto">
                <h2><?= htmlspecialchars($dados['titulo']) ?></h2>
                <p><?= nl2br(htmlspecialchars($dados['conteudo'])) ?></p>

                <h3>Contamos com:</h3>
                <ul>
                    <li><i class="fa-solid fa-user-doctor"></i> 3 Psicólogas</li>
                    <li><i class="fa-solid fa-hands-holding-child"></i> 1 Terapeuta Ocupacional</li>
                    <li><i class="fa-solid fa-graduation-cap"></i> 1 Professora</li>
                    <li><i class="fa-solid fa-book-open-reader"></i> 1 Professora psicopedagoga</li>
                    <li><i class="fa-solid fa-brain"></i> 1 Professora neuropsicopedagoga</li>
                </ul>
                
                <a href="#servicos" class="btn-servicos">Ver Serviços</a>
                <p class="texto-extra">
                    O Espaço Singular teve início com os atendimentos psicopedagógicos em 2020 durante a pandemia, quando os pais viram a necessidade de auxiliar os filhos que encontravam dificuldades em seguir com o ensino a distância.
                    A partir daí, veio a necessidade de compartilhar o espaço e trazer, junto da psicopedagoga, a avaliação psicológica e terapia ocupacional, para que fosse desenvolvido um trabalho completo.
                </p>
            </div>
            <div class="sobre-card">
                <h3>O Espaço</h3>
                <p>Oferecemos abordagens integradas com profissionais focados no tratamento personalizado.</p>
                <div class="sobre-card-imagens">
                    <img src="img/mesa.png" alt="Mesa de atendimento infantil">
                    <img src="img/brinquedos.png" alt="Brinquedos pedagógicos">
                </div>
            </div>
        </div> 
    </div>

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

    <section id="agenda" class="agenda">
        <div class="agenda-container">
            <div class="agenda-box">
                <h3><i class="fa-regular fa-calendar-days"></i> Segunda-feira – Sexta-feira</h3>
                <p>Atendimento com hora marcada</p>
            </div>
            <div class="agenda-box">
                <h3><i class="fa-regular fa-calendar-days"></i> Sábado</h3>
                <p>Atendimento com hora marcada</p>
            </div>
            <div class="agenda-box">
                <h3><i class="fa-regular fa-calendar-xmark"></i> Domingo</h3>
                <p style="background-color: #fce8e6; color: #a83232; padding: 4px 10px; border-radius: 12px;">Fechado</p>
            </div>
        </div>
    </section>

    <section id="espaco" class="nosso-espaco">
        <div>
            <h2>Nosso Espaço</h2>
            <p>Garantindo conforto, acolhimento e segurança para todos os pacientes.</p>
        </div>

        <div class="galeria">
            <img src="img/janela.png" alt="Janela do Espaço">
            <img src="img/brinquedos.png" alt="Brinquedos lúdicos">
            <img src="img/mesa.png" alt="Mesa de atendimento">
            <img src="img/frente.png" alt="Frente da Clínica">
            <img src="img/armario.png" alt="Armário organizador">
            <img src="img/portao.png" alt="Portão de entrada">
            <img src="img/sala.png" alt="Sala de consulta">
            <img src="img/salaespera.png" alt="Sala de espera">
        </div>
    </section>

    <section id="localizacao" class="nosso-espaco" style="margin-top: 0;">
        <div class="container">
            <h2 style="margin-bottom: 30px;">Onde Estamos</h2>
            <div class="mapa-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.2685888967394!2d-49.408293799999996!3d-23.450774300000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c1a10183065c0f%3A0xc2ca73fefd11fb91!2sAv.%20Ap%C3%B3stolo%20B%C3%A9rgamo%2C%20437%20-%20Centro%2C%20Tagua%C3%AD%20-%20SP%2C%2018890-095!5e0!3m2!1spt-BR!2sbr!4v1779664045361!5m2!1spt-BR!2sbr" style="border:0;" class="loc" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-left">
            <img src="img/LogoEsp.png" alt="Logo Rodapé">
            <h3>Espaço Singular</h3>
            <div class="social">
                <a href="https://www.instagram.com/espacosingular921/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/espacosingular921/" target="_blank"><i class="fab fa-facebook"></i></a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Início</h4>
            <ul>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#agenda">Informações</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Contato</h4>
            <ul>
                <li><a href="javascript:void(0)" onclick="openAuthModal('signup')">Profissionais</a></li>
                <li><a href="https://www.google.com/maps/search/?api=1&query=Avenida+Apostolo+Bergamo,+437+Taguai" target="_blank">Localização</a></li>
                <li><a href="javascript:void(0)" onclick="openAuthModal('login')">Perfil</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Legal</h4>
            <ul>
                <li><a href="">Política de Privacidade</a></li>
            </ul>
        </div>
    </div>
</footer>

</main>
</div>


</body>
</html>
