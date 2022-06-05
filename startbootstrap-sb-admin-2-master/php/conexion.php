

<?php 
	function conexion()
	{
		
        $conexion = new mysqli("localhost","root","root","eutanasia");
        if ($conexion->connect_errno){
            echo "fallo conexion";
        }else{
            echo "";                  
        }
        return $conexion;
		//return $conexion=mysqli_connect("localhost","root","root","eutanasia");
	}

?>