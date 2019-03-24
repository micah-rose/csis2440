<?php
$urlNav = substr ($_SERVER['PHP_SELF'], 13);

$fileNames = scandir('../palindrome');
$nav = array("index.php");
for ($i = 0; $i < sizeof($fileNames); $i++){
    if(substr($filenames[$i], -4) == ".php" && $fileNames[$i] != "index.php"){
        $nav[] = $fileNames[$i];
    }
}

//Not working = $navArr = $nav;

$navArr = array ("index.php", "palindrome.php", "contact.php", "about.php", "history.php");
echo'<nav><ul>';
//FIX ME - For some reason the white background isn't taking for current-page
//It is also not behaving like in the video
    for ($x = 0; $x < sizeof($navArr); $x++){
        if ($urlNav == "palindrome.php" || $navArr[$x] != "palindrome.php"){
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
    }
echo '</ul></nav>';


    /*

<li><a href="index.php">Home</a><li>
        <li><a href="palindrome.php">Palindrome</a><li>
*/
?>


