<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        this is  my first  php website
        <?php
        define('pi', 3.14);
echo "hello world and this printing using php";
//secret alogarithm
//single line comment
/*
this 
is 
a multi
line 
comment
*/
$variable1 = 5;
$variable2 = 2;
echo $variable1;
echo $variable2;

echo $variable1 + $variable2;

//operators in php
// Arithmetic operators
echo "<br>";
echo "the value of variable1 + variable2";
echo $variable1 + $variable2;
echo "<br>";
echo "the value of variable1 - variable2";
echo $variable1 - $variable2;
echo "<br>";
echo "the value of variable1 * variable2";
echo $variable1 * $variable2;
echo "<br>";
echo "the value of variable1 / variable2";
echo $variable1 / $variable2;
echo "<br>";



// assignment operators
$newVar = $variable1;
// $newVar += 1;
//$newVar -= 1;
$newVar *= 2;
//$newVar /= 1;
echo "the value of new variable is";
echo $newVar;
echo "<br>";



// comparison operators

//echo "<h1>Comparison operators</h1>"
echo "the value of 1==4 is";
echo var_dump(1==4);
echo "<br>";
echo "the value of 1!=4 is";
echo var_dump(1!=4);
echo "<br>";
echo "the value of 1>=4 is";
echo var_dump(1>=4);
echo "<br>";
echo "the value of 1<=4 is";
echo var_dump(1<=4);
echo "<br>";

// incement/decrement operators
echo $variable1++;
echo "<br>";
echo $variable1;
// echo $variable1--;
// echo ++$variable1;
// echo --$variable1;

// logical operators
// and (&&)
 //or (||)
//xor 
//!
//echo "<br>";
//$myVar = (true and false);
//$myVar = (false and true);
// $myVar = (false and false);
// $myVar = (true and false);

//$myVar = (true xor true);
//$myVar = (false and true);
// $myVar = (false xor false);
$myVar = (true and false);
echo "<br>";
echo var_dump($myVar);

?>
<?php
// data type in php
// 1.String
// 2.Integer
// 3.Float
// 4.Boolean
// 5.Array
// 6.Object
echo "<br> data types <br>";
$var = "this is a string";
echo var_dump($var);
echo "<br>";
$var = 67;
echo var_dump($var);
echo "<br>";
$var = 67.1;
echo var_dump($var);
echo "<br>";
$var = true;
echo var_dump($var);
echo "<br>";
echo pi;



?>
    </div>
</body>
</html>