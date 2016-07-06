<?php 
	$conexion = mysqli_connect("localhost","root","","bd_coesicydet");
	$query="SELECT *FROM entrada";
	$resltado=$conexion->query($query);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bievenido</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style2.css">
</head>
<body>
	<?php include 'header.php'; ?>
	<br><br>
	<div class="container">
		<br>
	  <h2>Oficios</h2>
	  <p>Tabla de registro de oficios de COESICYDET:</p>
	  <div class="table-responsive">
		  <table class="table table-striped">

		    <thead >
		      <tr>
		        <th>N°</th>
		        <th>Num Oficio</th>
		        <th>Asunto</th>
		        <th>Fecha</th>
		        <th>Destinatario</th>
		        <th>Descripcion</th>
		        <th>Remitente</th>
		        <th>Anexo</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php while($row=$resltado->fetch_assoc()){ ?>
		      <tr>
		        <td><?php echo $row['id']; ?></td>
		        <td><?php echo $row['num_oficio']; ?></td>
		        <td><?php echo $row['asunto']; ?></td>
		        <td><?php echo $row['fecha']; ?></td>
		        <td><?php echo $row['destinatario']; ?></td>
		        <td><?php echo $row['descripcion']; ?></td>
		        <td><?php echo $row['remitente']; ?></td>
		        <td><?php echo $row['aneso']; ?></td>
		      </tr>
		      <?php } ?>
		    </tbody>
		  </table>
	  </div>
	</div>
	<a href="javascript:window.print();" class="imprimir">Imprimir</a>
	<style>
		.imprimir{
			background-color: #C63;
			color: #FFF;
			padding-left: 8px;
			padding-right: 8px;
			padding-bottom: 7px;
			padding-top: 7px;
		}
	</style>
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
</body>
</html>