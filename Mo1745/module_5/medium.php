


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Warenkorb</h1>

  <?php 
    // Berechnet Summe aller Preise einer Liste von Produkten
    function total_price($products) {
      $sum = 0;
      foreach($products as $product) {
        $sum = $sum + $product['price'];
      }
      return $sum;
    }



    $products = [
      [
        'name' => 'Monitor',
        'price' => 240,
      ],
      [
        'name' => 'PC Maus',
        'price' => 40,
      ]
    ];

    foreach($products as $product) {
      echo $product['name'] . ": " . $product['price'];
      echo '<br>';
    }

    echo '<br>';
    echo 'Total price: ' . total_price($products);



  ?>
</body>
</html>