<?php

# Make hard-code character string into an array
$SYMS = str_split("@#$%^&*=+?");
# Make hard-code number string into an array
$NUMS = str_split("1234567890");
$password = "";

# IMPORT CSV FOOD WORD ARRAY---------------------------
$file = fopen("foodwords.csv","r");
$foodList = explode(chr(13), fgets($file));
fclose($file);

//print_r($_GET);
// print_r($foodList);

# FORM DATA ------------------------------
if (isset($_GET["howManyWords"])){

    #Use as integer
    $numWords = $_GET["howManyWords"];
    echo 'numWords:'.$numWords.'<br>';
    //print_r($_GET);

    # Some simple form validation
    if(!ctype_alnum($_GET["howManyWords"])) {
        $errorAlpha = 'Contestant names may only contain letters; no numbers or symbols.';
        return;
    }

    # If/else statement to return random keys from foodList array
    if ($numWords > 1){
        $rand_key = array_rand($foodList, $numWords);
    }
    elseif($numWords == 1) {
        $rand_key = [array_rand($foodList, $numWords)];
    }



    # PRINT PASSWORD -------------------------
    for($i = 0; $i < $numWords; $i++){
        if ($i == 0){

            $password .= $foodList[$rand_key[$i]];
        }
        else {
            $password .= " - " . $foodList[$rand_key[$i]];
        }
    }
    # Continue to add number and unique characters to password variable
    if($numWords !== 0){
        if( array_key_exists('add_number',$_GET)){
            $NUMS = str_split("1234567890");
            shuffle($NUMS);
            $passwordNum= end($NUMS);
            $password .= " - " . $passwordNum;
        }
        if( array_key_exists('add_symbol',$_GET)){
            $SYMS = str_split("@#$%^&*=+?");
            shuffle($SYMS);
            $passwordSym = end($SYMS);
            $password .= " - " . $passwordSym;
        }
        # echo $password; to test
    }
}
