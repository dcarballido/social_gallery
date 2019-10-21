<?php
//asignacion de variables de conexion a phpMyAdmin
	$server = "localhost";
	$user = "diego";
	$password = "qweQWE123";
	$dbname = "social_gallery_db";

//creacion de la conexion con db
	$conn = new mysqli($server, $user, $password, $dbname) or die($conn -> connect_error);


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
