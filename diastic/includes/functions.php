<?php 
function textExplode($text){
    $del = [" ", "\n", "\r", "", "'", '"', ",", "!", "/", "?", ".", ";", ":", "-"];
    $text = str_replace($del, $del[0], $text);
    $retArray = explode($del[0], $text);
    return $retArray;
}

function poem($seed, $conn){
    $seed = explode(" ", $seed);
    $poem = "";

    foreach ($seed as $sl){

    }
}
?>