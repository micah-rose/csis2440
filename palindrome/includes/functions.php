<?php
/************************ GET VARIABLE FUNCTION *******************************/
    function getVariables(){
        global $wValue;
        global $pcValue;
        global $ecValue;

        if (isset($_GET["v"]))
            $displayError = true;
        else   
            $displayError = false;

        if (isset($_GET['w'])) $wValue = $_GET['w']; 
        if (isset($_GET['pc'])) $pcValue = $_GET['pc']; 
        if (isset($_GET['ec'])) $ecValue = $_GET['ec']; 
    }
/******************************************************************************/
###
###
/************************ DISPLAY DROPDOWN SELECT *****************************/
    function displaySelect($mp, $pc){ 
        $returnStuff = '<select name="pali-count"><option value=""';

        if(!$pc || $pc > $mp) $returnStuff .= " selected"; 
        $returnStuff .= ' disabled>How many Palindromes?</option>';

            for ($x = 1; $x <= $mp; $x++){
                if($x == 1) $output = 'Palindrome'; else $output = 'Palindromes';

                if ($pc == $x) $returnStuff .= '<option selected value="' .$x. '"> ' .$x. ' ' .$output. '</option>';
                else $returnStuff .= '<option value="' .$x. '"> ' .$x. ' ' .$output. '</option>';
            }

        echo '</select>';

        return $returnStuff;
    }
/*****************************************************************************/
###
###
/************************ DISPLAY ERROR MESSAGE ******************************/
    function displayError($ec){
        $returnVal = "";

        switch($ec){ 
            case 3: $returnVal .= '<p class ="warning"> Please enter a search term.</p>'; 
            case 2: $returnVal .= '<p class ="warning"> Please select a number of palindromes.</p>'; break;
            case 1: $returnVal .= '<p class ="warning"> Please enter a search term.</p>'; break;
            //default: echo "<p class='warning'>Please fill in ALL fields.</p>";
        }
        return $returnVal;
    }
/*****************************************************************************/
?>