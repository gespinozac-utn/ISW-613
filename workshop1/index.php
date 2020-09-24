<?php
    date_default_timezone_set("America/Costa_Rica"); // Set the default time zone, in this case Costa Rica.
    
    $fecha = 'Hoy es: ' . date("d/M/Y", time() ) . ', y son las ' . date("h:i A", time()); // print in the html
    // use date function to get the exact date and hour.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop 1 ISW-613</title>
    <STYLE>
        body{height: 50%; background-color:lightgrey;}
        h1{position: fixed; padding: 10px; left: 20px; top: 30px}
    </STYLE>
</head>
<body>
    <h1> <?php echo $fecha ?> </h1>
</body>
</html>