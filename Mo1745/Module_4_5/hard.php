<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 

 $products = [
    [
      "name" => "Controller",
      "price" => 50
    ],
    [
      "name" => "Apple Pencil",
      "price" => 100
    ],
    [
      "name" => "Kaffemaschine",
      "price" => 300
    ],
    [
      "name" => "Ofen",
      "price" => 300
    ]
  ];

  function get_highest_priced_products($products) {

    // Finde höchsten Preis
    $highest_price = 0;
    foreach($products as $product) {
      if($product["price"] > $highest_price) {
        $highest_price = $product["price"];
      }
    }

    // Füge alle Produkte mit dem Preis in eine Liste ein
    $all_products = [];
    foreach($products as $product) {
      if($product["price"] == $highest_price) {
        array_push($all_products, $product);
      }
    }

    return $all_products;
    
  }

  $highest_products = get_highest_priced_products($products);
  foreach($highest_products as $product) {
    echo $product["name"] . ": " . $product["price"] . "€";
    echo "<br>";
  }



?>
  
</body>
</html>