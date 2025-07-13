<?php
require_once '../config/db.php';
$pdo = conectarBanco();

$id = $_GET['id'];
$sql = "DELETE FROM links WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

echo json_encode(['status' => 'excluido']);
?>
