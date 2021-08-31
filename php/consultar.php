<?php
//http://localhost/sistemaphp/php/eliminar.php?id=4
$conexion = new mysqli('localhost', 'root', '', 'sistema') or die('no se conecto' . mysqli_connect_error());
$sql = "SELECT * FROM `clientes`;";
$result = mysqli_query($conexion, $sql);
$clientes = array();
while ($row = mysqli_fetch_array($result)) {
    array_push($clientes,$row);
}
echo json_encode($clientes);
mysqli_free_result($result);
mysqli_close($conexion);

?>