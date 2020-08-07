<?php 
    $access = '';

    define("HOST", "localhost");
    define("USER", "id14553804_goji2440");
    define("PASS", "i!m%?@+qO8n\Te+{");
    define("BASE", "id14553804_gojisaurus");

    $conn = mysqli_connect(HOST, USER, PASS, BASE);

    if(isset($_POST['submit'])){

        $name = $_POST["user"]; 
        $password = $_POST["password"]; 

        $sql = "SELECT username, password FROM user_table WHERE username = '".$name."' AND  password = '".$password."';";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0 ){ 
            $access = '<p>Access Granted</p>';
        }
        else{
            $access = '<p>Access Denied</p>';
        }
    }   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Less of an Insecurity</title>
        <link type="text/css" rel="stylesheet" href="/less-insecure/css/less-insecure.css" />
    </head>
    <body>
        <?php 
            echo $access; 
        ?>
        <form method="post">
            <input name="user" type="text" placeholder="Username" value="">
            <input name="password" type="password" placeholder="Password" value="">
            <input name= 'submit' type="submit" value="Log In">
            <input type="reset">  
            <button id= 'accountForm' formaction="create-account.php" type="submit">Create Account</button>
        </form>
    </body>
</html>