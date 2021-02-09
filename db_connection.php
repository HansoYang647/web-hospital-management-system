<?php
    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dataBase = 'hospital_management_system';

    try {
        $conn = new PDO('mysql:host=' . $serverName . '; dbname=' . $dataBase, $userName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e)  {
        echo'Error: ' . $e->getMessage();
    }
?>