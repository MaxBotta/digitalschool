<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <div>
    <h1>PHP Version</h1>
    <?php
    // PHP Version
    echo phpversion();

    echo "<br>";
    echo "<br>";

    // Variablen
    $text = "Hello World";
    echo "Text: " . $text;

    echo "<br>";
    echo "<br>";

    //If statements
    $myNumber = 5;
    if ($myNumber > 20) {
      echo 'Bigger than 20';
    } else {
      echo 'Smaller than 20';
    }

    echo "<br>";
    echo "<br>";

    // For loops
    for ($i = 0; $i < 10; $i++) {
      echo "<br>";
      echo 'current index: ' . $i;
    }

    echo "<br>";
    echo "<br>";
  
        // For loops
    for ($y = 0; $y < 10; $y++) {
      for ($x = 0; $x < 10; $x++) {
        echo $y . '.' . $x . ' ';
      }
      echo "<br>";
    }
    ?>
  </div>
</body>

</html>