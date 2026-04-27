<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    function addNumbers($number1, $number2) {
      $result = $number1 + $number2;
      return $result;
    }

    echo addNumbers(2, 8);

    ?>

    <?php 
      function sumOfArray($listOfNumbers) {
        $result = 0;
        foreach($listOfNumbers as $number) {
          $result = $result + $number;
        }

        return $result;
      }

      $myNumbers = [1, 2, 3, 4];

      echo sumOfArray($myNumbers);
    ?>

    <br>
    <br>

    <?php 
      // Duplikate aus einer Liste von Zahlen entfernen
      $numbers = ["hallo", "test", "hallo"];

      foreach($numbers as $number) {
        echo $number;
      }

      function remove_duplicate_numbers($list) {
        // Übrprüfe jede einzelne Zahl
        for($i = 0; $i < count($list); $i++) {
          // Gehe nochmal durch alle Zahlen und lösche dieselben
          for($j = 0; $j < count($list); $j++) {
            // Beachte, nicht die erste gesuchte Zahl zu löschen
            // Überprüfe index (darf nicht der gleiche sein)
            if($i != $j && $list[$i] == $list[$j]) {
              array_splice($list, $j, 1);
            }
          }
        }
        return $list;
      }

      echo '<br>';

      $new_list = remove_duplicate_numbers($numbers);

      foreach($numbers as $new_list) {
        echo $number;
      }

    ?>

    <br>
    <br>

    <h2>Summe aller Preise</h2>

    <?php

      $products = [
        [
          'name' => 'iPhone',
          'price' => 800
        ],
        [
          'name' => 'Kaffeemaschine',
          'price' => 290.9
        ],
        [
          'name'=> 'Tablet',
          'price' => 499.99
        ]
      ];

      $sum = 0;
      foreach($products as $product) {
        $sum += $product['price'];
      }

      echo $sum;

    ?>
</body>
</html>