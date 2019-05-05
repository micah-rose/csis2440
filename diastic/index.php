<?php
    include('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Diastic Machine</title>
        <link type="text/css" rel="stylesheet" href="/diastic/css/diastic.css" />
    </head>
    <body>
        <h2>Story Time</h2>
        <?php 
            $filestream = fopen('resources/beautbst.txt', 'r') or die('Unable to read file!');

            if(filesize('resources/beautbst.txt'))
            $fileText = fread(($filestream), filesize('resources/beautbst.txt'));
            $fileArray = textExplode($filetext);
            $fileArray = array_unique($fileArray);

            fclose($filestream);

            //beauty
            //ouija
            //dragon

            define("HOST", "127.0.0.1");
            define("USER", "pali");
            define("PASS", "thissucks");
            define("BASE", "palindromes");
        
            $conn = mysqli_connect(HOST, USER, PASS, BASE);

            foreach($fileArray as $f){
                if (strlen($f) > 1)
                $sql .= 'INSERT INTO beauty (word) values ("$f");'; 
            }
           echo $sql;
        ?>
    </body>
</html>