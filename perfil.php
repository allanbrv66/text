<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="CSS/perfil.css">
    <link rel="icon" href="img/LogoEsp.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- link das logos do footer-->

<body>
<!-- menu -->  
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

<!-- informacoes do responsavel-->

   <?php

$nome = "Yasmin Alessandra";
$dataNascimento = "01/01/2000";
$telefone = "(11) 99999-9999";
$email = "email@exemplo.com";
$endereco = "Rua Exemplo";
$cep = "18480-000";
$cidade = "Itaporanga";
$numero = "123";

?>
 
<div class="form-box">

   <div>
        <a href="perfil.php" class="perfil-link1">
            <img class="perfil" src="img/perfil.png" alt="Perfil">
        </a>
        
    <div class="responsavel"><h1>Responsavel</h1></div>
   <br><br><br>
   </div>
    <!-- Nome -->
    <div class="field">
        <div class="info"><?php echo $nome; ?></div>
        <label>Nome</label>
    </div>

    <!-- Data, Telefone, Email -->
    <div class="row">

        <div class="field">
            <div class="info"><?php echo $telefone; ?></div>
            <label>Telefone</label>
        </div>

        <div class="field">
            <div class="info"><?php echo $email; ?></div>
             <label>Email</label>
        </div>

    </div>

    <!-- Endereço e CEP -->
    <div class="row">

        <div class="field">
            <div class="info"><?php echo $endereco; ?></div>
             <label>Endereço</label>
        </div>

        <div class="field small">
            <div class="info"><?php echo $cep; ?></div>
             <label>CEP</label>
        </div>

    </div>

    <!-- Cidade e Número -->
    <div class="row">

        <div class="field">
            <div class="info"><?php echo $cidade; ?></div>
             <label>Cidade</label>
        </div>

        <div class="field small">
            <div class="info"><?php echo $numero; ?></div>
            <label>Número</label>
        </div>

    </div>
    
    <div class="botao_alterar">
    <button class=" alterar">Alterar Informacoes</button>
    </div>

</div>
<!-- informacoes da criança-->

   <?php

$nome = "Yasmin Alessandra";
$dataNascimento = "01/01/2000";
$telefone= "(11) 99999-9999";
$email = "email@exemplo.com";
$endereco = "Rua Exemplo";
$cep = "18480-000";
$cidade = "Itaporanga";
$numero = "123";

?>

<div class="form-box1">
   <div>
        <a href="perfil.php" class="perfil-link1">
            <img class="perfil" src="img/perfil.png" alt="Perfil">
        </a>
   <div class="responsavel"><h1>Menor de Idade</h1></div>
   <br><br><br>
   </div>
    <!-- Nome -->
    
    <div class="field">
        <div class="info"><?php echo $nome; ?></div>
        <label>Nome</label>
    </div>

    <!-- nome do responsavel-->
    <div class="field">
        <div class="info"><?php echo $nome; ?></div>
        <label>Nome do Responsavel</label>
    </div>

    <!-- Data -->
    <div class="row">

        <div class="field">
            <div class="info"><?php echo $dataNascimento; ?></div>
            <label>Data de Nascimento</label>
        </div>


    </div>

    <!-- Endereço e CEP -->
    <div class="row">

        <div class="field">
            <div class="info"><?php echo $endereco; ?></div>
             <label>Endereço</label>
        </div>

        <div class="field small">
            <div class="info"><?php echo $cep; ?></div>
             <label>Telefone do Responsavel</label>
        </div>

    </div>


    
    <div class="botao_alterar">
    <button class=" alterar">Alterar Informacoes</button>
    </div>

</div>


<!-- blocos das consultas -->
<!-- blocos das mazola-->
  <section class="consultas-profissional">

            <h3 style="margin-top: 70px;">Minhas Consultas</h3>

            <div class="consulta-card">

                <div class="consulta-topo">

                    <img src="img/perfil.png" alt="Perfil">

                    <div class="consulta-info">

                        <h4>Lucinda Evaristo</h4>

                        <span>17/05/26 • A ser confirmada...</span>

                    </div>

                </div>

                <div class="consulta-status">
                    ❞
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
                    ❞
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


<!-- footer-->
<footer class="footer" style="margin-top: 100px;">
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
                <li><a href="cadastro.php">Profissionais</a></li>
                <li><a href="https://www.google.com/maps/search/?api=1&query=Avenida+Apostolo+Bergamo,+437+Taguai" target="_blank">Localização</a></li>
                <li><a href="login.php">Perfil</a></li>
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
