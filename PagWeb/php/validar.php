<?php 
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];

	//conectar a la base de datos
	$conexion = mysqli_connect("localhost","root","","bd_coesicydet");
	$consulta = "SELECT * FROM usuarios WHERE nom_usuario='$usuario' and password='$clave'";
	$resultado = mysqli_query($conexion, $consulta);

	$filas=mysqli_num_rows($resultado);
	if($filas>0){
		header("location:../admin.html");
	}else{
		echo "ERROR";
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);

 ?>