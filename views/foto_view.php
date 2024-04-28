<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="titulo"><?php if(!empty($foto['titulo'])){
                echo $foto['titulo'];
            }else{
                echo $foto['imagen'];
            }  ?></h1>
        </div>
    </header>
    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
            <p class="texto"><?php echo $foto['texto'] ?></p>
            <a href="index.php" class="regresar">Regresar</a>
        </div>
    </div>
    <footer>
        <div class="iconos-footer">
            <div class="enlaces">
                <a href="https://github.com/RoniPeve"><i class="fab fa-github"></i></a>
                <a href="https://www.facebook.com/adrian.pevecarhuayo/"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                <a href="https://youtube.com"><i class="fab fa-youtube"></i></a>
                
            </div>
        </div>
        <div class="autor">
            <p ><span>&copy; Roni Adrian Peve Carhuayo - 2024</span></p>
        </div>
    </footer>
</body>
</html>