<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "telefonosDenun.db.9278967.hostedresource.com"; 
  $bd_usuario = "telefonosDenun"; 
  $bd_password = "Telefonos1!"; 
  $bd_base = "telefonosDenun"; 
 
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	mysql_select_db($bd_base, $con); 
 
//consulta todas las llamadas
$sql=mysql_query("SELECT * FROM Llamadas",$con);
?>
<table style="color:#000099;width:400px;">
	<tr style="background:#9BB;">
		<td>Número</td>
		<td>Categoría</td>
		<td>Seudónimo</td>
		<td>País</td>
		<td>Comentarios</td>
		
	</tr>
<?php
  while($row = mysql_fetch_array($sql)){
  echo "<tr>";
  	echo "<td>".$row['numero']."</td>";
  	echo "<td>".$row['categoria']."</td>";
  	echo "<td>".$row['seudonimo']."</td>";
	echo "<td>".$row['pais']."</td>";
	echo "<td>".$row['comentarios']."</td>";
  	echo "</tr>";
  }
?>
</table>