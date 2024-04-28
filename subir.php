<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: login.php');
}


require 'funciones.php';

$conexion = conexion('galeria','root','');

if(!$conexion){
    //header('Location: index.php');
    die();
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
    //print_r($_FILES);
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    if($check!==false){
        $carpeta_destino = 'fotos/';
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
        //insertando en base de datos

        $statement = $conexion->prepare('Insert into fotos (titulo, imagen, texto)
        values (:titulo, :imagen, :texto)');

        $statement->execute(array(
            ':titulo'=>$_POST['titulo'],
            ':imagen'=>$_FILES['foto']['name'],
            ':texto'=>$_POST['texto']
            
        ));

        header('Location: index.php');
    }else{
        $error = "el archivo no es una imagen";
    }
}
require 'views/subir_view.php';

?>