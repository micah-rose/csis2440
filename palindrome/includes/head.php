<?php 
  $url = substr ($_SERVER['PHP_SELF'], 13, -4);
  if ($url == 'index') $url == 'home';
  $title = ucfirst($url). ' Page';

 
  echo  '<head>
    <title>'.$title.'</title>
    <link type="text/css" rel="stylesheet" href="/palindrome/css/palindrome.css" />
    </head>';
?>