<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $myfile = fopen("text.txt", "r") or die("Error: Unable to open file!");
    echo fread($myfile, filesize("text.txt"));
    fclose($myfile);
  ?>
</body>
</html>