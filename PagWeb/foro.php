<!DOCTYPE html>
<html lang="es">
<head>
	<title>:: FORO ::</title>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
		
	<!-- navbar-->
<div class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<a href="foro.php" class="navbar-brand">Iniciar Sesion</a>
			
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="foro.php">Administrativos</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- login -->
<div class="login-form">
	<form method="post">
	     <h1>COESICYDET <img src="img/icon.png" alt=""></h1>
	     <div class="form-group ">
	       <input type="text" class="form-control" placeholder="Usuario" id="UserName" name="user">
	       <i class="fa fa-user"></i>
	     </div>
	     <div class="form-group log-status">
	       <input type="password" class="form-control" placeholder="Contraseña" id="Password" name="password">
	       <i class="fa fa-lock"></i>
	     </div>
	     	
	     <input type="submit" value="Ingresar" class="btn btn-primary" name="botonL">
	      <a class="link" href="#">¿Olvidaste tu contraseña?</a>	
<div class="alert"></div>
  <?php
session_start(); 
include ("php/conexion.php");
if(isset($_POST['botonL'])){
      if(isset($_POST['user']) && !empty($_POST['user']) &&
		isset($_POST['password']) && !empty($_POST['password'])) 
	{
       $con=mysqli_connect($host, $user, $pw, $db)or die ("problemas con el servidor");
         
       $serv=mysqli_query($con, "SELECT nom_usuario, password FROM usuarios WHERE nom_usuario= '$_POST[user]'"); 

       $sesion =mysqli_fetch_array($serv);

       if($_POST['password'] == $sesion['password']){
       	$_SESSION['username'] =$_POST['user'];
       	header("location:admin.html");

       }else{
            
              echo "Error de datos";
      }

}else{
 echo " Rellena todo los campos";
}
}
 ?>
</form>   
</div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
            $(document).ready(function(){
            $('.log-btn').click(function(){
                $('.log-status').addClass('wrong-entry');
               $('.alert').fadeIn(500);
               setTimeout( "$('.alert').fadeOut(1500);",3000 );
            });
            $('.form-control').keypress(function(){
                $('.log-status').removeClass('wrong-entry');
            });

            });
          </script>
  <script>
  function validar(){

var nombre = document.getElementById("UserName").value; //Cogemos el valor del campo nombre
var password = document.getElementById("Password")
var miDiv = document.getElementById("alerta");  // Cogemos la referencia al nuestro div.
var html = "";  //En esta variable guardamos lo que queramos añadir al div.

if(nombre == "") {   //Comprobamos que está vacío

        miDiv.innerHTML = "";     //innerHTML te añade código a lo que ya haya por eso primero lo ponemos en blanco.
		html = "Debe llenar los campos*";
		miDiv.innerHTML = html;
		return true;

}

}
  </script>

</body>
</html>