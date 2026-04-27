<?php
  if(isset($_POST['send'])){

      $text = trim($_POST['text']);

      if(!empty($text)){
          file_put_contents(date("Y-m-d") . ".txt", $text);
      }
  }

  header("Location: index.php");
  exit;
?>