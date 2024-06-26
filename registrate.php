<?php
session_start();
require 'funciones.php';

$conexion = conexion('galeria', 'root', '');
if(!$conexion){
    die();
}
if(isset($_SESSION['usuario'])){
    header('Location: subir.php');
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario =filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    
    $errores = '';

    if(empty($usuario) or empty($password) or empty($password2))
    {
        $errores .= '<li>Por favor rellena todos los datos</li>';
    }else{
        $statement = $conexion->prepare('SELECT * FROM usuarios where usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario'=>$usuario));
    
        $resultado = $statement->fetch();

        if($resultado!=false){
            $errores .='<li>El usuario ya exite</li>';
        }
        $password = hash('sha512', $password);
        $password2=hash('sha512', $password2);

        if($password!=$password2){
            $errores .='<li>Las contraseñas no son iguales</li>';
        }
    }   

    if($errores == ''){
        $statement = $conexion->prepare('INSERT INTO usuarios (usuario, pass) values (:usuario, :pass) ');

        $statement->execute(array(
            ':usuario'=>$usuario,
            ':pass'=>$password
        ));

        header('Location: login.php');
    }
}
require 'views/registro_view.php';

?>