<?php
include_once 'config.php';

// Überprüfen Formdaten aus POST request
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email) || empty($password)) {
    echo 'Some form fields are missing';
    header('refresh:2; url=login.php');
    return;
  }

  //Finde Nutzer mit dieser Email aus Datenbank
  $sql = 'SELECT * FROM users WHERE email=:email';

  $tempSQL = $conn->prepare($sql);
  $tempSQL->bindParam(':email', $email);
  $tempSQL->execute();

  if ($tempSQL->rowCount() == 0) {
    echo 'Nutzer exisitert nicht';
    header('refresh:2; url=login.php');
    return;
  }

  // Vergleiche passwort mit passwort in datenbank
  $user = $tempSQL->fetch();
  $user_password = $user['password'];

  // Vergleiche Passwörter
  if (password_verify($password, $user_password)) {
    echo 'Login erfolgreich';
    $_SESSION['email'] = $email;
    header('Location: dashboard.php');
  } else {
    echo 'Falsches Passwort';
    header('refresh:2; url=login.php');
  }
}