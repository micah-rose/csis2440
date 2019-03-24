<?php 
    $fileStream = fopen('includes/text.txt', 'r') or die('Unable to read file!');
    $fileText = fread($fileStream, filesize('includes/text.txt'));
    echo $fileText;
    $fileArray = explode(', ', $fileText);
//Reads entire file on one line - echo fread($fileStream, filesize('includes/text.txt'));
    fclose($fileStream);       
?>