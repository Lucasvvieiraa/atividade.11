<?php
include 'include.php';

$notas = listarNotas($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bloco de Notas</title>
</head>
<body>
    <h1>Suas Notas</h1>
    <a href="create.php">Criar Nova Nota</a>
    <table>
        </table>
</body>
</html>