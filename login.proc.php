<?php
include "./19-09-30_projecte_1_social_gallery_m07_db_connection.php";

$user = $_REQUEST['user'];
$pass = $_REQUEST['password'];
$encript = md5($pass);

//Entra si está configurada la variable del formulario del login
if(isset($_REQUEST['user'])){

	$query = "SELECT * FROM usuarios WHERE name_usuario='$user' AND password_usuario='$encript'";

	$result = mysqli_query($conn,$query);
	//La variable $result debería de tener como mínimo un registro coincidente
	if(!empty($result) && mysqli_num_rows($result)==1){
		$row = mysqli_fetch_array($result);
		//Creo una nueva sesión y defino $_SESSION['nombre']
		session_start();
		$_SESSION['nombre']=$user;
		//Voy a mi sitio personal
		header("Location: ./19-09-30_projecte_1_social_gallery_m07_index.php");
	}else{
		//Ha fallado la autenticación vuelvo a index.php
		header("Location: ./index.php");
	}
//Si no está configurada la variable del formulario del login vuelve al index.php
}else{
	header("Location: ./index.php");
}	
?>