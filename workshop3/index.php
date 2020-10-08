<?php
  $message = "";
  if(!empty($_REQUEST['status'])) {
    $message = $_REQUEST['message'];
    switch($_REQUEST['status']) {
      case 'success':
        $message = 'User was added succesfully';
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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <title>Workshop 3 ISW-613</title>
</head>

<body>
    <div class="container">
        <?php require ('header.php') ?>
        <div class="msg">
            <?php echo $message; ?>
        </div>
        <h1>Formulario Categoria</h1>
        <form action="create.php" method="POST" class="form-inline" role="form">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="sr-only" for="">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="sr-only" for="">Descripción</label>
                        <textarea class="form-control" name="descripcion" placeholder="Descripción" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <input type="submit" class="btn btn-primary" value="Agregar"></input>
            </div>
        </form>
    </div>

</body>

</html>