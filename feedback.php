<?php

$service=$qof=$clean=$vom=$rtime=$bday=$wdany=$oparty= 
"";
if ($_SERVER['REQUEST_METHOD']== 'POST'){ 

   $service=$_POST["service"];
   $qof=$_POST["qof"];
   $clean=$_POST["clean"];
   $vom=$_POST["vom"];
   $rtime=$_POST["rt"];
   $bday=$_POST["bday"];
   $wdany=$_POST["wdany"]; 
   $oparty=$_POST["oparty"];     
   
}



$servername = "localhost";
$username = "root";
$password = "";
$dbname ="wp";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "hello chacha";

$sql = "INSERT INTO feedback (Services, Quality_Of_Food, Cleanliness, Value_Of_Money ,Reponse_Time, birthday_party,wedding_anniversary,other_party)
VALUES ('$service','$qof','$clean','$vom','$rtime','$bday','$wdany','$oparty')";

if ($conn->query($sql) === TRUE) {
//   echo "order placed succefully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





?>
<!doctype html>
<html>
<head>
<title>thanks</title>
</head>
<style>
body{
color:green; background-color:bisque;
}
</style>
<h1 align="center">Thank You!!!</h1>
<font size="5">
<p align="center"><b>Delicious Junction</b> has the best customers!<br>thanks for your feedback
</p>
<a href="index.html">have missed somthing ,order now !</a>
</font>
</body>
</html>