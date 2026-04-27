<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    // Funktionen in PHP - Addiere zwei Zahlen
    function addTwoNumbers($number1, $number2) {
      return $number1 + $number2;
    }

    $result = addTwoNumbers(5, 4);

    echo $result;

  ?>

  <br>

  <?php 
    // Arrays
    $words = ["Hallo", "Welt", "!"];

    function print_words($list_of_words) {
      foreach($list_of_words as $item) {
        echo $item . " ";
      }
    }
    
    print_words($words);

    array_push($words, "Tschau!");

    echo "<br>";

    print_words($words);

    $words[1] = "Deutschland";

    echo "<br>";

    print_words($words);


  ?>

  <br>

  <?php 
  // Associative Arrays
  $person = [
    "name" => "Max Mustermann",
    "email" => "max.mustermann@gmail.com",
    "age" => 20,
    "hobbies" => ["coding", "reading", "football"]
  ];

  echo "The user email is: " . $person["email"];
   
  ?>

  <br>
   <?php 

    //Array / Liste
    $fruits = ['apple', 'banana', 'pineapple'];
    $apple = $fruits[0];

    // Associative Array
    $all_fruits = [
      'apple' => 99,
      'banana' => 10,
      'pineapple' => 32,
    ];
    $banana = $all_fruits['banana'];

    // Multidimensional array with associative arrays
    $products = [
      'fruits' => [
        [
          'name' => 'apple',
          'amount' => 99,
          'barcode' => 120938912,
          'price' => 1.20      
        ],
        [
          'name' => 'banana',
          'amount' => 20,
          'barcode' => 71209842,
          'price' => 0.9      
        ]
      ],
      'sweets' => [
        [
          'name' => 'chocolate',
          'amount' => 99,
          'barcode' => 120938912,
          'price' => 1.20   
        ],
        [
          'name' => 'Haribo',
          'amount' => 20,
          'barcode' => 71209842,
          'price' => 0.9      
        ]
      ],
    ];

    // Fruits: 
    //   Apple: 99, 12093078912, 1.2€
    //   Banana: 20, 09348, 0.9
    // Sweets:....

    // Beispiel Sportler / Soccer Manager
    // $players = [Player1, Player2, Player3]
    $players = [
      [
        'name' => 'Cristiano Ronaldo',
        'height' => 1.85,
        'preffered_foot' => 'right',
        'skill_moves' => 4
      ],
      [
        'name' => 'Neymar da Silva Santos jr.',
        'height' => 1.78,
        'preferred_foot' => 'right',
        'skill_moves' => 5
      ]
    ];

    // Vergleiche skill moves von zwei Spielern
    if($players[0]['skill_moves'] > $players[1]['skill_moves']) {
      echo $players[0]['name'] . ' wins!';
    } else {
      echo $players[1]['name'] . ' wins!';
    }

    function find_player($name, $players) {
      foreach($players as $player) {
        if($player['name'] == $name) {
          return $player;
        }
      }
      return null;
    }

    echo "<br>";

    $current_player = find_player('Cristiano Ronaldo', $players);

    echo $current_player['name'] . $current_player['height']


   
   ?>
</body>
</html>
