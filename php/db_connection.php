<?php

//DB_CONNECTION.PHP

$servername = "localhost";
$username = "root";
$password = "";
$database = "webshop";

try {
        $db_connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully: <br>"; 
    }
catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

?>

