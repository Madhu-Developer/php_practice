<?php 


$fname= "fcheck.txt" ;
$fcontent = "values had to be inserted ";

$a=fopen($fname,'w') or die("error in opeing the file ");

fwrite($a,$fcontent) or die("error in write");

fclose($a);

echo "everything worked successfully";
echo " <br>";

$a=fopen($fname,'r') or die('unable to open the file ');

$b=filesize($fname);
echo $b;
echo " <br>";
$c=fread($a,$b);
echo $c ;
echo " <br>";



?>