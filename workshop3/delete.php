<?php
  if($_GET) {
      $idCategoria = $_REQUEST['id'];
    $sql = "DELETE FROM categoria WHERE id='$idCategoria' ";

    $connection = mysqli_connect('localhost:3306', 'root', 'root1234', 'php_web2');

    mysqli_query($connection, $sql);
    mysqli_close($connection);
    header('Location: /list.php');
  } else {
    header('Location: /index.php?status=error&message=Hubo un errror');
  }