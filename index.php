<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Notificaciones web</title>
	<link rel="stylesheet" href="">
	<script src="js/push.min.js"></script>
</head>
<body>

	<?php

	echo '<script>
		Push.create("Hello Kioto",{
			body: "Respuesta a Ticket",
			icon: "img/logo.png",
			timeout: 4000,
			onClick: function (){
				window.location="http://10.7.16.211/SistemaDeTicket/st_ModuloTicket/";
				this.close();
			}
		});
	</script>';

	?>
</body>
</html>