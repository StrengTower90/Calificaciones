
<?php
 
 // require 'conexion.php';
  require "conexion.php";
  if ($_POST > 0) {
    $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
   $primer_parcial=$_POST['Iparcial'];
   $segundo_parcial=$_POST['IIparcial'];
   $tercer_parcial=$_POST['IIIparcial'];
   $nota_final=$_POST['Nfinal'];

   $insertar="INSERT INTO registro(Nombres,Apellidos,Iparcial,IIparcial,IIIparcial,NotaFinal) VALUES ('$nombre','$apellido','$primer_parcial','$segundo_parcial','$tercer_parcial','$nota_final')"; 
   $get_rows = "SELECT * FROM registro";
    
    $tam_before = $conexion->query($get_rows);   
    $result=$conexion->query($insertar);
    $tam_after = $conexion->query($get_rows);
    # code...
  }else
  {
    echo $_POST['nombre'];
  }

   
    

   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
   	<meta charset="UTF-8">
   	<title>Datos Enviados</title>
     </head>
   <body onload="sobre_laCarga()">

   	   
   	   	   <?php if ($tam_after->num_rows > $tam_before->num_rows) { ?>
   	   	   	<div id="panel1" style="width: 300px; margin: 10px auto; padding: 10px; text-align: center; background: green; border-radius: 10px; color: white;" >
                      <h1>Registro numero: <?php echo $tam_after->num_rows; ?> Guardado</h1> 
   	   	      </div>
   	   	   <?php }else { ?>
   	   	   	<div id="panel2" style="width: 300px; margin: 10px auto; padding: 10px; text-align: center; background: red; border-radius: 10px; color: white;">
                      <h1>Error al guardar el registro</h1>	
   	   	   </div>
   	   	   <?php } ?>
   	   
   	
   </body>
   </html>
   