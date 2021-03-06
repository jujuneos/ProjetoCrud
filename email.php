<!DOCTYPE html>
<html xmlns:th="http://thymeleaf.org"
      xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout">
<head>
	<title>Projeto CRUD</title>

    <!--Importa fontes do Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

    <!--Importa materialize.css-->
    <link type="text/css" rel="stylesheet" href="Views/materialize/css/materialize.min.css"  media="screen,projection"/>

    <!--Configura visualização para mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
      
    <link rel="stylesheet" href="../Views/styles/style.css"/>
</head>
<body>
	<header>
		<nav>
			<div class="nav-wrapper indigo lighten-1">
				<a href="#" class="brand-logo">Enviar e-mail</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="Views/index.html" class="waves-effect waves-light btn pink accent-2"><i class="material-icons left">arrow_back</i>Página inicial</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<h3></h3>
	<?php

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
		use PHPMailer\PHPMailer\SMTP;

		require 'vendor/phpmailer/src/Exception.php';
		require 'vendor/phpmailer/src/PHPMailer.php';
		require 'vendor/phpmailer/src/SMTP.php';

		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPDebug = SMTP::DEBUG_OFF;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->SMTPAuth = true;

		$mail->CharSet = 'utf-8';
		$mail->Username = 'exemplo@exemplo.com';
		$mail->Password = 'senha';

		/*As três proximas linhas recebem, respectivamente,
		o e-mail e nome do remetente, e-mail e nome para resposta,
		e e-mail e nome do destinatário.*/
		$mail->setFrom('exemplo@exemplo.com', 'Nome do remetente');
		$mail->addReplyTo('exemplo@exemplo.com', 'Nome do remetente');
		$mail->addAddress('destino@destino.com', 'Nome do destinatário');

		#Assunto do e-mail
		$mail->Subject = 'Link do repositório do CRUD feito em PHP para vaga de desenvolvedor Júnior';

		#Caso não consiga pegar o assunto pelo subject, pega a partir da página contents.html
		$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

		#Corpo do e-mail
		$mail->AltBody = 'Boa noite! Segue o link do repositório: https://github.com/jujuneos/ProjetoCrud';

		if (!$mail->send()) {
		    echo 'E-Mail não enviado: '. $mail->ErrorInfo;
		} 

		else {
		    echo 'E-mail enviado!';
		}

	?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>