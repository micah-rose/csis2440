<?php 
    $topMessage = '<p>Would you rather...</p>';

    define("HOST", "localhost");
    define("USER", "id8433217_users");
    define("PASS", "stillsucks");
    define("BASE", "id8433217_insecure");

    $conn = mysqli_connect(HOST, USER, PASS, BASE);

    if(isset($_POST['submit'])){

        $hippo = $_POST["hippo"]; 
        $bear = $_POST["bear"];
        $blackWidow = $_POST["black-widow"];
        $snake = $_POST["snake"];

        //Adds hippo result to table
        if($_POST["hippo"]){
            $addSub = "INSERT INTO survival_poll (Result) VALUES ('".$hippo."');";
            $submit = mysqli_query($conn, $addSub);

            if (mysqli_num_rows($submit) > 0){
    
                while ($rows = mysqli_fetch_array($submit, MYSQLI_ASSOC)){
                    $counter = $rows['counter'];
                }
                $counter++;
                $sql = "UPDATE survival_poll SET counter = '.$counter.' WHERE Result = '".$hippo."';";
            }
            $result = mysqli_query($conn, $sql);
        }

        //Adds bear result to table
        else if($_POST["bear"]){
            $addSub = "INSERT INTO survival_poll (Result) VALUES ('".$bear."');";
            $submit = mysqli_query($conn, $addSub);

            if (mysqli_num_rows($submit) > 0){
    
                while ($rows = mysqli_fetch_array($submit, MYSQLI_ASSOC)){
                    $counter = $rows['counter'];
                }
                $counter++;
                $sql = "UPDATE survival_poll SET counter = '.$counter.' WHERE Result = '".$bear."';";
            }
            $result = mysqli_query($conn, $sql);
        }

        //Adds black widow result to table
        else if($_POST["black-widow"]){
            $addSub = "INSERT INTO survival_poll (Result) VALUES ('".$black-widow."');";
            $submit = mysqli_query($conn, $addSub);

            if (mysqli_num_rows($submit) > 0){
    
                while ($rows = mysqli_fetch_array($submit, MYSQLI_ASSOC)){
                    $counter = $rows['counter'];
                }
                $counter++;
                $sql = "UPDATE survival_poll SET counter = '.$counter.' WHERE Result = '".$black-widow."';";
            }
            $result = mysqli_query($conn, $sql);
        }

        //Adds snake result to table
        else if($_POST["snake"]){
            $addSub = "INSERT INTO survival_poll (Result) VALUES ('".$snake."');";
            $submit = mysqli_query($conn, $addSub);

            if (mysqli_num_rows($submit) > 0){
    
                while ($rows = mysqli_fetch_array($submit, MYSQLI_ASSOC)){
                    $counter = $rows['counter'];
                }
                $counter++;
                $sql = "UPDATE survival_poll SET counter = '.$counter.' WHERE Result = '".$snake."';";
            }
            $result = mysqli_query($conn, $sql);
        }
    }  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Survival Poll</title>
        <link type="text/css" rel="stylesheet" href="/web-poll/css/web-poll.css" />
    </head>
    <body>
        <h2>Survival Poll</h2>
        <?php 
            echo $topMessage; 
        ?>
        <div>
            <form method="post"> 
                <li><input name="option" type="radio" value="hippo"> 
                    <label>Run from an angry hippopotamus </label></li>
                <li><input name="option" type="radio" value="bear"> 
                    <label>Fight a grizzly bear in the woods </label></li>
                <li><input name="option" type="radio" value="black-widow"> 
                    <label>Walk through a black widow infested hallway</label></li>
                <li><input name="option" type="radio" value="snake"> 
                    <label>Spend the night in a pit of rattlesnakes </label></li>
                <li><input name="submit" type="submit" value="Submit"> </li>
            </form>
        </div>
    </body>
</html>