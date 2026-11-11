<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contato.php');
    exit;
}

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$mensagem = trim($_POST['mensagem'] ?? '');

$nomeValido = mb_strlen($nome) >= 2 && mb_strlen($nome) <= 80;
$emailValido = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
$mensagemValida = mb_strlen($mensagem) >= 5 && mb_strlen($mensagem) <= 1000;

if (!$nomeValido || !$emailValido || !$mensagemValida) {
    header('Location: contato.php?status=erro');
    exit;
}

// Em um projeto real, os dados poderiam ser gravados em banco de dados
// ou enviados por um serviço de e-mail configurado com segurança.
header('Location: contato.php?status=sucesso');
exit;
