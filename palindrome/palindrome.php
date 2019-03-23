<?php
    include ('includes/functions.php');
    //Global Variables 
    $wordCounter = 0;
    $wordSearch = "";
    $paliCount = 0;
    $ec = 0;

    if (!empty($_POST["search-word"])){
        $wordSearch = $_POST["search-word"];
    } else {$ec += 1;}
    if (!empty($_POST["pali-count"])) {
        $paliCount = $_POST["pali-count"];
    } else {$ec += 2;}
    if($ec){header("location: index.php?w=" .$wordSearch. "&pc=" .$paliCount. "&ec=" .$ec);}
?>

<!DOCTYPE html>
<html>
<?php include ('includes/head.php'); ?>
    <body>
    <?php include ('includes/nav.php');?>
    <h2 class="main-heading2"><a href="index.php">The World of Palindromes</a></h2>
<?php
    if (!isset($_POST["pal"])){
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
            $palindromes = $_POST["pal"];
            #$palindromes = array("Bob", "Alley Cats", "Senile Felines", "Race Car", "Red Rum", "Stack Cats");
            #"Madam I'm Adam", "Evasion? No, I Save.", "Tie It",
   
            //Display Palindromes - Fatal error when submitting above form
            display($palindromes, $wordSearch);

            //Display Word Counter - ucfirst() makes the first letter of the word an uppercase
            echo "<p class='word-count'>Number of Palindromes with at least one instance of the word \"" . ucfirst($wordSearch). "\": $wordCounter</p>";

            //Display Function
            function display ($pali, $word) { //FIX ME - not running
                global $wordCounter;

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