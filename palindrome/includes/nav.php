<?php
$urlNav = substr ($_SERVER['PHP_SELF'], 13);
$navArr = array ("index.php", "palindrome.php");
echo'<nav><ul>';
//FIX ME - For some reason the white background isn't taking for current-page
    for ($x = 0; $x < sizeof($navArr); $x++){
        if ($navArr[$x] != "palindrome.php") {
        echo '<li><a';
        if ($urlNav == $navArr[$x]) {
            echo ' class = "current-page"';
            echo '>';
        } else echo ' href="'.$navArr[$x].'">';

        if ($navArr[$x] == "index.php") echo "home";
        else echo substr ($navArr[$x], 0, -4);
        echo '</a></li>';
        }   
    }
echo '</ul></nav>';


    /*

<li><a href="index.php">Home</a><li>
        <li><a href="palindrome.php">Palindrome</a><li>
*/
?>


