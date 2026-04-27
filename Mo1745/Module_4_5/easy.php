<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    // function sum_of_numbers($list) {
    //   return array_sum($list);
    // }

    function sum_of_numbers($list) {
      $sum = 0;
      for($i = 0; $i < count($list); $i++) {
        $sum += $list[$i];
      }
      return $sum;
    }
    
    $numbers = [1, 2, 3, 4, 8];

    echo sum_of_numbers($numbers);
  ?>
</body>
</html>