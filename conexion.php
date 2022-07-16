 <?php 
    $conexion=new mysqli("localhost","root","","calificaciones");

   if(mysqli_connect_errno()){
   	echo "Conexion Fallida:", mysqli_connect_errno();
   	exit(); 
   }
   ?>