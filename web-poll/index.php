<?php 
    $topMessage = "<p>Would you rather...</p>";
    $counter = 1;

    define("HOST", "localhost");
    define("USER", "id8433217_users");
    define("PASS", "stillsucks");
    define("BASE", "id8433217_insecure");

    $conn = mysqli_connect(HOST, USER, PASS, BASE);

    if(isset($_POST["submit"])){

         $answer = $_POST["option"];
         echo $answer;

        //Checks for answer in DB and updates the counter - NOT WORKING
        if(isset($_POST["option"])){
            $search = "SELECT * FROM survival_poll WHERE Result = '".$answer."';";
            $result = mysqli_query($conn, $search);

            if (mysqli_num_rows($result) > 0){
    
                while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    $counter = $rows['Counter'];
                }
                $counter++;
                $sql = "UPDATE survival_poll SET Counter = '.$counter.' WHERE Result = '".$answer."';";
            } else {
                $sql = "INSERT INTO survival_poll (Result, Counter) VALUES ('".$answer."',".$counter.");";
            }
            $result = mysqli_query($conn, $sql);
            $topMessage = "<p>Thanks for playing!!</p>";
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