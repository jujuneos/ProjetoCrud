<!DOCTYPE html>
<html xmlns:th="http://thymeleaf.org"
      xlns:layout="http://www.ultraq.net.nz/thymeleaf/layout">
<head>
	<title>Projeto CRUD</title>

    <!--Importa fontes do Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

    <!--Importa materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

    <!--Configura visualização para mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
      
    <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
	<header>
		<nav>
			<div class="nav-wrapper indigo lighten-1">
				<a href="#" class="brand-logo">Lista de clientes</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="index.php" class="waves-effect waves-light btn pink accent-2"><i class="material-icons left">arrow_back</i>Página inicial</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<h3></h3>
	<?php 
		
		include('../Models/consulta.php');

		echo "<table>";
		while($ln = $consulta->fetchObject()){
			echo '<tr><td>Id: ' . $ln->id . '</td>';
			echo '<td>Nome: ' . $ln->nome . '</td>';
			echo '<td>Email: ' . $ln->email . '</td>';
			echo '<td>Telefone: ' . $ln->telefone . '</td>';
		}
		echo "</table>";

	?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>