<?php
//http://localhost/sistemaphp/php/eliminar.php?id=4
$conexion = new mysqli('localhost', 'root', '', 'sistema') or die('no se conecto' . mysqli_connect_error());
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `clientes` WHERE `clientes`.`id` = '$id'";
    $query = mysqli_query($conexion, $sql);
    if ($query) {
        echo 'deleted';
    } else {
        echo mysqli_error($conexion);
    }
}
