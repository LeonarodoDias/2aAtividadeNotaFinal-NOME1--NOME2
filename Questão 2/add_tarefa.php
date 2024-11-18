<?php
require 'database.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $descricao = $_POST['descricao'];
    $data_vencimento = $_POST['data_vencimento'];
    $stmt = $banco->prepare("INSERT INTO tarefas (descricao, data_vencimento) VALUES (?, ?)");
    $stmt->execute([$descricao, $data_vencimento]);
    header("Location: index.php");
    exit();
}
?>
