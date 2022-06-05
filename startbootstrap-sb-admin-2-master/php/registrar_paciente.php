<?php 


	//session_start();
	require_once "conexion.php";

	$conexion=conexion();

		$namep='"'.$_POST['namep'].'"';
		$namec='"'.$_POST['namec'].'"';
		$genero='"'.$_POST['genero'].'"';
		$especie='"'.$_POST['especie'].'"';
		$nombrecientifico='"'.$_POST['nombrecientifico'].'"';
		$etapa='"'.$_POST['etapa'].'"';
		$sexo='"'.$_POST['sexo'].'"';

		$sql="INSERT INTO pacientes (n_paciente, c_comun, genero, especie, nombrecientifico, etapa, sexo) VALUES ({$namep},{$namec},{$genero},{$especie},{$nombrecientifico}, {$etapa}, {$sexo})";	
		$result=mysqli_query($conexion,$sql);

		if(($result) == 'true'){
			//$_SESSION['user']=$usuario;
			echo 1;
		}else{
			echo 0;
		}
 ?>