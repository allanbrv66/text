<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agend_fernanda</title>
   <link rel="import" href="agend.js">
   <link rel="stylesheet" href="css/agend.css">
   <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<header>
    <!-- menu -->
     <div class="logo">
            <img src="img/logoEsp.png" alt="Logo">
        </div>

        <nav>
            <ul>
                <li> <a href="clinica.php">Início</a></li>

                <li><a href="#">Serviços</a></li>

                <li> <a href="#">Informações</a></li>

                <li> <a href="#"> Consultas </a> </li>

                <li><a href="#"> Avaliações </a></li>
                 <li>
                    <a href="perfil.html" class="icone">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                </li>
<li>
    <a href="#" class="perfil-link">
        <img class="perfil" src="img/perfil.png" alt="Perfil">
    </a>
</li>

            </ul>

        </nav>
<!--  informacoes -->

   </header>
 <div class="box1">
   <div>
     <div class="nomepro">
      <h1>Fernada Liuti</h1>
      <h3>Pisicóloga</h3>
     </div>
        <div class="infor">
            <div class="img_prof">
            <img src="img/fernanda.png" alt="">
            </div>
            <div class="publico">
                <h2>Publico-alvo</h2>
                <li> Crianças de 18 meses a 13 anos;<br></li>
                <li> Crianças com dificuldades emocionais, comportamentais e de aprendizagem;<br></li>
                <li> Casos de Asiedade, TEA, TDAH, DI e outras demandas do desenvolvimento;<br></li>
                <li> Pais e responsáveis que buscam orientação <br></li>
            </div>

        </div>

   </div>

 </div>

 <!-- tablela de agendamento-->
    <div class= "titulo">
      <h3>Agende de forma pratica e rapida sua consulta </h3>
    </div>
  <div class="box2">
  
    <?php
    $data = $_POST['data'] ?? '';
    $horario = $_POST['horario'] ?? '';
    ?>

    <div class="container">

    <div class="calendario">

        <div class="cabecalho">
            <button id="anterior">&#10094;</button>
            <h2 id="mesAno"></h2>
            <button id="proximo">&#10095;</button>
        </div>

        <div class="dias-semana">
            <div>Dom</div>
            <div>Seg</div>
            <div>Ter</div>
            <div>Qua</div>
            <div>Qui</div>
            <div>Sex</div>
            <div>Sáb</div>
        </div>

        <div class="dias" id="dias"></div>

    </div>

    <div class="horarios">

        <h2>Horários Disponíveis</h2>
          <h4>Selecione uma data</h4>
        <div id="listaHorarios">
        </div>

        
    
    </div>
        <div class="confirmar">
        <form action="salvar.php" method="POST">

            <input type="hidden" name="data" id="data">
            <input type="hidden" name="horario" id="horario">
            
            
            <button class="btn-confirmar" type="submit">
                Confirmar Agendamento
            </button>
            <div id="resumo"></div>
        </div>
     </form>

    

</div>


  </div>

<!-- tirar duvida -->
 <div class="box3">

     <p class="titulo1">Ficou com alguma duvida, gostaria de conversar com a Fernanda</p>
     <div class="wtts">
    <button class="watts" onclick="window.open('https://wa.me/5514998106251','_blank')"> WhatsApp</button>
    </div>
 </div>



   <!-- footer-->
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

<script src="agend.js"></script>
</body>
</html>
