<?php

  $host = "localhost";
  $dbname = "agenda";
  $user = "root"; 
  $pass = "";

  try{

    // $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn = new PDO("mysql:host=". $host . ";dbname=" . $dbname, $user, $pass);

    // enable error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
    // connection error
    $error = $e->getMessage();
    echo "Error: $error";
  }

?>