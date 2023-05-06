<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: gray;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1> Lets learn about php</h1>
<p>your party status is here:</p>
        <?php
$age = 7;
if($age>18){
    echo "you can go to the party";
}
else if($age==7){
    echo "you are 7 years old";
}
else{
    echo "you can not go to the party";
}
echo "<br>";
//arrays in php
$languages = array("Python", "C++", "php", "NodeJs");
//echo  count($languages);


//Loops in php
$a = 0;
while ($a <= 10) {
    echo "<br>the value of a is:";
    echo $a;
    $a ++;
}

//iterating arrays in php using do  while loop
$a = 0;
while($a < count($languages)){
    echo "<br>the value of language is:";
    echo $languages[$a];
    $a++;
}
//do while loop
$a = 200;
do {
    echo "<br>the value of a is:";
    echo $a;
    $a ++;
} while ($a < 10);

//for loop
for ($a=0; $a < 10; $a++) { 
    echo "<br>the value of a from the for loop is :";
    echo $a;
}
foreach($languages as $value){
    echo "<br>the value from for eachloop is";
echo $value;
}

function print5(){
    echo "Five";

}
print5();
print5();
function print_number($number){
    echo "<br>your number is";
    echo $number;
}
print_number(45);
?>

    </div>

</body>
</html>