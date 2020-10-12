<?php

	include('../Models/dataconfig.php');
	include('../Views/insert.html');
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];

	$statement = $pdo->prepare("INSERT INTO cliente (nome, email, telefone) VALUES (?,?,?)");
	$statement->execute([$nome, $email, $telefone]);
	
?>