<?php

# Make character string into an array
$SYMS = str_split("@#$%^&*()_-=+;:,.?");
# Make number string into an array
$NUMS = str_split("1234567890");
$password = "";
// $desiredLength = "";

# IMPORT CSV FOOD WORD ARRAY---------------------------
$file = fopen("foodwords.csv","r");
$foodList = explode(chr(13), fgets($file));
fclose($file);

# FORM DATA ------------------------------
# Will deplay this code only if there is information entered into form with isset
# Need the number of words to be manipulated as a number, also easier to write "numWords" than _GET[howManyWords]
# If/else statement to return random keys from foodList array
if (isset($_GET["howManyWords"])){
    $numWords = intval($_GET["howManyWords"]);

    if ($numWords !== 0){
        $rand_words = array_rand($foodList,$numWords);
}

# PRINT PASSWORD -------------------------
# Create password variable to print the generated password
# For loop to print password based on given numWords length from form
for($i = 0; $i < $numWords; $i++){
    if ($i == 0){
        $password = $password . $foodList[$rand_words[$i]];
    }
    else {
        $password = $password . " - " . $foodList[$rand_words[$i]];
    }
}
# Continue to add number and unique character to password variable
if($numWords !== 0){
if( array_key_exists('add_number',$_GET)){
    $password .= " - " . array_rand($NUMS);
}
if( array_key_exists('add_symbol',$_GET)){
    $password .= " - " . array_rand($SYMS);
}
}
}
# echo $password; to test
