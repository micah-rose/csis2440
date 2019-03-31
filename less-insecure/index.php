<?php 

//define("HOST", "127.0.0.1");
//define("USER", "users");
//define("PASS", "stillsucks");
//define("BASE", "insecure");

//$conn = mysqli_connect(HOST, USER, PASS, BASE);

$host = "127.0.0.1";
$user = "users";
$password = "stillsucks";
$dbName = "insecure";

//$conn = mysqli_connect($host, $user, $password, $dbName);

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }

/*
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else echo "Connected successfully"; */

//$sql = "SELECT * FROM user_table;";
//$results = mysqli_query($conn, $sql);

if(isset($_POST['submit'])){


/*
    $access = '';
    if(in_array(strtolower($_POST['user']), $userArray) && in_array(strtolower($_POST['password']), $pwArray)){
        if(strtolower($_POST['user']) == $userArray[1] && strtolower($_POST['password']) == $pwArray[2] 
        || strtolower($_POST['user']) == $userArray[3] && strtolower($_POST['password']) == $pwArray[4] 
        || strtolower($_POST['user']) == $userArray[5] && strtolower($_POST['password']) == $pwArray[6] 
        || strtolower($_POST['user']) == $userArray[7] && strtolower($_POST['password']) == $pwArray[8]){

            $access = '<p>Access Granted</p>';
        } else $access = '<p>Access Denied</p>';
    } else $access = '<p>Access Denied</p>';
*/

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
            ob_start();
            include ('includes/users.txt'); 
            $data = ob_get_clean();
            echo $access; 
        ?>
        <form method="post">
            <input name="user" type="text" placeholder="Username" value="">
            <input name="password" type="text" placeholder="Password" value="">
            <input name= 'submit' type="submit" value="Log In">
            <input type="reset">   
        </form>
    </body>
</html>