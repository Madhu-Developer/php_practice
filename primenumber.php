<?php
$n=7;
$x=0;


for($i=1;$i<=$n;$i++)
{
    if($n%$i==0)
  {
    $x++;
  }  
}
if($x==2)
{
  echo " $n is a prime number<br>";
}
else
{
  echo $n ." is not aprime number<br>";
}


$num= 50;
$ceil = ceil(sqrt($num));
echo $ceil ;


?>