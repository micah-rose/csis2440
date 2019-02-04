<?php
    if (isset($_GET["v"]))
        $displayError = true;
    else   
        $displayError = false;
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
            for ($x =1; $x <= 5; $x++)
                #WATCH VIDEO TO FINISH THIS LINE
                #echo '<option value="' .$x. '"> " .$x." ';
        ?>
        <option value="1">1 Palindrome</option>
        <option value="2">2 Palindromes</option>
        <option value="3">3 Palindromes</option>
        <option value="4">4 Palindromes</option>
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