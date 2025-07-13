<?php
require_once '../config/db.php';
$pdo = conectarBanco();

$sql = "SELECT * FROM links ORDER BY id DESC";
$stmt = $pdo->query($sql);
$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($dados);
?>
