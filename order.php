<?php
if ($_SERVER['REQUEST_METHOD']== 'POST'){ 

$fname=$_POST["first_name"] ;
// echo $fname ;
$lname=$_POST["last_name"] ;
$radd=$_POST["address"];
$mno=$_POST["mobile"];
$eadd=$_POST["email"];
$qty=$_POST["quantity"];


// echo $fname , $lname ,$radd ,$mno ,$eadd ,$qty ;




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

$sql = "INSERT INTO forder (fname, lname, radd, mno ,eadd, qty)
VALUES ('$fname', '$lname', '$radd','$mno','$eadd',$qty)";

if ($conn->query($sql) === TRUE) {
  echo "order placed succefully";
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
<p align="center"><b>Delicious Junction</b> has the best customers!<br>
We are so Grateful for the pleasure of serving you and hope we met your Expectations!!
</p>
<a href="index.html">have missed somthing ,order now !</a>
</font>
</body>
</html>