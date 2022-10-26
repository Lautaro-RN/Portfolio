<head>
	<title>Lautaro Franco - Contáctame</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="styles.css" rel="stylesheet">
	<!-- Bootstrap (CSS only) --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg_color">
<?php include "phpmailer.php"?>

<div id="formulario"class="text-center font section_padding">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h2 class="font_title">Escríbeme</h2>
		<input type="text"class=""name="nombre"placeholder="Nombre"><br></br>
		<input type="email"name="correo"placeholder="Su dirección de correo"><br></br>
		<textarea name="mensaje"id="texto"class=""placeholder="Su mensaje"></textarea><br><br>
		<label><input type="submit"name="enviar"value="ENVIAR"class="rounded-3"id="boton_enviar"></label><br><br>
	</form>
</div>

<div id="volver" class="section_padding font  text-center rounded-2">
	<a type="button"class="btn btn-primary rounded-pill d-xs-none btn_flotante"href="index.php">VOLVER AL PORTFOLIO</a>
</div>

</body>

<footer id=""class="prueba">
	<div id=""class="bg_color text-center"><p class="font">Hecho por Lautaro Franco Fullstack Web Dev. 2022</p></div>
</footer>