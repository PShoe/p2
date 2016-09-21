<?php

$SYMS = str_split("@#$%^&*()_-=+;:,.?");
$NUMS = str_split("1234567890");
$numWords = intval($_GET["howManyWords"]);

// IMPORT CSV FOOD WORD ARRAY
$file = fopen("foodwords.csv","r");
$foodList = explode(chr(13), fgets($file)); // http://stackoverflow.com/questions/3278375/how-can-you-parse-excel-csv-data-that-contains-linebreaks-in-the-data
// print_r($foodList);
// print_r($foodList);
fclose($file);


if ($numWords == ""){
    echo "Please enter a desired length";
}
else {
$rand_words = array_rand($foodList, $_GET["howManyWords"]);

$password = "";
for($i = 0; $i < $numWords; $i++){
    if ($i == 0){$password = $password . $foodList[$rand_words[$i]];}
    else {$password = $password . "-" . $foodList[$rand_words[$i]];}
}}

// keep tackin' stuff onto password

if(array_key_exists('add_number',$_GET)){
    $password .= array_rand($NUMS);
}

if(array_key_exists('add_symbol',$_GET)){
    $password .= array_rand($SYMS);
}
echo $password;
