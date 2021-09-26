<?php

function connect()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "credo";

    try {
        $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $connect;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
