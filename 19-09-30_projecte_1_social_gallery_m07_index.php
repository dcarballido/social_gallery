<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
//vinculamos con el archivo php de conexion a db

include './19-09-30_projecte_1_social_gallery_m07_db_connection.php';

//query de prueba
		// 	$query = "SELECT * FROM t_gallery";

		// 	$result = $conn->query($query);

		// 	if ($result->num_rows > 0) {
		// 		while ($row = $result->fetch_array()) {
		// 			echo "id: " . $row["photo_id"] . " - name: " . $row["photo_name"] . " - path: " . $row["photo_path"] . " - date: " . $row["photo_date"] . " - size: " . $row["photo_size"] . " - type: " . $row["photo_type"] . "<br>";
		// 		}
		// 	}

		// 	;






?>
<!-- boton de cerrar sesion de usuario -->
<div style="text-align: right;">
		<?php
		//Mantengo la sesión. Por ende puedo utilizar la variable $_SESSION anteriormente configurada
		session_start();
		if(isset($_SESSION['nombre'])){
			echo "<a href='./logout.proc.php'>Cerrar sesión de ".$_SESSION['nombre']."</a>&nbsp;&nbsp;";
		}else{
			header("Location: ./index.php");
		}
		?>
	</div> 
<!-- formulario de recogida de fichero/datos -->

	<div>
		<h1>UPDATE A PHOTOGRAPH</h1>
		<form action="19-09-30_projecte_1_social_gallery_m07_upload.php" method="POST" enctype="multipart/form-data">
			<p>Archivo: </p><br>
			<input type="file" name="i_file" accept="image/png, image/jpg, image/jpeg, image/gif" required><br>
			<p>Nombre de la foto: </p><br>
  			<input type="text" name="i_photo_name" required><br><br>
  			<input type="submit" name="submit"><br>
		</form>
	</div><br>


<?php

$result = mysqli_query($conn, "SELECT photo_name, photo_path, photo_date FROM t_gallery");

if (!empty($result) && mysqli_num_rows($result)>0) {

	while ($row = mysqli_fetch_array($result)) {
			echo "<div>";
			echo "<img src=" . $row['photo_path'] . "style = width='500 height='500'>";
			echo "<h2>Nombre asignado a la foto: " . $row['photo_name'] . "</h2>";
			echo "<h2>Ruta del fichero: " . $row['photo_path'] . "</h2>";	
			echo "<h2>Fecha de inserción de la foto: " . $row['photo_date'] . "</h2>";
			echo "</div>";
		}	

}else{



}

?>

</body>
</html>