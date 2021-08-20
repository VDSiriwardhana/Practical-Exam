<?php

//this is the connection to the database
$db_user="root";
$db_passWord="";
$db_name="react";
$db_serverName="localhost";

try {
    $conn = new PDO("mysql:host=$db_serverName;dbname=$db_name", $db_user, $db_passWord);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    //echo "Connection failed: " . $e->getMessage();
  }



?>