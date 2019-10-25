<?php
//vincula el fichero php que conecta con la db
//asignacion de variables de conexion a phpMyAdmin
	$server = "localhost";
	$user = "diego";
	$password = "qweQWE123";
	$dbname = "social_gallery_db";

//creacion de la conexion con db
	$conn = new mysqli($server, $user, $password, $dbname) or die($conn -> connect_error);

// matengo session iniciada


		//Mantengo la sesión. Por ende puedo utilizar la variable $_SESSION anteriormente configurada
		session_start();
		if(isset($_SESSION['nombre'])){
			echo "<a href='./logout.proc.php'>Cerrar sesión de ".$_SESSION['nombre']."</a>&nbsp;&nbsp;";
		}else{
			header("Location: ./index.php");
		}
		
//muestra el nombre del archivo

echo "<strong>El nombre del archivo es: " . $_FILES["i_file"]["name"] . "</strong><br>";
echo "<strong>El nombre asignado por el usuario es: " . $_REQUEST["i_photo_name"] . "</strong><br>";

$valores = explode(".", $_FILES["i_file"]["name"]);
	$extension = $valores[count($valores)-1];

$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["i_file"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$date = date('Y-m-d');



// revisa si el archivo es una imagen

if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["i_file"]["tmp_name"]);

    if($check !== false) {

        echo "<strong>El fichero es una imagen - " . $check["mime"] . ".</strong><br>";
        
        $uploadOk = 1;

        // revisa si el archivo ya existe en el directorio Uploads

		if (file_exists($target_file)) {

		    echo "<strong>Lo sentimos, el archivo ya existe</strong><br>";

		    $uploadOk = 0;

		}else {

			$uploadOk = 1;

		// muestra el tamaño del archivo
			if ($_FILES["i_file"]["size"] > 7000000) {
				
				echo "El tamaño de la imagen es demasiado grande";
				$uploadOk = 0;


			}else{

			echo "<strong>El tamaño de la imagen es de " . $_FILES["i_file"]["size"] . " bytes</strong><br>";
			$uploadOk = 1;

// filtro de extensiones del archivo

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {

			    echo "<strong>Lo sentimos, solo se permiten archivos .jpg, .png, .jpeg y/o .gif.</strong><br>";

			    $uploadOk = 0;

			}else {

			$uploadOk = 1;

				// revisa si ha habido errores

				if ($uploadOk == 0) {

				    echo "<strong>Lo sentimos, el archivo no ha sido subido.</strong><br>";

				// intenta mover el archivo al directorio

				} else {
				    if (move_uploaded_file($_FILES["i_file"]["tmp_name"], $target_file)) {
				        echo "<strong>El archivo ". basename( $_FILES["i_file"]["name"]). " ha sido guardado en la carpeta " . $target_dir . " .</strong><br>";
				        $uploadOk = 1;
				    } else {
				        echo "<strong>Lo sentimos, ha habido un error al subir tu archivo.</strong><br>";
				    }
				}
			}


			}

			
		}

    } else {

        echo "<strong>File is not an image.</strong><br>";

        $uploadOk = 0;
    }

    $req_name = $_REQUEST['i_photo_name'];
    $req_size = $_FILES["i_file"]["size"];
    $req_type = $check["mime"];
	$query = "INSERT INTO t_gallery (id_usuario_photo, photo_name, photo_path, photo_date, photo_size, photo_type
) VALUES (' $_SESSION['id_usuario'] ', ' $req_name  ', ' $target_file ', '$date ', '$req_size', '$req_type')";


    // crea la INSERT query

    if ($uploadOk == 1 && mysqli_query($conn, $query)
) {

    	
    	echo $query . "<br>";

    	


    	}else {

    		echo "<strong>No se ha podido insertar en la base de datos.</strong><br>";
    		echo mysqli_error();

    	}






}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="script.js"></script>
</head>
<body>
	<button onclick="location.href='19-09-30_projecte_1_social_gallery_m07_index.php'">Volver a la página principal</button>

</body>
</html>