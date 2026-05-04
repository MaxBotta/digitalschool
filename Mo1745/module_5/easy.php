


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Employees</h1>

  <?php 
    $employees = [
      [
        'name' => 'Max Mustermann',
        'age' => 32,
        'role' => 'Software Engineer'
      ],
      [
        'name' => 'Peter Pan',
        'age' => 26,
        'role' => 'Designer'
      ]
    ];

    foreach($employees as $employee) {
      echo $employee['name'];
      echo '<br>';
    }
  ?>
</body>
</html>