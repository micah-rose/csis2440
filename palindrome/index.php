<?php
    if (isset($_GET["v"]))
        $displayError = true;
    else   
        $displayError = false;

    //Helper Variables
    $maxPalis = 15;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Palindrome</title>
        <link type="text/css" rel="stylesheet" href="/palindrome/css/palindrome.css" />
    </head>
    <body>
    <h2>The World of Palindromes</h2>
    <div class="form-wrapper">
<form method="post" action="palindrome.php">
    <input name="search-word" type="text" placeholder="Enter a Search Word">
    <select name="pali-count">
        <option value="" disabled selected>How many Palindromes?</option>
        <?php
            for ($x =1; $x <= $maxPalis; $x++){
                if($x == 1) $output = 'Palindrome'; else $output = 'Palindromes';
                echo '<option value="' .$x. '"> ' .$x. ' ' .$output. '</option>';
            }
        ?>
    </select>
    <input type="reset">
    <input type="submit">
</form>
<?php
if ($displayError)
echo "<p class='warning'>Please fill in ALL fields.</p>";
?>
</div>
    </body>
</html>

<!-- 

POST grabs from webforms
GET grabs from the URL

RegEx with PHP Example:

The below throws an error as of 02/12:
<?php 
    //$phone = "123-456-7890";
    //$pattern = "\d{3}-\d{3}-\d{4}";

    //if(preg_match($pattern, $phone)){
        //echo "Yay! It matches!!";
    //} else {
        //echo "Boo!!";
    //}

    #Add to top (above DOCTYPE)
    //if (isset($_GET['w'])) $wValue = $_GET['w']; else $wValue = "";
    //if (isset($_GET['pc'])) $pcValue = $_GET['pc']; else $wValue = 0;
    //if (isset($_GET['ec'])) $ecValue = $_GET['ec']; else $ecValue = 0;

    #Add within option tag and inner PHP
    //$pcValue =
    //if (!$pcValue || $pcValue > $maxPalis) echo "selected"; #end php
    //if ($pcValue == $x) 
    //echo'<option selected value="' .$x. '"> ' .$x. ' ' .$output. '</option>'
    //else echo '<option value="' .$x. '"> ' .$x. ' ' .$output. '</option>'

    //switch($ecValue){ 
        //case 3: echo '<p class ="warning"> Please enter a search term.</p>'; 
        //case 2: echo '<p class ="warning"> Please select a number of palindromes.</p>'; break;
        //case 1: echo '<p class ="warning"> Please enter a search term.</p>'; break;
        //default:}
?>

-->