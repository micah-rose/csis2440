<?php 
  $url = substr ($_SERVER['PHP_SELF'], 13, -4);
  $title = array('index' => 'Palindrome Site', 'palindrome' => 'Palindrome Processor');
 
  echo  '<head>
    <title>'.$title[$url].'</title>
    <link type="text/css" rel="stylesheet" href="/palindrome/css/palindrome.css" />
    </head>';
?>