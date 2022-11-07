<?php
$date = getdate();

print_r($date);
print("<br>");
$month = $date["month"];
print $month ;
echo "<br>";
echo date("h:i:s:y:m:d",mktime(12,12,12,12,12,12));
echo "<br>";
$mad = strtotime("today");
echo "<br>";
echo date("h:i:s,d/m/y",$mad);

?>