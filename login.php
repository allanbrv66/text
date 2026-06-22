<?php
session_start();
header('Content-Type: application/json');

// Recebe os dados enviados via JSON pelo JavaScript
$input = json_decode(file_get_contents('php://input'), true);

$email = isset($input['email']) ? trim($input['email']) : '';
$senha = isset($input['senha']) ? trim($input['senha']) : '';

// Credenciais do Administrador
$admin_email = 'allanlaracunha8@gmail.com';
$admin_senha = 'Clara123$';

if ($email === $admin_email) {
    if ($senha === $admin_senha) {
        // Fixação de sessão: Gera um novo ID de sessão por segurança ao logar
        session_regenerate_id(true);
        $_SESSION['admin'] = true;
        $_SESSION['admin_email'] = $email;
        
        echo json_encode(['sucesso' => true, 'redirect' => 'adiminis1.php']);
    } else {
        // Se o e-mail é do admin, mas a senha está errada, avisa o front
        echo json_encode(['sucesso' => false, 'erro' => 'Senha administrativa incorreta.']);
    }
} else {
    // Não é e-mail de admin, pode mandar para o Supabase
    echo json_encode(['sucesso' => false, 'cliente' => true]);
}
exit;
