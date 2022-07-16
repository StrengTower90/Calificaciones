<?php
  require('conexion.php');
  $consulta = "SELECT id, Nombres, Apellidos, Iparcial, IIparcial, IIIparcial, NotaFinal FROM registro";

  $resultado = $conexion->query($consulta);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Mostrar datos</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" type="text/css"/>
 </head>
 <body><tr>
 	<table border="1" class="table table-bordered">
  <th>Id</th>
 	<th>Nombre</th>
 	<th>Apellido</th>
 	<th>Primer parcial</th>
 	<th>Segundo parcial</th>
 	<th>Tercer parcial</th>
 	<th>Nota final</th>
 </tr>
  <?php while($fila=$resultado->fetch_assoc()) { ?>
    <tr>
    	<td><?php echo $fila['id']; ?></td>
    	<td><?php echo $fila['Nombres']; ?></td>
    	<td><?php echo $fila['Apellidos']; ?></td>
    	<td><?php echo $fila['Iparcial']; ?></td>
      <td><?php echo $fila['IIparcial'];?></td>
    	<td><?php echo $fila['IIIparcial'];?></td>
      <td><?php echo $fila['NotaFinal']; ?></td>
    </tr>
    <?php } ?>
</table>
 	
 	
 </body>
 </html>