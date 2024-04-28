<?php
require 'funciones.php';
$conexion = conexion('galeria','root','');

if(!$conexion){
    //header('Location: index.php');
    die();
}
$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id){
    header('Location: index.php');
}

$statement = $conexion->prepare("SELECT * FROM fotos where id=:id ");

$statement->execute(array(':id'=>$id));

$foto=$statement->fetch();
if(!$foto){
    header('Location: index.php');
}
require 'views/foto_view.php';

?>