<?php

	include('dataconfig.php');
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];

	$statement = $pdo->prepare("INSERT INTO cliente (nome, email, telefone) VALUES (?,?,?)");
	$statement->execute([$nome, $email, $telefone]);

	echo "Cliente cadastrado com sucesso";
	
?>