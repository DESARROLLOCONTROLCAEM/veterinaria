<?php 


	//session_start();
	require_once "conexion.php";

	$conexion=conexion();

		$usuario=$_POST['email'];
		$pass=$_POST['P'];

		$sql="SELECT * from usuarios where identificacion=$usuario and contrasena=$pass";	
		$result=mysqli_query($conexion,$sql);

		if(mysqli_num_rows($result) > 0){
			//$_SESSION['user']=$usuario;
			$result;
		}else{
			echo 0;
		}
 ?>