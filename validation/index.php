<?php

echo getVariables();

function getVariables(){
    global $pValue;
    global $eValue;
    global $ecValue;

    if (isset($_GET["v"]))
        $displayError = true;
    else   
        $displayError = false;

    if (isset($_GET['p'])) $pValue = $_GET['p']; else $pValue = "";
    if (isset($_GET['e'])) $eValue = $_GET['e']; else $pValue = "";
    if (isset($_GET['ec'])) $ecValue = $_GET['ec']; else $ecValue = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Validation</title>
        <link type="text/css" rel="stylesheet" href="/validation/css/validation.css" />

    </head>
    <body>
    <div class="main-wrapper">
    <h2>Let's Validate Yo' Info</h2>
    <div class="form-wrapper">
<form method="post" action="process.php">
    <input name='phone' type='text' placeholder='Phone Number: (123)456-7890' value= '<?php echo $pValue; ?>'>
    <input name= 'email' type='text' placeholder='Email Address: test@test.com' value= '<?php echo $eValue; ?>'>
    <input type="submit">
    <input type="reset">
</form>
<?php

    echo displayError($ecValue);


function displayError($ec){
    $returnVal = "";

    switch($ec){ 
        case 3: $returnVal .= '<p class ="warning"> Please enter a valid phone number.</p>'; 
        case 2: $returnVal .= '<p class ="warning"> Please enter a valid email address.</p>'; break;
        case 1: $returnVal .= '<p class ="warning">Please enter a valid phone number.</p>'; break;
    }
    return $returnVal;
}

?>

</div>
</div>
    </body>
</html>