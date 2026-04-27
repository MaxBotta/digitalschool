<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    td {
      border: 1px solid black;
      padding: 10px;
    }
  </style>
</head>
<body>
  <table>
    <?php
      $myfile = fopen("text.csv", "r") or die("Unable to open file!");

      while(!feof($myfile)) {
        $current_line = fgets($myfile);
        $seperated_words = explode(",",$current_line);
    ?>

    <tr>

      <?php
          foreach($seperated_words as $word) {
            echo '<td>' . $word . '</td>';
          }
        }
      ?>

    </tr>
    
    <?php
      fclose($myfile);
    ?>
  </table>
</body>
</html>