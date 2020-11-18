<?php
ini_set('display_errors',1);
ini_set('dis´lay_startup_errors',1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPTICA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col l4 m4 s12"></div>
            <div class="col l4 m4 s12">
                <h3 class="center">Acceso Administrador</h3>
                <form action="controllers/LoginAdmiControl.php" method="POST">
                    <div class="input-field">
                        <input id="rut" type="text" name="rut">
                        <label for="rut">Rut</label>
                    </div>
                    <div class="input-field">
                        <input id="clave" type="password" name="clave">
                        <label for="clave">Clave de Usuario</label>
                    </div>
                    <button class="btn blue ancho-80">Entrar</button>
                </form>
                <p class="center">
                    <?php
                        session_start();
                        if(isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>