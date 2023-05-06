<?php
$insert = false;
if(isset($_POST['name'])){
//set connections variables

$server = "localhost";
$username = "root";
$password = "";

//create a database connection

$con = mysqli_connect($server,$username,$password);
//check for connection success

//collect post variables

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
// echo "success connecting to the db";
$Name =$_POST['Name'];
$Gender  = $_POST['Gender'];
$Age     =$_POST['Age'];
$Email    =$_POST['Email'];
$Phone   =$_POST['Phone'];
$desc  =$_POST['desc'];
$sql = "INSERT INTO `trip` .`trip` (`name`, `Age`, `Gender`, `Email`, `Phone`, `other`, `dt`) VALUES ('$name', '$age',
'$gender', '$email', '$phone', '$desc', current_timestamp());";

//echo $sql;

//excute the query
if($con->query($sql) == true){
   // echo "successfully inserted";


   //flag si=or successful insertion
   $insert = true;
}
else{
    echo "Error: $sql <br> $con->error";
}
//close the database connection
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ph.css">
</head>

<body>
<img class="bg" src="it.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>welcome to lahore us trip travel form</h1>
            <p>enter your details and submit this form to confirm your participation in the trip</p>
            <?php
            if($insert == true){
           echo "<p class='submitMsg'>Thanks for submitting you form.we are happy to see you joining for the us trip</p>";
            }
?>
            <form action="ph.php" method="post"></form>
            <input type="text" name="Name" id="Name" placeholder="enter your Name">
            <input type="text" name="Age" id="Age" placeholder="enter your Age">
            <input type="text" name="Gender" id="Gender" placeholder="enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>



    </div>
    <script src="ph.js"></script>

</body>

</html>
