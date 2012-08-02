<?php

/* from page 161 of PHP:  A Beginner's Guide (Vaswani)
*
  reading remote files
*/

 $arr = file('http://www.google.com') or die('ERROR: Cannot find file');
 foreach ($arr as $line) {
 	echo $line;
 }
 ?>