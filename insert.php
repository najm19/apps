 <?php
$con=mysqli_connect("telefonosDenun.db.9278967.hostedresource.com","telefonosDenun","Telefonos1!","telefonosDenun");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Llamadas (numero, categoria, seudonimo, pais, comentarios)
VALUES
('$_POST[numero]','$_POST[categoria]','$_POST[seudonimo]','$_POST[pais]','$_POST[comentario]')";

mysqli_query($con,$sql) or die('Error. '.mysqli_error(con));
  
  mysqli_close($con);

?>
