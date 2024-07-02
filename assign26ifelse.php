<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

<style>
  *{  margin: 0;
      padding: 0;
      box-sizing: border-box;
}
.container {
max-width: 80%;
background-color: rgb(228, 195, 195);
margin: auto;
padding: 23px;
}
</style>
</head>
<body>
<div class="container">
<h1> Lets learn about PHP </h1>
This is a container
</br>
<?php

//IF Else

$a=4;
if($a<4){
    echo "The Value is less than Four!";
}
else if($a==4){
    echo "The value is equal than four";
}
else{
    echo "The value iss greater than four";
}

//Array
echo "</br>";

$lang=array("HTML","JS","CSS","C++");
echo $lang[0];
echo count($lang);
echo "</br>";
//Loops

//While Loop
$b=0;
while($b<=10){
    echo "</br> The Value of b is:";
    echo $b;
    $b++;
}


?>

    
</body>
</html>