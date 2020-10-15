<?php 
    session_start();
    if ($_SESSION && $_SESSION['user']){
        //user already logged in
        header('Location: /dashboard.php');
    }
    $message = "";
    if(!empty($_REQUEST['status'])) {
      switch($_REQUEST['status']) {
        case 'login':
          $message = 'User does not exists';
        break;
        case 'error':
          $message = 'There was a problem inserting the user';
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
            <form action="/login.php" method="POST" role="form" autocomplete="off">
                <h3>Inicio de sessión</h3>
                <div class="msg"> <?php echo $message; ?> </div>
                <div class="row">
                    <div class="two columns">
                        <label for="username">Usuario</label>
                        <input class="u-full-width" type="text" placeholder="Usuario" name="username">
                    </div>
                    <div class="two columns">
                        <label for="password">Contraseña</label>
                        <input class="u-full-width" type="password" placeholder="Contraseña" name="password">
                    </div>
                </div>
                <div class="row">
                    <div class="four columns">
                        <input class="button-primary u-pull-right" type="submit" value="Entrar">
                    </div>
                </div>
            </form>
        </div>
    </body>

</html>