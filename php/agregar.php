<?php
//http://localhost/sistemaphp/php/agregar.php?nombre=Josue&apellido=Granham&email=granham@gmail,com&telefono=123456&detalle=xd
$conexion = new mysqli('localhost','root','','sistema') or die ('no se conecto'.mysqli_connect_error());
if (isset($_GET['nombre'])){
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$email=$_GET['email'];
$telefono=$_GET['telefono'];
$detalle=$_GET['detalle'];
$sql="INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `detalle`) VALUES (NULL, '$nombre', '$apellido', '$email', '$telefono', '$detalle')";
$query=mysqli_query($conexion,$sql);
if($query){
    echo 'nice insert';
}
else{
    echo mysqli_error($conexion);
}
}