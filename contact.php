<?php
if ($_SERVER['REQUEST_METHOD']== 'POST'){ 

$fname=$_POST["firstname"] ;
// echo $fname ;

$mno=$_POST["Mobile"];
$eadd=$_POST["Email"];
$msg=$_POST["msg"];
// echo "hello";
 
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

$sql = "INSERT INTO contact (fname,mno,eadd,msg)
VALUES ('$fname','$mno','$eadd','$msg')";

if ($conn->query($sql) === TRUE) {
  echo "you form submited";
  // echo alert ("you form submited");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}






?>








<!doctype html>
<html>
<head>
<title>contact</title>
</head>
<style>
body{
color:green; background-color:bisque;
}
</style>
<h1 align="center">Thank You for contacting us !!!</h1>
<font size="5">
<p align="center"><b>Delicious Junction</b> our customer excicative will contact you in 20 mint<br>

</p>
<a href="index.html">have missed somthing ,order now !</a>
</font>
</body>
</html>















