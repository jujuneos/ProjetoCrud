<?php

	session_start();
	const user = "root";
	const pass = "";

	try{

		$pdo = new PDO("mysql:host=localhost;dbname=dados", user, pass, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"]);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}

	catch(Exception $e){

		echo "Erro ao conectar ao banco de dados";
		echo $e;

	}

?>