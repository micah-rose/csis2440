<?php

//Database Code: ********************************************************
    //phpMyAdmin name: id8433217_pali

    define("HOST", "127.0.0.1");
    define("USER", "pali");
    define("PASS", "thissucks");
    define("BASE", "palindromes");

    $conn = mysqli_connect(HOST, USER, PASS, BASE);

    //while ($rows = mysqli_fetch_array($results, MYSQLI_ASSOC)){
    //    echo $rows['palindrome'];
    //}

//**********************************************************************/

    include ('includes/functions.php');
    //Global Variables 
    $wordCounter = 0;
    $wordSearch = "";
    $paliCount = 0;
    $ec = 0;
    $default = false;

    if (!empty($_POST['default'])) $default = true;

    if (!empty($_POST["search-word"])){
        $wordSearch = $_POST["search-word"];
    } else {$ec += 1;}
    if (!$default)
        if (!empty($_POST["pali-count"])) {
            $paliCount = $_POST["pali-count"];
    } else {$ec += 2;}
    if($ec){header("location: index.php?w=" .$wordSearch. "&pc=" .$paliCount. "&ec=" .$ec. "&dv=" .$default);}
?>

<!DOCTYPE html>
<html>
<?php include ('includes/head.php'); ?>
    <body>
    <?php include ('includes/nav.php');?>
    <h2 class="main-heading2"><a href="index.php">The World of Palindromes</a></h2>
<?php
    if (!isset($_POST["pal"]) && !$default){
    echo '<form action="" method="post">';
        echo '<input type="hidden" name="search-word" value="' .$wordSearch. '">';
        echo '<input type="hidden" name="pali-count" value="' .$paliCount. '">';
            for ($x = 0; $x < $paliCount; $x++){
                echo "<input type='text' name='pal[]'>";
            }
      
        echo '<input type="reset">';
        echo '<input type="submit"> '; 
    echo'</form>';
        }
    else {
            //Palindrome Array - will eventually be pulled out of a DB
            include ('includes/reading.php');

            if ($default) $palindromes = $fileArray;
                else {
                    $palindromes = $_POST["pal"]; 
                    $palString = implode(',', $palindromes);

                    $stream = fopen('includes/text.txt', 'a') or die('error');
                    if (filesize('includes/text.txt')) $palString = ',' . $palString;
                    fwrite ($stream, $palString);
                    fclose ($stream);
                }       
        }
            //Display Palindromes - Fatal error when submitting above form
            echo display($palindromes, $wordSearch);

            //Display Word Counter - ucfirst() makes the first letter of the word an uppercase
            echo "<p class='word-count'>Number of Palindromes with at least one instance of the word \"" 
                . ucfirst($wordSearch). "\": $wordCounter</p>";
        ?>
    </body>
</html>
<?php 
    //Display Function
    function display ($pali, $word) { //FIX ME - not running
        global $wordCounter;
        global $conn;
        $search = "";
        $counter = 1;

        echo "<div class='facts-wrapper'>";
        for($i = 0; $i < sizeof($pali); $i++)
        {
            echo "<div class = 'facts'>";
            echo "<h1>Facts About \"$pali[$i]\"</h1>";
            echo "<ul>
                <li>Number of characters: " . strlen($pali[$i]) . "</li>
                <li>Word count: " . str_word_count($pali[$i]) . "</li>
                <li>Palindrome Status: " 
                    . (isPalindrome($pali[$i]) ? "<span class = 'good'>TRUE</span>" : "<span class = 'bad'>FALSE</span>") . "</li>
                </ul>";
            echo "</div>";

            if (isPalindrome($pali[$i])){

                $search = "SELECT * FROM palindrome WHERE Palindrome = '".$phrases[$i]."';";
                $results = mysqli_query($conn, $search);

                if (mysqli_num_rows($results) > 0){
    
                    while ($rows = mysqli_fetch_array($results, MYSQLI_ASSOC)){
                        $counter = $rows['counter'];
                    }
                    $counter++;
                    $sql = "UPDATE palindrome SET counter = '.$counter.' WHERE Palindrome = '".$phrases[$i]."';";
                        
                } else {
                    $sql = "INSERT INTO palindrome (Palindrome, Counter) VALUES ('".$phrases[$i]."',".$counter.");";
                }
                $results = mysqli_query($conn, $sql);
            }
        
        //difference between strpos() and stripos() is that stripos() ignores case sensitivity
        if (stripos(strtolower($pali[$i]), strtolower($word)) !==false )  {$wordCounter++;}
        }
        echo "</div>";    
    }

    //Function that checks if word/saying is a Palindrome
    function isPalindrome($word){
        $word = str_replace(" ", "", $word);
        $word = str_replace("'", "", $word);
        $word = str_replace("?", "", $word);
        $word = str_replace(".", "", $word);
        $word = str_replace(",", "", $word);
        $word = str_replace("!", "", $word);

        $word = strtolower($word);

        $revWord = strrev($word);
        if($revWord == $word) return true; //Anything other than 0 is true
        else return false; //0 is false
    }
//}

?>

<!-- 01/16 NOTES:
    
    Turnary Operator: (condition ? what to do if true : what to do if false)
    Escape character: \

    Toptal website for background images

    TO DO: count number of letters instead of characters
            (so that the space inbetween words are not counted)
            Also get it to count only special characters

-->