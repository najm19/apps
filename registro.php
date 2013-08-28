<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "telefonosDenun.db.9278967.hostedresource.com"; 
  $bd_usuario = "telefonosDenun"; 
  $bd_password = "Telefonos1!"; 
  $bd_base = "telefonosDenun"; 
 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
 
//variables POST
  $numero=$_POST['numero'];
  $categoria=$_POST['categoria'];
  $seudonimo=$_POST['seudonimo'];
  $pais=$_POST['pais'];
  $comentario=$_POST['comentario'];
  
 
//registra los datos del empleados
  $sql="INSERT INTO Llamadas (numero, categoria, seudonimo, pais, comentario) VALUES ('$numero', '$categoria', '$seudonimo', '$pais', '$comentario')";
mysql_query($sql,$con) or die('Error. '.mysql_error());
 
include('consulta.php');
?>