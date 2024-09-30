<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    atualizarNota($conn, $id, $titulo, $conteudo);

    header('Location: index.php');
    exit;
} else if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $nota = buscarNota($conn, $id);
} else {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Nota</title>
</head>
<body>
    <?php if (isset($nota)): ?>
        <h1>Editar Nota</h1>
        <form method="POST">
            <input type="hidden" name="id" value="<?= $nota['id'] ?>">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="<?= $nota['titulo'] ?>">

            <label for="conteudo">Conteúdo:</label>
            <textarea id="conteudo" name="conteudo"><?= $nota['conteudo'] ?></textarea>

            <button type="submit">Salvar</button>
        </form>
    <?php else: ?>
        <p>Nota não encontrada.</p>
    <?php endif; ?>
</body>
</html>