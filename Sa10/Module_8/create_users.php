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
  // sql to create table
  $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  $conn->exec($sql);
  echo "Table created successfully";
} catch(PDOException $e) {
  echo "Error creating table: " . $sql . "<br>" . $e->getMessage();
}

try {
  $sql = "INSERT INTO users (firstname, lastname, email, password) 
  VALUES ('Tom', 'Mustermann', 'max@mustermann.de', 'test1234')";
  $conn->exec($sql);
  echo "user inserted successfully";
} catch(PDOException $e) {
  echo "Error inserting user: " . $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>