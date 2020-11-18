<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR CLIENTES</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        session_start();
        if(isset($_SESSION['usuario'])){ ?>
            <nav>
                <div class="nav-wrapper">
                <a href="#" class="brand-logo green"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="registrar.php">Crear Usuario</a></li>
                    <li><a href="buscar.php">BuscarReceta</a></li>
                    <li><a href="ingreso.php">Ingreso</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
                </div>
            </nav>
            
            <div class="container">
                <div class="row">
                    <div class="col l6 m6 s12">
                        <form action="controller/InsertarControl.php" method="POST">
                            <div class="input-field">
                                <input id="rut" type="text" name="rut">
                                <label for="rut">Rut</label>
                            </div>
                            <div class="input-field">
                                <input id="nombre" type="text" name="nombre">
                                <label for="nombre">Nombre</label>
                            </div>
                            <div class="input-field">
                                <input id="direccion" type="text" name="direccion">
                                <label for="direccion">Direccion</label>
                            </div>
                            <div class="input-field">
                                <input id="telefono" type="number" name="telefono">
                                <label for="telefono">Telefono</label>
                            </div>
                            <div class="input-field">
                                <input id="fecha" type="date" name="fecha">
                                <label for="fecha">Fecha</label>
                            </div>
                            <div class="input-field">
                                <input id="email" type="email" name="email">
                                <label for="email">Email</label>
                            </div>
                            <button class="btn ancho80">Crear</BUtton>
                        </form>
                    </div>
                </div>
            </div>

        <?php }else{ ?>
            <h3>Error de Acceso</h3>
            <p>
                <a href="../index.php">Home</a>
            </p>
        <?php } ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>