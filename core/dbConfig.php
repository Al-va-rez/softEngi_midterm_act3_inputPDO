<?php
    $user = "root";
    $password = "";

    $dbname = "career_registration";
    $host = "localhost";

    $dsn = "mysql:host={$host};dbname={$dbname}";

    $pdo = new PDO($dsn, $user, $password);
    $pdo->exec("SET time_zone = '+08:00';");
?>