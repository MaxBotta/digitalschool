

<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<title>Text speichern</title>
</head>
<style>

  body {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: rgb(250,250,250);
  }

  form {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
  }

  textarea{
    width: 600px;
    height: 200px;
    background-color: white;
    border: 1px solid rgb(200,200,200);
    box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
    border-radius: 20px;
    padding: 10px;
  }

</style>
<body>

<?php 
  function get_file_text() {
    $filename = date("Y-m-d") . ".txt";
    $text = "Was ist heute passiert?";
    if(file_exists($filename)){
      $myfile = fopen($filename, "r") or die("Error: Unable to open file!");
      $text = fread($myfile, filesize($filename));
    }
    return $text;
  }

  function get_dir_list() {
    return scandir("./");
  }

?>

<h1>Tagebuch</h1>

<div>
  <?php echo date("Y-m-d"); ?>
</div>

<br>

<div class="container">

  <ul>
    <?php foreach (scandir("./") as $file): ?>
        <?php if ($file !== "." && $file !== ".."): ?>
            <li><?= htmlspecialchars($file) ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
  </ul>

  <form method="post" action="save.php">

    <textarea name="text">
      <?php echo get_file_text(); ?>
    </textarea>
    
    <br>

    <button type="submit" name="send">
        Speichern
    </button>
</form>
</div>



</body>
</html>