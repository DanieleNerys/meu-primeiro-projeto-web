<?php
$pageTitle = $pageTitle ?? 'Meu Projeto Web';
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto de estudos com HTML, CSS, JavaScript e PHP.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
<header class="site-header">
    <div class="container header-content">
        <a class="logo" href="index.php">Meu<span>Projeto</span></a>
        <button class="menu-toggle" type="button" aria-label="Abrir menu" aria-expanded="false">
            ☰
        </button>
        <nav class="main-nav" aria-label="Navegação principal">
            <a href="index.php" <?= $currentPage === 'index.php' ? 'aria-current="page"' : '' ?>>Início</a>
            <a href="sobre.php" <?= $currentPage === 'sobre.php' ? 'aria-current="page"' : '' ?>>Sobre</a>
            <a href="contato.php" <?= $currentPage === 'contato.php' ? 'aria-current="page"' : '' ?>>Contato</a>
        </nav>
    </div>
</header>
<main class="container main-content">
