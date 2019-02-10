<!DOCTYPE html>
<html lang="en">
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
            "Artist in the Ambulance - Thrice", 
            "Page Avenue - Story of the Year", 
            "Come Clarity - In Flames", 
            "Lowborn - Anberlin", 
            "Pardon My French - Chunk! No, Captain Chunk!", 
            "Wovenwar - Wovenwar",
            "Know Hope - The Color Morale",
            "Lift Your Existence - Night Versus",
            "Fake History - .letlive",
            "Periphery - Periphery");

        echo '<table>
        <tr> <th> Fave Albums </th> </tr>';

        foreach($jams as $j){
            echo '<tr> <td> '.$j. '</td> </tr>';
        }

        echo '</table>';
        ?>
    </div>
    </body>
</html>