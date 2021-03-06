<!DOCTYPE html>
<html xmlns:th="http://thymeleaf.org"
      xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout">
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
				<a href="#" class="brand-logo">Projeto CRUD</a>
			</div>
		</nav>
	</header>
	<h3></h3>
	<div class="row">
		<div class="col s2">
			<a href="formulario.html" class="waves-effect waves-light btn-large pink accent-2"><i class="material-icons left">add_box</i>Inserir cliente</a>
			<h3></h3>
			<a href="atualiza.html" class="waves-effect waves-light btn-large pink accent-2"><i class="material-icons left">autorenew</i>Atualizar cliente</a>
			<h3></h3>
			<a href="seleciona.html" class="waves-effect waves-light btn-large pink accent-2"><i class="material-icons left">storage</i>Selecionar cliente</a>
			<h3></h3>
			<a href="deleta.html" class="waves-effect waves-light btn-large pink accent-2"><i class="material-icons left">delete</i>Deletar cliente</a>
			<h3></h3>
			<a href="lista.php" class="waves-effect waves-light btn-large pink accent-2"><i class="material-icons left">view_list</i>Listar clientes</a>
			<h3></h3>
			<a href="../email.php" class="waves-effect waves-light btn-large pink accent-2"><i class="material-icons left">email</i>E-mail sender</a>
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>