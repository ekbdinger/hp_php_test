<?php

/*  p. 161 of Vaswani
An alternative of reading data from the file is PHP's file() function, which accepts the name and path to a file and reads the entire file into an array, wich each element of the array repsenting one line of the file.  To process the file, all you need to do is iterate over the array using a foreach loop.  

Here's an example, which reads a file into an array and then displays it using such a loop:
*/

$arr = file('example.txt') or die('ERROR: Cannot find file');
foreach ($arr as $line) {
	echo $line;
}


/*this part below is optional. I just did it to show that this would print the first line of an array */

/*
echo "<br />";
echo "<br />";
echo $arr[4];
echo "<br />";
echo "<br />";
echo "above this is the 5th line of the file";
*/

$arr2 = file('example2.txt') or die('ERROR: Cannot find file');
foreach ($arr2 as $line2) {
	echo $line2;

/* Compar the 2 arrays */



?>