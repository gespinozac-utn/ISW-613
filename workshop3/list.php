<?php
  // get all users from the database
  $sql = 'SELECT * FROM categoria';
  $connection = new mysqli('localhost:3306', 'root', 'root1234', 'php_web2');
  $result = $connection->query($sql);
  $categorias = $result->fetch_all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php require ('header.php') ?>
        <h1>Lista de categorias</h1>
        <table class="table table-light">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
            <tbody>
                <?php
          // loop users
            foreach($categorias as $categoria) {
              echo "<tr><td>".$categoria[1]."</td><td>".$categoria[2]."</td><td><a href=\"delete.php?id=".$categoria[0]."\">Delete</a></td>";
            }
        ?>
            </tbody>
        </table>
        <?php

  $connection->close();
?>
    </div>
</body>

</html>