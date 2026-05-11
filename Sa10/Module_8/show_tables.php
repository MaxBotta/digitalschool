<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Journal";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
  die("Could not connect. " . $e->getMessage());
}

try {
  $sql = "SHOW TABLES FROM Journal";
  $result = $conn->query($sql);
  echo $result;
} catch(PDOException $e) {
  echo "Error creating table: " . $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>