<?php

/* read contents from a file into a php script 
This is on page 160 of "PHP:  A Beginner's Guide"
*/
// read file into a string

$str = file_get_contents('example.txt') or die('ERROR:  Cannot Find File');
echo $str;

?>
