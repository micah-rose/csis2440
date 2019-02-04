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
    <input type="submit">
    <input type="reset">
</form>
<?php
if ($displayError)
echo "<p class='warning'>Please enter a word.</p>";
?>
</div>
    </body>
</html>

<!-- 

POST grabs from webforms
GET grabs from the URL

-->