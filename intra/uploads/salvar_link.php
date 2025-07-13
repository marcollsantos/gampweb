<?php
include 'conexao.php'; // conexão com o banco

$titulo = $_POST['titulo'];
$url = $_POST['url'];
$categoria = $_POST['categoria'];

// Upload da imagem
$imagem_nome = $_FILES['imagem']['name'];
$imagem_tmp = $_FILES['imagem']['tmp_name'];
$destino = 'uploads/' . $imagem_nome;
move_uploaded_file($imagem_tmp, $destino);

// Inserir no banco
$sql = "INSERT INTO links (titulo, url, categoria, imagem) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $titulo, $url, $categoria, $destino);
$stmt->execute();

header("Location: index.php");
?>
