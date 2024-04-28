<?php

function conexion($base, $usuario,$pass){
    try {
        $conexion = new PDO("mysql:hos=localhost;dbname=$base", $usuario,$pass);
        return $conexion;
    }catch (PDOException $e) {
        return false;    
    }
    
}

?>