<?php

# Need to make this into an array
$SYMS = str_split("@#$%^&*()_-=+;:,.?");
# Need to make this into an array
$NUMS = str_split("1234567890");
# Need the number of word to be manipulated as a number, also easier to write "numWords" than _GET[howManyWords]
$numWords = intval($_GET["howManyWords"]);

# IMPORT CSV FOOD WORD ARRAY
$file = fopen("foodwords.csv","r");
$foodList = explode(chr(13), fgets($file));
//http://stackoverflow.com/questions/3278375/how-can-you-parse-excel-csv-data-that-contains-linebreaks-in-the-data
# print_r($foodList); to test
fclose($file);

# If/else statement to return random keys from foodList array
if ($numWords == ""){
    echo "Please enter a desired length";
}
else {
$rand_words = array_rand($foodList, $_GET["howManyWords"]);

# Create password variable to print the generated password
# For loop to print password based on given numWords length from form
$password = "";
for($i = 0; $i < $numWords; $i++){
    if ($i == 0){
        $password = $password . $foodList[$rand_words[$i]];
    }
    else {$password = $password . "-" . $foodList[$rand_words[$i]];
    }
}}

# Continue to add number and unique character to password variable
if(array_key_exists('add_number',$_GET)){
    $password .= array_rand($NUMS);
}

if(array_key_exists('add_symbol',$_GET)){
    $password .= array_rand($SYMS);
}
echo $password;

//http://stackoverflow.com/questions/3278375/how-can-you-parse-excel-csv-data-that-contains-linebreaks-in-the-data -record this as reference in README for ch(13)
# print_r($foodList); to test
