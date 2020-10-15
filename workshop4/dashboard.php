<?php
    session_start();
    $message = "";

    $user = $_SESSION['user'];
    if (!$user) {
      header('Location: /index.php');
    }

    if(!empty($_REQUEST['status'])) {
        switch($_REQUEST['status']) {
          case 'ok':
            $message = 'Usuario agregado';
          break;
          case 'error':
            $message = 'Hubo un problema';
          break;
        }
      }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
        <title>ISW-613 Workshop 4</title>
    </head>

    <body style="background-color: lightblue;">
        <div class="container">
            <div class="row">
                <h1>Bienvenido <?php echo $user['name']. ' ' . $user['lastname'] ?></h1>
                <a class="button button-primary u-pull-right" href="/logout.php">Cerrar sessión</a>
            </div>

            <?php  if($user['role'] === 'Administrador') { ?>
            <div><?php echo $message; ?><div>

                    <form action="/addClient.php" method="POST" autocomplete='off'>
                        <div class="row">
                            <div class="four columns">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" placeholder="Nombre" class="u-full-width">
                            </div>
                            <div class="four columns">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido" placeholder="apellido" class="u-full-width">
                            </div>
                        </div>

                        <div class="row">
                            <div class="four columns">
                                <label for="usuario">Nombre de usuario</label>
                                <input type="text" name="usuario" placeholder="Usuario" class="u-full-width">
                            </div>
                            <div class="four columns">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" class="u-full-width"
                                    placeholder="Contraseña">
                            </div>
                        </div>

                        <div class="row">
                            <div class="eight columns">
                                <input type="submit" value="Añadir" class="button-primary u-pull-right">
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </div>
    </body>

</html>