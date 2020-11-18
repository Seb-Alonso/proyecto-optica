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
                    <li><a href="gestor.php">Gestor Usuario</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
                </div>
            </nav>
            
            <div class="container">
                <div class="row">
                    <div class="col l4 m4 s12">
                        <form action="controller/Insertar.control.php" method="POST">
                            <div class="input-field">
                                <input id="rut" type="text" name="rut">
                                <label for="rut">Rut</label>
                            </div>
                            <div class="input-field">
                                <input id="nombre" type="text" name="nombre">
                                <label for="nombre">Nombre</label>
                            </div>
                            <button class="btn ancho80">Crear</button>
                        </form>
                    </div>
                    <div class="col l4 m4 s12">
                         <form action="#" method="POST">
                             <table>
                                <tr>
                                    <th>Rut</th>
                                    <th>Nombre</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                                <?php foreach($usuario as $us){?>
                                    <td><?=$us['rut']?></td>
                                    <td><?=$us['nombre']?></td><td>
                                        <?=$us['estado']?></td>
                                    <td><a name="bt_editar" class="waves-effect waves-light btn">Editar</a></td>
                                <?php } ?>
                             </table>
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