<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays</title>
</head>
<body>
<?php
$a = array(11,21,31,41);


for ($i=0; $i < count($a); $i++){ 
      echo "the values of array in index $i is ".$a[$i] ;
      echo "<br>";
}

?>
<hr>
<?php
$ar  = array('one' => 1 ,'two' => 2 ,'three'=>3 ,'four'=> 4 );

print_r($ar);
?>
<hr>
<?php
foreach ($ar as $key => $value) {
    echo $key . " " . $value ;
   ?><br><?php   	
}
?>

</body>
</html>