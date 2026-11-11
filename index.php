<?php
$pageTitle = 'Início | Meu Projeto Web';
require __DIR__ . '/includes/header.php';

$topics = [
    ['title' => 'HTML5', 'description' => 'Organize o conteúdo com elementos semânticos.'],
    ['title' => 'CSS3', 'description' => 'Crie layouts, cores e páginas adaptáveis.'],
    ['title' => 'JavaScript', 'description' => 'Adicione interatividade ao site.'],
    ['title' => 'PHP', 'description' => 'Gere conteúdo dinâmico no servidor.'],
];
?>
<section class="hero">
    <p class="eyebrow">Projeto de estudos</p>
    <h1>Aprenda desenvolvimento web na prática</h1>
    <p>Uma estrutura inicial para praticar HTML, CSS, JavaScript e PHP em um só projeto.</p>
    <a class="button" href="sobre.php">Conheça o projeto</a>
</section>

<section class="section">
    <h2>O que você vai encontrar</h2>
    <div class="card-grid">
        <?php foreach ($topics as $topic): ?>
            <article class="card">
                <h3><?= htmlspecialchars($topic['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                <p><?= htmlspecialchars($topic['description'], ENT_QUOTES, 'UTF-8') ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section notice">
    <h2>Conteúdo dinâmico</h2>
    <p>Esta página foi gerada com PHP. A data exibida é atualizada automaticamente:</p>
    <strong><?= date('d/m/Y') ?></strong>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
