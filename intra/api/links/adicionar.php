<?php
require_once '../config/db.php';
$pdo = conectarBanco();

$titulo = $_POST['titulo'];
$url = $_POST['url'];
$categoria = $_POST['categoria'];

$imagem = $_FILES['imagem'];
$caminhoImagem = '../../uploads/' . basename($imagem['name']);
move_uploaded_file($imagem['tmp_name'], $caminhoImagem);

$sql = "INSERT INTO links (titulo, url, categoria, imagem) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$titulo, $url, $categoria, $caminhoImagem]);

echo json_encode(['status' => 'ok']);
?>
