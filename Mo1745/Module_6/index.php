<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    td {
      border: 1px solid gray;
    }
  </style>
</head>

<body>
  <?php
  echo file_get_contents('file.txt');
  ?>

  <br>

  <?php
  $file_name = 'file.txt';
  $file = fopen($file_name, 'r');
  echo fread($file, filesize($file_name));
  ?>

  <br>
  <br>

  <table>
    <?php
    $file = fopen("data.csv", "r");
    while (($row = fgetcsv($file)) !== FALSE):
    ?>

      <tr>
        <?php foreach ($row as $item): ?>
          <td><?php echo $item ?></td>
        <?php endforeach; ?>
      </tr>

    <?php
    endwhile;
    fclose($file);
    ?>
  </table>

  <br>
  <br>

  <table>
    <?php

    $csv_file = fopen('data.csv', 'r');
    while (!feof($csv_file)) {
      $list_of_columns = explode(",", fgets($csv_file));

    ?>

      <tr>

        <?php
        foreach ($list_of_columns as $column_entry) {
          echo '<td>' . $column_entry . '</td>';
        }
        ?>

      </tr>

    <?php
    }
    ?>
  </table>
</body>
</body>

</html>