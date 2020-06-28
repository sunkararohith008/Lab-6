<?php
    $dsn = 'mysql:host=localhost;dbname=COMP1006_SUMMER2020';
    $username = 'root';
    $password = '';
    $db = new PDO($dsn, $username, $password);
    //set error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
