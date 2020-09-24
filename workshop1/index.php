<?php
    date_default_timezone_set("America/Costa_Rica"); // Set the default time zone, in this case Costa Rica.
    
    echo 'Hoy es: ' . date("d/M/Y", time() ) . ', y son las ' . date("h:i A", time()); // print in the html
    // use date function to get the exact date and hour.
?>