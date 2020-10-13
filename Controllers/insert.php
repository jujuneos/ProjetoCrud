<!DOCTYPE html>
<html xmlns:th="http://thymeleaf.org"
      xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout">
<head>
	<title>Projeto CRUD</title>

    <!--Importa fontes do Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

    <!--Importa materialize.css-->
    <link type="text/css" rel="stylesheet" href="../Views/materialize/css/materialize.min.css"  media="screen,projection"/>

    <!--Configura visualização para mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
      
    <link rel="stylesheet" href="../Views/styles/style.css"/>
</head>
<body>
	<header>
		<nav>
			<div class="nav-wrapper indigo lighten-1">
				<a href="#" class="brand-logo">Sucesso!</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="../Views/index.html" class="waves-effect waves-light btn pink accent-2"><i class="material-icons left">arrow_back</i>Página inicial</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<h3></h3>
	<?php

		include('../Models/dataconfig.php');
		$id = $_POST["id"];
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$telefone = $_POST["telefone"];

		$statement = $pdo->prepare("INSERT INTO cliente (id, nome, email, telefone) VALUES (?,?,?,?)");
		$statement->execute([$id, $nome, $email, $telefone]);

		echo "Cliente cadastrado com sucesso!"
	
	?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>