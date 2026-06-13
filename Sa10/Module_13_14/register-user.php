<?php 
  include_once 'config.php';

  // Nutzer hat form ausgefüllt und abgeschickt
  if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if(empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
      echo 'Some form fields are missing';
      return;
    }

    $sql = 'SELECT email FROM users WHERE email=:email';

    $tempSQL = $conn->prepare($sql);
    $tempSQL->bindParam(':email', $email);
    $tempSQL->execute();

    // Gibt es bereits Nutzer mit dieser Email
    if($tempSQL->rowCount() > 0) {
      echo 'Email exisitiert bereits';
      header('refresh:2; url=signup.php');
    }


    try {
      $sql = 'insert into users (firstname, lastname, email, password) values (:firstname, :lastname, :email, :password)';
      $insertSQL = $conn->prepare($sql);
      $insertSQL->bindParam(':firstname', $firstname);
      $insertSQL->bindParam(':lastname', $lastname);
      $insertSQL->bindParam(':email', $email);
      $insertSQL->bindParam(':password', $password);
      $insertSQL->execute();

      echo 'Nutzer wurde hinzugefügt';
      header('refresh:2; url=signup.php');

    } catch(PDOException $e) {
      echo "Error creating user: " . $sql . "<br>" . $e->getMessage();
    }

    return;
  }
    
  
  //Default
  echo 'Something went wrong';
  


?>