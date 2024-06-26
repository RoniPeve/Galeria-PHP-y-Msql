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
            <h1 class="titulo">Galeria con PHP y MYSQL</h1>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
            
            <?php foreach($fotos as $foto) : ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id']; ?>">
                        <img src="fotos/<?php echo $foto['imagen']; ?> " alt="">
                    </a>
                </div>
            <?php endforeach; ?>
            
            
        </div>
    </section>
    <div class="paginacion">
        <?php if($pagina_Actual>1): ?>
            <a href="index.php?p=<?php echo $pagina_Actual-1; ?> " class="izquierda"><i class='fas fa-arrow-left' ></i> Anterior</a>
        <?php endif ?>

        <?php if($total_paginas !=$pagina_Actual): ?>
            <a href="index.php?p=<?php echo $pagina_Actual+1;?>" class="derecha">Siguiente <i class='fas fa-arrow-right' ></i></a>
        <?php endif ?>
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