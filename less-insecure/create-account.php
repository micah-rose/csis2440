<?php
    $access = '';

    define("HOST", "localhost");
    define("USER", "id8433217_users");
    define("PASS", "stillsucks");
    define("BASE", "id8433217_insecure");

    $conn = mysqli_connect(HOST, USER, PASS, BASE);

    if(isset($_POST["submit"])){

        $name = $_POST["username"]; 
        $password = $_POST["password"]; 
        $secretCode = $_POST["secret-code"];

        $sql = "SELECT Username FROM user_table WHERE Username = '".$name."';";
        $result = mysqli_query($conn, $sql);

        $secret = "SELECT SecretCode FROM secret_table WHERE SecretCode = '".$secretCode."';";
        $check = mysqli_query($conn, $secret);

        if(mysqli_num_rows($result) > 0){ 
            $access = '<p>Username already exists</p>';
        }
        else if(mysqli_num_rows($check) == 0){
            $access = '<p>The secret code you submitted is incorrect</p>';
        }
        else{ //the below INSERT is not running
            $newAccount = "INSERT INTO user_table (Username, Password) VALUES ('".$name."', password('".$password."'));";
            mysqli_query($conn, $newAccount);
            $access = '<p>Congrats! Your account has been created.</p>';
        }
    }   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Less of an Insecurity</title>
        <link type="text/css" rel="stylesheet" href="/less-insecure/css/less-insecure.css" />
        <script src="js/less-insecure.js" type="text/javascript"></script>
    </head>
    <body>
    <?php 
        echo $access; 
    ?>
        <form method="post">
            <input id="username" name="username" type="text" placeholder="Username">
            <input id="password" name="password" oninput="verifyStuff(this);" type="password" placeholder="Password">
            <input id="v-password" oninput="verifyStuff(this);" type="password" placeholder="Verify Password">
            <input id="secret-code" name= "secret-code" type="password" placeholder="Secret Code">
            <input name="submit" type="submit" value="Create Account" value=""> 
            <input type="reset"> 
        </form>
        <p id="confirm-password"></p>
    </body>
</html>