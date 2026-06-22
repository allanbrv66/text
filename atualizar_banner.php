<?php
session_start();

// Proteção: Se não for o administrador, bloqueia o acesso
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) { 
    header("Location: clinica.php"); 
    exit; 
}

$caminho_json = "dados_pagina.json";

// Padrão inicial caso o JSON não exista
$dados_atuais = [
    "titulo" => "Sobre o Espaço Singular",
    "conteudo" => "Clínica de atendimentos para crianças, adolescentes, adultos e idosos com limitações físicas, cognitivas, sensoriais, mentais ou sociais.",
    "imagem_banner_clinica" => "img/frente.png",
    "titulo_banner_clinica" => "Espaço Singular",
    "subtitulo_banner_clinica" => "Agende sua consulta online"
];

// Carrega os dados existentes para não apagar o que já foi salvo
if (file_exists($caminho_json)) {
    $conteudo_json = file_get_contents($caminho_json);
    $dados_decorados = json_decode($conteudo_json, true);
    if (is_array($dados_decorados)) {
        $dados_atuais = array_merge($dados_atuais, $dados_decorados);
    }
}

$nome_imagem = $dados_atuais['imagem_banner_clinica']; // Mantém a imagem atual por padrão
$pasta_destino = "img/"; 

// Verifica se uma nova imagem foi enviada
if (isset($_FILES['imagem_banner_clinica']) && $_FILES['imagem_banner_clinica']['error'] === UPLOAD_ERR_OK) {
    $nome_original = $_FILES['imagem_banner_clinica']['name'];
    $extensao = pathinfo($nome_original, PATHINFO_EXTENSION);
    
    $novo_nome_arquivo = time() . "_" . uniqid() . "." . $extensao;
    $caminho_completo = $pasta_destino . $novo_nome_arquivo;

    if (!is_dir($pasta_destino)) {
        mkdir($pasta_destino, 0755, true);
    }

    if (move_uploaded_file($_FILES['imagem_banner_clinica']['tmp_name'], $caminho_completo)) {
        // SE HOUVER UMA IMAGEM ANTIGA SALVA, ELA EXISTIR E NÃO FOR A PADRÃO: Apague-a.
        if (!empty($dados_atuais['imagem_banner_clinica']) && $dados_atuais['imagem_banner_clinica'] !== 'img/frente.png' && file_exists($dados_atuais['imagem_banner_clinica'])) {
            unlink($dados_atuais['imagem_banner_clinica']);
        }
        $nome_imagem = $caminho_completo; 
    }
}

// Atualiza as informações com os dados vindos do formulário
$dados_atuais['titulo_banner_clinica'] = isset($_POST['titulo_banner_clinica']) ? trim($_POST['titulo_banner_clinica']) : $dados_atuais['titulo_banner_clinica'];
$dados_atuais['subtitulo_banner_clinica'] = isset($_POST['subtitulo_banner_clinica']) ? trim($_POST['subtitulo_banner_clinica']) : $dados_atuais['subtitulo_banner_clinica'];
$dados_atuais['imagem_banner_clinica'] = $nome_imagem;

// Salva de volta no arquivo JSON
file_put_contents($caminho_json, json_encode($dados_atuais, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

// Redireciona de volta para o painel com uma flag de sucesso
header("Location: adiminis1.php?sucesso=1");
exit;
?>
