	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

//echo '<pre>';     //formats the output
//print_r($arr);     //this is used instead of echo for array



/*$arr=array('shaibi','zaini','menno');

foreach($arr as $a=>$b){
echo $a.' '.$b;
echo "</br>";
}

echo "</br>";
echo "<hr>";

$arr=array(13,14,15,16);
foreach ($arr as $a){
	echo $a;
}

echo "</br>";
echo "<hr>";
$bbss=array("ist","fsd","ccw");
foreach ($bbss as $a=>$h){
	echo $h;
	echo "</br>";	
}

echo "<hr>";
echo "</br>";
echo "</br>";

$jk=array("name"=>"zain","class"=>"12th","gender"=>"male");
foreach($jk as $key=>$list){
	
	echo $key.'   '.$list; //print anything u want
	echo "</br>";
}

echo "<hr>";
echo "</br>";
echo "</br>";*/

$arr=array("name"=>"zain","class"=>"12","sex"=>"male","subject"=>"english");
echo ksort($arr);
//echo '<pre>';
//print_r($arr);


?>
<select>
	<option>select Data</option>
    <?php
      foreach ($arr as $data){
      	echo "<option>$data</option>";

      }

    ?>
</select>	





</body>
</html>

