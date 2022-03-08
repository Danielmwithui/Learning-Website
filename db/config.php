<?php
    $servername = "localhost";
    $username="root";
    $password="";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=cohort3", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo $e;
    }
?>