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

-->