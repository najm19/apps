<?php
//Configuracion de la conexion a base de datos
$bd_host = "telefonosDenun.db.9278967.hostedresource.com"; 
$bd_usuario = "telefonosDenun"; 
$bd_password = "Telefonos1!"; 
$bd_base = "telefonosDenun"; 

$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 

mysql_select_db($bd_base, $con); 

//consulta todos los empleados

$sql=mysql_query("SELECT * FROM Llamadas",$con);

//muestra los datos consultados
echo "</p>Número - Categoría - Seudónimo - País - Comentarios</p> \n";
while($row = mysql_fetch_array($sql)){
	echo "<p>".$row['numero']." - ".$row['categoria']." - ".$row['seudonimo']." - ".$row['pais']." - ".$row['comentarios']."</p> \n";
}
?>