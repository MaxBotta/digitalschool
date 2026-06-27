<?php

  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "Journal";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  } catch(PDOException $e) {
    die("Could not connect. " . $e->getMessage());
  }
?>