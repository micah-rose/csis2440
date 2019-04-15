<?php 

    $access = '';

    define("HOST", "localhost");
    define("USER", "id8433217_users");
    define("PASS", "stillsucks");
    define("BASE", "id8433217_insecure");

    $conn = mysqli_connect(HOST, USER, PASS, BASE);

    if(isset($_POST['submit'])){

        $name = $_POST["user"]; 
        $password = $_POST["password"]; 

        $sql = "SELECT Username, Password FROM user_table WHERE Username = '".$name."' AND  Password = '".$password."';";
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
        <script src="js/less-insecure.js"></script>
    </head>
    <body>
        <?php 
            echo $access; 
        ?>
        <form method="post">
            <input name="user" type="text" placeholder="Username" value="">
            <input name="password" type="text" placeholder="Password" value="">
            <input name= 'submit' type="submit" value="Log In">
            <input type="reset">  
            <button id= 'accountForm' formaction="create-account.php" type="submit">Create Account</button>
        </form>
    </body>
</html>