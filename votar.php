<?php
    $nombre = $_POST["name"];
    $edad = $_POST["edad"];
    echo "Hola " .$nombre. " su edad es " .$edad;
    echo "<br>";

    if ($edad>=18)
        echo "Puede votar";
    else
        echo "<h2>No puede votar</h2>";
?>