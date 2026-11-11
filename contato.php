<?php
$pageTitle = 'Contato | Meu Projeto Web';
require __DIR__ . '/includes/header.php';
?>
<section class="page-heading">
    <p class="eyebrow">Contato</p>
    <h1>Envie uma mensagem</h1>
    <p>Exemplo de formulário com validação no navegador e no PHP.</p>
</section>

<?php if (isset($_GET['status']) && $_GET['status'] === 'sucesso'): ?>
    <div class="alert success" role="status">Mensagem recebida! Este exemplo não envia e-mail nem salva os dados.</div>
<?php elseif (isset($_GET['status']) && $_GET['status'] === 'erro'): ?>
    <div class="alert error" role="alert">Confira os campos e tente novamente.</div>
<?php endif; ?>

<form class="contact-form" action="processa-contato.php" method="POST">
    <label for="nome">Nome</label>
    <input id="nome" name="nome" type="text" minlength="2" maxlength="80" required>

    <label for="email">E-mail</label>
    <input id="email" name="email" type="email" maxlength="120" required>

    <label for="mensagem">Mensagem</label>
    <textarea id="mensagem" name="mensagem" rows="5" minlength="5" maxlength="1000" required></textarea>

    <button class="button" type="submit">Enviar mensagem</button>
    <p class="form-feedback" aria-live="polite"></p>
</form>
<?php require __DIR__ . '/includes/footer.php'; ?>
