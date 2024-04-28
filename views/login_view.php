<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="titulo">Iniciar Sesion</h1>
        </div>
    </header>
    <div class="registro">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" name="login" class="formulario">
            <div class="form-group">
            <i class="user fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
                <i class="contra fa fa-unlock-alt"></i> <input type="password" name="password" class="password" placeholder="Contraseña">
            </div>
            
            <button onclick="login.submit()">
                <i class="submit-btn fa fa-check" ></i> Iniciar Sesion
            </button>
            <?php if(!empty($errores)) :?>
                <div class="error">
                    <ul>
                        <?php echo $errores;?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
        <div class="texto-login">
            <p>¿Aún no tienes cuenta?</p>
            <a href="registrate.php" class="iniciar_sesion">Crear Cuenta</a>
        </div>
    </div>
</body>
</html>