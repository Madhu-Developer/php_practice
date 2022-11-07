<?php 

$file="C:\Users\ASUS\Desktop\hello2.txt";

file_put_contents($file,'hello jofin') or die("unable to fetch the data ");

echo fileowner($file);

?>