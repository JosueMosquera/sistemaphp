<?php
//http://localhost/sistemaphp/php/agregar.php?nombre=Josue&apellido=Granham&email=granham@gmail,com&telefono=123456&detalle=xd
$conexion = new mysqli('localhost', 'root', '', 'sistema') or die('no se conecto' . mysqli_connect_error());
if (isset($_GET['nombre'])) {
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $detalle = $_GET['detalle'];
    $sql = "UPDATE `clientes` SET `nombre` = '$nombre', `apellido` = '$apellido', `email` = '$email', `telefono` = '$telefono', `detalle` = '$detalle' WHERE `clientes`.`id` = $id";
    $query = mysqli_query($conexion, $sql);
    if ($query) {
        echo 'actualizado';
    } else {
        echo mysqli_error($conexion);
    }
}
