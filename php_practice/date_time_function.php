<?php
date_default_timezone_set("asia/kolkata");
print "<h3>Date</h3>" ;
$today = date("y/m/d");
echo "Today's date is ";echo $today."<br><br>" ;
//it overwrite the variable 
$today = date("d|M|D|Y");
echo "Today's date is ";echo $today."<br>" ;
/*
d: Represents day of the month; two digits with leading zeros (01 or 31).
D: Represents day of the week in the text as an abbreviation (Mon to Sun).
m: Represents month in numbers with leading zeros (01 or 12).
M: Represents month in text, abbreviated (Jan to Dec).
y: Represents year in two digits (08 or 14).
Y: Represents year in four digits (2008 or 2014).
*/

print "<h3>Time</h3>" ;
$time=date("h:i:s  A");
echo "this time current time ";echo $time."<br><br>";

/*
h: Represents hour in 12-hour format with leading zeros (01 to 12).
H: Represents hour in 24-hour format with leading zeros (00 to 23).
i: Represents minutes with leading zeros (00 to 59).
s: Represents seconds with leading zeros (00 to 59).
a: Represents lowercase antemeridian and post meridian (am or pm).
A: Represents uppercase antemeridian and post meridian (AM or PM).
*/

print "<h3>Using TimeStamp</h3>";
$dateandtime=date("h:i:s, d/D/m/y ");
echo "this is the current date and time ".$dateandtime ;

print "<h3>mktime</h3>";

echo "This is to display the mktime(hr,min,sec,date,month,year) ". date("h:i:s:d:m:y",time());

print "<h3>string to date</h3>";

echo "this is the function for converting string to time ".date("h:i:s:d:m:y",strtotime("now")); 

?>