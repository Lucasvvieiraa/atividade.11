<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $usuario_id = $_POST['usuario_id']; 

    $stmt = $conn->prepare("INSERT INTO nota (titulo, conteudo, usuario_id) VALUES (?, ?, ?)");
    $stmt->execute([$titulo, $conteudo, $usuario_id]);

    header('Location: index.php');
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
        <textarea id="conteudo" name="conteudo" required></textarea>

        <input type="hidden" name="usuario_id" value="1"> 
        <button type="submit">Salvar</button>
        
    </form>  
</body>
</html>