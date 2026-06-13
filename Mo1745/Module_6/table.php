<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    table {
      border-collapse: collapse;
    }
    td {
      border: 1px solid rgb(200,200,200);
      padding: 8px;
    }
  </style>
</head>

<body>

  <table>
    <?php $file = fopen("data.csv", "r"); ?>
    <?php while (!feof($file)): ?>
      <tr>
        <?php $table_cells = fgetcsv($file); ?>
        <?php foreach ($table_cells as $cell): ?>
          <td>
          <?php echo $cell; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endwhile; ?>

    <?php fclose($file) ?>

  </table>
</body>

</html>