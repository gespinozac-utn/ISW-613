<?php
  if($_POST) {
    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];

    $sql = "INSERT INTO categoria(`nombre`, `descripcion`) VALUES ('$nombre', '$descripcion')";

    $connection = mysqli_connect('localhost:3306', 'root', 'root1234', 'php_web2');

    mysqli_query($connection, $sql);
    mysqli_close($connection);
    header('Location: /index.php?status=success&message=Categoria agregada');
  } else {
    header('Location: /index.php?status=error&message=Hubo un errror');
  }