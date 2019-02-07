<!DOCTYPE html>
<html>
    <head>
        <title>Music Database</title>
        <link type="text/css" rel="stylesheet" href="/music-database/css/music.css" />
        <script src="/music-database/js/music.js"></script>
    </head>
    <body>
    <div class="music-wrapper">
    <h2>Behold... the albums that make my heart full.</h2>
        <?php
        $jams = array(
            "Artist in the Ambulance", 
            "Page Avenue", 
            "Come Clarity", 
            "Lowborn", 
            "Pardon My French", 
            "Wovenwar",
            "Know Hope",
            "Lift Your Existence",
            "Fake History",
            "Periphery");

        echo '<table border="2" cellspacing="0" cellpadding="5">
        <tr> <th> Fave Albums </th> </tr>';

        foreach($jams as $j){
            echo '<tr> <td> '.$j. '</td> </tr>';
        }
        ?>
    </div>
    </body>
</html>