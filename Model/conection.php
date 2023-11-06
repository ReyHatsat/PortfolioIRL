<?php
    $conection = new mysqli("localhost", "root", "", "portafolioirl");
    $conection->set_charset("utf8");

    // Verificar la conexión
    if ($conection->connect_error) {
        die("Connection failed: " . $conection->connect_error);
    }
?>
