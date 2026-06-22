<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Singular • Agendamentos</title>
    <link rel="icon" href="img/LogoEsp.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/agendamentos.css">
</head>

<body>

<header>
    <div class="logo">
        <a href="cliente.php">
            <img src="img/LogoEsp.png" alt="Logo">
        </a>
    </div>

    <nav>
        <ul>
            <li><a href="cliente.php">Início</a></li>
            <li><a href="cliente.php#profissionais">Profissionais</a></li>
            <li><a href="cliente.php#espaco">Nosso Espaço</a></li>
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

<section class="banner-agendamento">
    <img src="img/banner.png" alt="Banner Agendamento">

    <div class="banner-content">
        <span class="tag">Atendimento Humanizado</span>

        <h1>Agende sua consulta<br>com facilidade</h1>

        <p>
            Escolha a profissional ideal para o seu atendimento e realize seu agendamento de forma rápida, prática e segura.
        </p>

        <div class="banner-buttons">
            <a href="cliente.php" class="btn-secondary">Voltar ao Início</a>
            <a href="#profissionais" class="btn-primary">Ver Profissionais</a>
        </div>
    </div>
</section>

<section class="info-agendamento">

    <div class="info-texto">
        <span class="tag">Como Funciona</span>

        <h2>Seu atendimento em poucos passos</h2>

        <p>
            Nossa equipe está preparada para oferecer acolhimento e suporte especializado em diversas áreas do desenvolvimento humano.
        </p>

        <ul>
            <li><i class="fa-solid fa-check"></i> Escolha a profissional desejada</li>
            <li><i class="fa-solid fa-check"></i> Consulte horários disponíveis</li>
            <li><i class="fa-solid fa-check"></i> Faça seu agendamento online</li>
            <li><i class="fa-solid fa-check"></i> Atendimento presencial ou online</li>
        </ul>
    </div>

    <div class="info-card">
        <img src="img/LogoEsp.png" alt="Logo Espaço Singular">

        <h3>Agendamento Seguro</h3>

        <p>
            Consulte os profissionais disponíveis e escolha o melhor horário para seu atendimento.
        </p>

        <a href="#profissionais" class="btn-card">Escolher Profissional</a>
    </div>

</section>

<section id="profissionais" class="profissionais">

    <div class="section-title">
        <h2>Nossas Profissionais</h2>
        <p>
            Conheça as especialistas disponíveis para agendamento.
        </p>
    </div>

    <div class="cards-profissionais">

        <div class="card">
            <img src="img/lucinda.png" alt="Lucinda Evaristo">
            <div class="card-info">
                <h3>Lucinda Evaristo</h3>
                <span>Psicóloga</span>
                <a href="lucinda.php">Agendar Consulta</a>
            </div>
        </div>

        <div class="card">
            <img src="img/anapaula.png" alt="Ana Paula Mazeto">
            <div class="card-info">
                <h3>Ana Paula Mazeto</h3>
                <span>Terapeuta Ocupacional</span>
                <a href="anapaula.php">Agendar Consulta</a>
            </div>
        </div>

        <div class="card">
            <img src="img/fernanda.png" alt="Fernanda dos Santos Liuti">
            <div class="card-info">
                <h3>Fernanda dos Santos Liuti</h3>
                <span>Psicóloga</span>
                <a href="fernanda.php">Agendar Consulta</a>
            </div>
        </div>

        <div class="card">
            <img src="img/anaclara.png" alt="Fabiana Codognhoto">
            <div class="card-info">
                <h3>Fabiana Codognhoto</h3>
                <span>Psicopedagogia</span>
                <a href="fabiana.php">Agendar Consulta</a>
            </div>
        </div>

        <div class="card">
            <img src="img/marcia.png" alt="Marcia Soldera">
            <div class="card-info">
                <h3>Marcia Soldera</h3>
                <span>Terapeuta Ocupacional</span>
                <a href="marcia.php">Agendar Consulta</a>
            </div>
        </div>

        <div class="card">
            <img src="img/suellen.png" alt="Suellen">
            <div class="card-info">
                <h3>Suellen</h3>
                <span>Psicóloga</span>
                <a href="suellen.php">Agendar Consulta</a>
            </div>
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
                <a href="https://www.instagram.com/espacosingular921/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://www.facebook.com/espacosingular921/" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Início</h4>

            <ul>
                <li><a href="cliente.php#profissionais">Profissionais</a></li>
                <li><a href="cliente.php#espaco">Nosso Espaço</a></li>
                <li><a href="agendamentos.php">Agendamentos</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Contato</h4>

            <ul>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="login.php">Entrar</a></li>
                <li><a href="http://maps.google.com" target="_blank">Localização</a></li>
            </ul>
        </div>

    </div>
</footer>

</body>
</html>
