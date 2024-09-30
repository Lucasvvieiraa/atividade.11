<?php
include 'include.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    excluirNota($conn, $id);
    header('Location: index.php');
    exit;
}
?>