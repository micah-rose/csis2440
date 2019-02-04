<?php
    //Global Variables 
    $wordCounter = 0;
    if (!empty($_POST["search-word"])) {
        $wordSearch = $_POST["search-word"];
    }
    else {
        header("location: index.php?v=");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Palindrome</title>
        <link type="text/css" rel="stylesheet" href="/palindrome/css/palindrome.css" />
    </head>
    <body>
    <h2>The World of Palindromes</h2>
    <?php 
            //Palindrome Array - will eventually be pulled out of a DB
            $palindromes = array("Bob", "Alley Cats", "Senile Felines", "Race Car", "Red Rum", "Stack Cats");
            #"Madam I'm Adam", "Evasion? No, I Save.", "Tie It",

            //Display Palindromes
            display($palindromes, $wordSearch);

            //Display Word Counter - ucfirst() makes the first letter of the word an uppercase
            echo "<p class='word-count'>Number of Palindromes with at least one instance of the word \"" . ucfirst($wordSearch). "\": $wordCounter</p>";

            //Display Function
            function display ($pali, $word) {
                global $wordCounter;

                echo "<div class='facts-wrapper'>";
                for($i = 0; $i < sizeof($pali); $i++)
                {
                echo "<div class = 'facts'>";
                    echo "<h1>Facts About \"$pali[$i]\"</h1>";
                    echo "<ul>";
                        echo "<li>Number of characters: " . strlen($pali[$i]) . "</li>
                                <li>Word count: " . str_word_count($pali[$i]) . "</li>";
                        echo "<li>Palindrome Status: " 
                            . (isPalindrome($pali[$i]) ? "<span class = 'good'>TRUE</span>" : "<span class = 'bad'>FALSE</span>") . "</li>";
                    echo "</ul>";
                echo "</div>";
                //difference between strpos() and stripos() is that stripos() ignores case sensitivity
                if (stripos($pali[$i], $word) !==false )  {$wordCounter++;}
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
        ?>
    </body>
</html>

<!-- 01/16 NOTES:
    
    Turnary Operator: (condition ? what to do if true : what to do if false)
    Escape character: \

    Toptal website for background images

    TO DO: count number of letters instead of characters
            (so that the space inbetween words are not counted)
            Also get it to count only special characters

-->