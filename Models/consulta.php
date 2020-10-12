<?php

	include('dataconfig.php');
	$consulta = $pdo->prepare("SELECT * FROM cliente");
	$consulta->execute();

?>