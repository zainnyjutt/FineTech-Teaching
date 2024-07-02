<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is my first document</h1>

    <?php
    define('PI',3.14);

echo "<h1>Hello  i am student of Finetech</h1>";

//Comments
 //
 /* */

 echo "</br>";

 $ali="Hello World!";
 echo $ali;

 //Operators
 echo "</br>";

 //Arithmatic Operator

 $var1=64;
 $var2=36;

 echo $var1 + $var2;
 echo "</br>";
 echo $var1 - $var2;
 echo "</br>";
 echo $var1 * $var2;
 echo "</br>";
 echo $var1 / $var2;
 echo "</br>";

 //Assignment Operators

$new=$var1;

$var1 += 1;
echo $var1;
echo "</br>";
$var11=3;
$var11 -= 1;
echo $var11;
echo "</br>";

$var1 *= 3;
echo $var1;
echo "</br>";

$var1 /= 2;
echo $var1;
echo "</br>";

//Comparison Operators
//==  is equal to
echo "This value of 1==4";
echo var_dump(1==4);
echo "</br>";

//!    not equal to

echo "This value of 1!=4";
echo var_dump(1!=4);
echo "</br>";

//> greater than
echo "This value of 1>4";
echo var_dump(1>4);
echo "</br>";
//< less than
echo "This value of 1<4";
echo var_dump(1<4);
echo "</br>";

//incremengt/decrement

$var7=6;




echo ++$var7;
echo --$var7;
echo "</br>";
//LOgical OPerators

//and &&
$myvar=(3<4 and 4<7);
echo var_dump($myvar);
echo "</br>";
//OR ||
$myvar=(true or false);
echo var_dump($myvar);
echo "</br>";
//XOR ||
$myvar=(false xor true);
echo var_dump($myvar);


echo PI;

    ?>
    
    
</body>
</html>