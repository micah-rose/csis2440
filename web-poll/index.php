<?php 
    $topMessage = "<p>Would you rather...</p>";
    $counter = 1;
    $divContent =         
    '<div>
    <form method="post"> 
        <ul>
        <li><input name="option" type="radio" value="hippo"> 
            <label>Run from an angry hippopotamus </label></li>
        <li><input name="option" type="radio" value="bear"> 
            <label>Fight a grizzly bear in the woods </label></li>
        <li><input name="option" type="radio" value="black-widow"> 
            <label>Walk through a black widow infested hallway</label></li>
        <li><input name="option" type="radio" value="snake"> 
            <label>Spend the night in a pit of rattlesnakes </label></li>
        <li><input name="submit" type="submit" value="Submit"> </li>
        </ul>
    </form>
    </div>';
    $bottomMessage = "";

    define("HOST", "localhost");
    define("USER", "id14553804_goji2440");
    define("PASS", "i!m%?@+qO8n\Te+{");
    define("BASE", "id14553804_gojisaurus");

    $conn = mysqli_connect(HOST, USER, PASS, BASE);

    if(isset($_POST["submit"])){

         $answer = $_POST["option"];

        //Checks for answer in DB and updates the counter
        $search = "SELECT * FROM survival_poll WHERE result = '".$answer."';";
        $result = mysqli_query($conn, $search);

        if (mysqli_num_rows($result) > 0){
    
            while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $counter = $rows['counter'];
            }
            $counter++;
            $sql = "UPDATE survival_poll SET counter = '$counter' WHERE result = '".$answer."';";
        } 

        $result = mysqli_query($conn, $sql);
        $topMessage = "<p>Thank you for your submission!</p>";

        $hCount = "SELECT counter FROM survival_poll WHERE result = 'hippo';";
        $hResult = mysqli_query($conn, $hCount);
        $printH = $hResult->fetch_object()->counter;

        $bCount = "SELECT counter FROM survival_poll WHERE result = 'bear';";
        $bResult = mysqli_query($conn, $bCount);
        $printB = $bResult->fetch_object()->counter;

        $bwCount = "SELECT counter FROM survival_poll WHERE result = 'black-widow';";
        $bwResult = mysqli_query($conn, $bwCount);
        $printBW = $bwResult->fetch_object()->counter;

        $sCount = "SELECT counter FROM survival_poll WHERE result = 'snake';";
        $sResult = mysqli_query($conn, $sCount);
        $printS = $sResult->fetch_object()->counter;

        $divContent = 
        '<div> 
            <ul>
            <li><label>Run from an angry hippopotamus: '.$printH.' votes</label></li>
            <li><label>Fight a grizzly bear in the woods: '.$printB.' votes</label></li>
            <li><label>Walk through a black widow infested hallway: '.$printBW.' votes</label></li>
            <li><label>Spend the night in a pit of rattlesnakes: '.$printS.' votes</label></li>
            </ul>
        </div>';
        $bottomMessage = "<p>The results above are based on real results from real participants.</p>";
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
            echo $divContent;
            echo $bottomMessage;
        ?>
    </body>
</html>