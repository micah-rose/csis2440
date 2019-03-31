<?php
    include ('includes/functions.php');
    getVariables();

    //Helper Variables
    $maxPalis = 15;
?>

<!DOCTYPE html>
<html>
<?php include ('includes/head.php'); ?>
    <body>
    <?php include ('includes/nav.php');?>
    <h2>The World of Palindromes</h2>
    <div class="form-wrapper">
<form method="post" action="palindrome.php">
    <input name="search-word" type="text" placeholder="Enter a Search Word" value="<?php echo $wValue; ?>">
    <input type="checkbox" name="default" id="dp" <?php if ($dValue) echo 'checked';?>>
        <label for="dp">Use Default Palindrome List?</label>
    <?php echo displaySelect($maxPalis, $pcValue); ?>
    <input type="reset">
    <input type="submit">
</form>
<?php 
    echo displayError($ecValue);
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