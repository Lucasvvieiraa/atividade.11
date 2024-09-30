<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    inserirNota($conn, $titulo, $conteudo);

    header('Location: index.php'); // Substitua 'index.php' pelo nome da sua página principal
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Criar Nova Nota</title>
</head>
<body>
    <h1>Criar Nova Nota</h1>
    <form method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="conteudo">Conteúdo:</label>
        <textarea id="conteudo" name="conteudo"   
 required></textarea>

        <button type="submit">Salvar</button>
    </form>   

</body>
</html>