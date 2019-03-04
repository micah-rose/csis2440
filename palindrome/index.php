<?php
    include ('includes/functions.php');
    getVariables();

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
    <?php 
        echo displaySelect(); 
    ?>
    <input type="reset">
    <input type="submit">
</form>
<?php 
    echo displayError($ecValue); //FIX ME - not showing errors
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
?>

-->