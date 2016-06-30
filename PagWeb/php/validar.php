<?php
session_start(); 
include ("conexion.php");
      if(isset($_POST['user']) && !empty($_POST['user']) &&
		isset($_POST['password']) && !empty($_POST['password'])) 
	{
       $con=mysqli_connect($host, $user, $pw, $db)or die ("problemas con el servidor");
         
       $serv=mysqli_query($con, "SELECT nom_usuario, password FROM usuarios WHERE nom_usuario= '$_POST[user]'"); 

       $sesion =mysqli_fetch_array($serv);

       if($_POST['password'] == $sesion['password']){
       	$_SESSION['username'] =$_POST['user'];
       	header("location:../admin.html");
       }else{
              header("location:../forum.html");
            ?>

       	     <style>
                   body{
                        background: red;
                   }
                 </style>
            <?php
       }

}else{
	echo "Debes llenar los campos";
}

 ?>