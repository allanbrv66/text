<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="CSS/cadastroEsp.css">
</head>
<body>
<!--menu do -->
     <header>
     <div class="logo">
            <img src="img/LogoEsp.png" alt="Logo">
        </div>

        <nav>
            <ul>
                <a href="clinica.php">Início</a></button>
                <a href="#">Entrar</a></button>
            </ul>
        </nav>
 </header>

 
<div class="titulo">
<h1 class="h1">Cadastro</h1>
</div>

    <section class="section" id="cadastroResponsavel">
      <form>
        <h3>Você está se cadastrando como Responsável?</h3><br>
              <input type='Radio' name='opcao'onclick="mostrarTabela()">SIM </input>
              <input type='Radio' name='opcao'onclick="esconderTabela()">NÃO </input> <img src="LogoESp.png"><br><br>
              
                Nome: <input type='text'  name='nome_resp' size="70.5"></input><br><br>
                Data de Nascimento: <input type='date'  name='nasc_resp' ></input>&nbsp;&nbsp;
                Telefone: <input type='number'  name='tel'></input><br><br>
                Endereço: <input type='text'  name='ende_resp'></input>
                Cidade:   <input type='text'  name='cidade_resp'></input>
                CEP:      <input type='text'  name='cep_resp'></input><br><br>
        </form>
        
    </section>
    <section class="section" id="cadastroCrianca">
        <form>
            <h3>Dados da Criança</h3><br>
                Nome:     <input type='text'  name='nomeC'></input><br><br>
                Data de Nascimento: <input type='date'  name='nasc_resp'></input><br><br>
                Endereço: <input type='text'  name='endeC'></input><br><br>
                Cidade:   <input type='text'  name='cidadeC'></input><br><br>
                CEP:      <input type='text'  name='cepC'></input><br><br>
                Escola:   <input type='text'  name='escola'></input><br><br>
        </form>
    </section>

    <div style="text-align:center;">
        <input class="bt_cadas" type='submit' name='cadastrar' value='Cadastrar'>&nbsp;&nbsp;&nbsp; 
        <input class="bt_cadas" type='button' onclick="location.replace('cadastroEsp.php');" value="Limpar">

</div>

 <script>
        function mostrarTabela(){
            document.getElementById("cadastroCrianca").style.display = "block";

            const nomeCrianca = document.getElementById('nomeC');
            const nascCrianca = document.getElementById('nascC');
            const endeCrianca = document.getElementById('enceC');
            const cidadeCrianca = document.getElementById('cidadeC');       
            const cepCrianca = document.getElementById('cepC');
            const escolaCrianca = document.getElementById('escolaC');

            if(nomeCrianca) nomeCrianca.required = true;
            if(nascCrianca) nascCrianca.required = true;
            if(endeCrianca) endeCrianca.required = true;
            if(cidadeCrianca) cidadeCrianca.required = true;
            if(cepCrianca)     cepCrianca.required = true;
            if(escolaCrianca) escolaCrianca.required = true;

            
        
        }

        function esconderTabela() {
        
            document.getElementById("cadastroCrianca").style.display = "none";

            const nomeCrianca = document.getElementById('nomeC');
            const nascCrianca = document.getElementById('nascC');
            const endeCrianca = document.getElementById('enceC');
            const cidadeCrianca = document.getElementById('cidadeC');       
            const cepCrianca = document.getElementById('cepC');
            const escolaCrianca = document.getElementById('escolaC');

            if(nomeCrianca) nomeCrianca.required = false;
            if(nascCrianca) nascCrianca.required = false;
            if(endeCrianca) endeCrianca.required = false;
            if(cidadeCrianca) cidadeCrianca.required = false;
            if(cepCrianca)     cepCrianca.required = false;
            if(escolaCrianca) escolaCrianca.required = false;
      
    }
    </script>
    <?php
if(isset($_POST['cadastrar'])){
$nome_resp = $_POST["nome_resp"];
$nasc_resp = $_POST["nasc_resp"];
$tel = $_POST["tel"];
$ende_resp = $_POST["ende_resp"];
$cidade_resp = $_POST["cidade_resp"];
$cep_resp = $_POST["cep_resp"];

$nomeC = $_POST["nomeC"];
$nascC = $_POST["nascC"];
$endeC = $_POST["endeC"];
$cidadeC = $_POST["cidadeC"];
$cepC = $_POST["cepC"];
$escola = $_POST["escola"];


}

 
 ?>


  
    
</body>
</html>
