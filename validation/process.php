<?php 
    $phone = "";
    $email = "";
    $hooray = "";

    $pPattern = "(\+\d{1,2}\s)\(\d{3}\)[\s.-]\d{3}[\s.-]\d{4}$"; 
    $ec = 0;

    if (!empty($_POST["phone"])){
        $phone = $_POST["phone"];
    } else $ec += 1;
    if (!empty($_POST["email"])){ //for some reason this code isn't running
        $email = $_POST["email"];
    } else $ec += 2;

    if (preg_match($pPattern, $phone) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $hooray = "<p>Thank you for submitting valid info!! Both " . $phone . " and " . $email . " were valid!!</p>";
    }
    if (!preg_match($pPattern, $phone) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $ec += 1;
    } 
    if (preg_match($pPattern, $phone) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $ec += 2;
    }
    if (!preg_match($pPattern, $phone) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $ec += 3;
    }
    if ($ec){
        header("location: index.php?p= " .$phone . "&e=" . $email . "&ec=" .$ec);
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
    <h2>You's been VALIDATED!!</h2>
<?php

    echo $hooray;

?>
</div>
    </body>
</html>