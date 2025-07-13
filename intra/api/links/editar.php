<?php
require_once '../config/db.php';
$pdo = conectarBanco();

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$url = $_POST['url'];
$categoria = $_POST['categoria'];

$sql = "UPDATE links SET titulo = ?, url = ?, categoria = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$titulo, $url, $categoria, $id]);

echo json_encode(['status' => 'atualizado']);
?>
