<?php
// $foodFile = fopen('foodwords.csv', 'r');
//   while (($foodArray = fgetcsv($foodFile)) !== FALSE) {
//     print_r($foodArray);
//   }
//   fclose($foodFile);
//
//   count($foodArray)


// $file = file_get_contents("foodwords.csv");
// $data = array_map("str_getcsv", preg_split('/\r*\n+|\r+/', $file));
// print_r($data);
//
// count(foodArray)
//
// $foodWords = fgetcsv('foodwords.csv');
// count($foodWords)
//
// $_POST["numberofwords"] will give you access to the value of input element `<input type="number" name="numberofwords">`

// $foodWords = fgetcsv("foodwords.csv","r");

// $foodWords = array_map('str_getcsv', file('foodwords.csv'));



$file = fopen('foodwords.csv', 'r');
while (($foodWords = fgetcsv($file)) !== FALSE) {
  echo "string"; '</pre>';
  echo $foodWords;
  echo '</pre>';
}
fclose($file);

// Counts number of elements in an array
echo count($foodWords);




// $foodWords = fopen('foodwords.csv', 'r');
// echo '<pre>';
// print_r(fgetcsv($foodWords));
// fclose($foodWords);
// echo var_dump($foodWords);
// echo '</pre>';
// echo count($foodWords);
// ?>

<!-- Get array from CSV -->
<!-- $foodArray = [...]; -->
<!-- array = -->
<!-- $foodArray = [...]; -->
<!-- shuffle the array -->
<!-- shuffle($foodArray); -->
<!-- for each, takes the last element of an array -->
<!-- while($element = array_pop($foodArray)){ -->
  <!-- echo 'pwElement:' . $element; -->
<!-- } -->
