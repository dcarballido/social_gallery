<?php
include "./19-09-30_projecte_1_social_gallery_m07_db_connection.php"; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<script src="19-10-21_projecte_1_social_gallery_m07_script.js"></script>
</head>
<body>
	<div style="text-align: center; margin-top: 5%"><h1>Social Gallery</h1></div>
	<div style="text-align: center; margin-top: 10%;">
	<h1>Iniciar sesión</h1>
	<form method="post" action="./19-10-21_projecte_1_social_gallery_m07_login.proc.php" onsubmit="first()">
		<input type="text" name="user" placeholder="Inserta el usuario" id="user" ><br/>
		<input type="password" name="password" placeholder="Inserta el password" id="password" ><br/><br/>
		<input type="submit" name="Enviar" value="Iniciar sesión" >
	</form>
	<h1>Registrarse</h1>
	<form method="post" action="./19-10-21_projecte_1_social_gallery_m07_signin.proc.php" onsubmit="second()">
		<input type="text" name="user" placeholder="Inserta el nuevo usuario" required><br/>
		<input type="password" name="password" placeholder="Inserta el nuevo password" required><br/><br/>
		<input type="submit" name="Enviar" value="Registrarse" >
	</form>
	</div>
</body>
</html>