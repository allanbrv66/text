<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Singular</title>
    <link class="icon" rel="icon" href="img/LogoEsp.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/cliente.css">
</head>

<body>
<header>
    <div class="logo">
        <a href="clinica.php">
            <img src="img/LogoEsp.png" alt="Logo">
        </a>
    </div>

    <nav id="navMenu">
        <ul>
            <li><a href="clinica.php" onclick="toggleMenu()">Início</a></li>
            <li><a href="#profissionais" onclick="toggleMenu()">Profissionais</a></li>
            <li><a href="#espaco" onclick="toggleMenu()">Nosso Espaço</a></li>
            <li><a href="agendamentos.php" onclick="toggleMenu()">Agendamentos</a></li>

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

    <section class="banner">
        <img src="img/banner.png" alt="Banner">
        <div class="banner-content">
            <h1>Bem-vindo ao Espaço Singular</h1>
            <p>Atendimento humanizado e profissionais preparados para cuidar do seu desenvolvimento.</p>
            <div class="banner-buttons">
                <a href="agendamentos.php" class="btn-primary">Agendar Consulta</a>
                <a href="#profissionais" class="btn-secondary">Conhecer Profissionais</a>
            </div>
        </div>
    </section>

    <section class="agendamento">
        <div class="agendamento-texto">
            <span class="tag">Atendimento Online e Presencial</span>
            <h2>Agende sua consulta com facilidade</h2>
            <p>Realize seus atendimentos de forma online ou presencial com uma equipe multidisciplinar preparada para oferecer acolhimento e cuidado individualizado.</p>
            <ul>
                <li><i class="fa-solid fa-check"></i> Psicologia</li>
                <li><i class="fa-solid fa-check"></i> Terapia Ocupacional</li>
                <li><i class="fa-solid fa-check"></i> Psicopedagogia</li>
                <li><i class="fa-solid fa-check"></i> Neuropsicopedagogia</li>
            </ul>
        </div>

        <div class="agendamento-card">
            <img src="img/LogoEsp.png" alt="Logo">
            <h3>Horários Disponíveis</h3>
            <p>Consulte os profissionais disponíveis e faça seu agendamento de forma rápida e prática.</p>
            <a href="agendamentos.php" class="btn-card">Ir para Agendamentos</a>
        </div>
    </section>

    <section id="profissionais" class="profissionais">
        <div class="section-title">
            <h2>Nossas Profissionais</h2>
            <p>Conheça os especialistas que fazem parte do Espaço Singular.</p>
        </div>

        <div class="lista-profissionais">
            <div class="profissional">
                <img src="img/lucinda.png" alt="Lucinda Evaristo">
                <h4>Lucinda Evaristo</h4>
                <span>Psicóloga</span>
                <div class="botoes">
                    <a href="#" class="whats"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    <a href="#" class="insta"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>

            <div class="profissional">
                <img src="img/anapaula.png" alt="Ana Paula">
                <h4>Ana Paula Mazeto</h4>
                <span>Terapeuta Ocupacional</span>
                <div class="botoes">
                    <a href="#" class="whats"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    <a href="#" class="insta"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>

            <div class="profissional">
                <img src="img/fernanda.png" alt="Fernanda">
                <h4>Fernanda dos Santos Liuti</h4>
                <span>Psicóloga</span>
                <div class="botoes">
                    <a href="#" class="whats"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    <a href="#" class="insta"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>

            <div class="profissional">
                <img src="img/anaclara.png" alt="Fabiana">
                <h4>Fabiana Codognhoto</h4>
                <span>Educação</span>
                <div class="botoes">
                    <a href="#" class="whats"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    <a href="#" class="insta"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>

            <div class="profissional">
                <img src="img/marcia.png" alt="Marcia">
                <h4>Marcia Soldera</h4>
                <span>Terapeuta Ocupacional</span>
                <div class="botoes">
                    <a href="#" class="whats"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    <a href="#" class="insta"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>

            <div class="profissional">
                <img src="img/suellen.png" alt="Suellen">
                <h4>Suellen</h4>
                <span>Psicóloga</span>
                <div class="botoes">
                    <a href="#" class="whats"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    <a href="#" class="insta"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
    </section>

    <section id="espaco" class="nosso-espaco">
        <div class="section-title">
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

    <section id="localizacao" class="localizacao" style="margin-bottom: 100px">
        <div class="container">
            <div class="section-title">
                <h2>Onde Estamos</h2>
            </div>
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
                <li><a href="#profissionais">Profissionais</a></li>
                <li><a href="https://www.google.com/maps/search/?api=1&query=Avenida+Apostolo+Bergamo,+437+Taguai" target="_blank">Localização</a></li>
                <li><a href="perfil.php">Perfil / Painel</a></li>
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
</body>
</html>
