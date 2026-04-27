<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    // function remove_duplicates($list_of_strings) {
    //   return array_unique($list_of_strings);
    // }

    function remove_duplicates($list) {
      for($i = 0; $i < count($list); $i++) {

        for($j = $i + 1; $j < count($list); $j++) {
          
          if($list[$i] == $list[$j]) {
            array_splice($list, $j, 1);
          }

        }

      }

      return $list;
    }

    $words = ["Hallo", "Welt", "Hallo", "Bla", "Bla", "Welt"];
    $hallo = $words[0];
    $bla = $words[3];

    foreach($words as $word) {
      echo $word . " ";
    }

    echo "<br>";

    $new_words = remove_duplicates($words);

    foreach($new_words as $word) {
      echo $word . " ";
    }
    
  ?>
</body>
</html>