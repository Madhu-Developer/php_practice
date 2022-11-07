<?php
$num = 1;

for($j=0;$j < 22; )
{
$count=0; 
   for ( $i=1; $i<=$num; $i++)
   {
      if (($num%$i)==0)
      {
      $count++;  
   }
   }
if ($count<3)
{
echo " Prime Number:".$num." , ";
echo "</br>"; 
$j=$j+1;  
}
$num=$num+1;
}
?>