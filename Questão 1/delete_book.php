<?php
require 'database.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $db->prepare("DELETE FROM livros WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: index.php");
}
?>
