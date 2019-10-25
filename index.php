<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<script src="script.js"></script>
</head>
<body>
	<div style="text-align: center; margin-top: 5%"><h1>Social Gallery</h1></div>
	<div style="text-align: center; margin-top: 10%;">
	<h1>Iniciar sesión</h1>
	<form method="post" action="./login.proc.php" onsubmit="first()">
		<input type="text" name="user" placeholder="Inserta el usuario" required><br/>
		<input type="password" name="password" placeholder="Inserta el password" required><br/><br/>
		<input type="submit" name="Enviar" value="Iniciar sesión" >
	</form>
	<h1>Registrarse</h1>
	<form method="post" action="./signin.proc.php" onsubmit="second()">
		<input type="text" name="user" placeholder="Inserta el nuevo usuario" required><br/>
		<input type="password" name="password" placeholder="Inserta el nuevo password" required><br/><br/>
		<input type="submit" name="Enviar" value="Registrarse" >
	</form>
	</div>
</body>
</html>