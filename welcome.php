<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: adminlogin.php");
}


?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);

$noobs = mysqli_fetch_all($result, MYSQLI_ASSOC);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <h1>
    <a href="logout.php"> Logout</a>
    </h1>



<table style="border : 3px solid black;
width:80%;">
<p> contact detail</p>
<thead>
    <th  style="border : 2px solid black;">name</th>
    <th  style="border : 2px solid black;">mobile nuber</th>
    <th  style="border : 2px solid black;">email id</th>
    <th  style="border : 2px solid black;">msg</th>
    
</thead>
<tbody  style="border : 2px solid black;">
<?php foreach ($noobs as $noob): ?>
    <tr >
      <td ><?php echo $noob['fname']; ?></td>
      <td><?php echo $noob['mno']; ?></td>
      <td><?php echo $noob['eadd']; ?></td>
      <td><?php echo $noob['msg']; ?></td>
    </tr>
    <?php endforeach;?>

</tbody>
</table>











<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM feedback  ";
$result = mysqli_query($conn, $sql);

$noobs = mysqli_fetch_all($result, MYSQLI_ASSOC);

$conn->close();
?>




<table style="border : 3px solid black;
width:80%;">

<p> feedback of customers</p>
<thead>
    <th  style="border : 2px solid black;">service</th>
    <th  style="border : 2px solid black;">quality of food</th>
    <th  style="border : 2px solid black;">cleanliness</th>
    <th  style="border : 2px solid black;">response time</th>
    <th  style="border : 2px solid black;">birthday party</th>
    <th  style="border : 2px solid black;">wedding aniversary </th>
    <th  style="border : 2px solid black;">other party</th>    
</thead>
<tbody  style="border : 2px solid black;">
<?php foreach ($noobs as $noob): ?>
    <tr >
      <td ><?php echo $noob['Services']; ?></td>
      <td><?php echo $noob['Quality_Of_Food']; ?></td>
      <td><?php echo $noob['Cleanliness']; ?></td>
      <td><?php echo $noob['Value_Of_Money']; ?></td>
      <td><?php echo $noob['Reponse_Time']; ?></td>
      <td><?php echo $noob['birthday_party']; ?></td>
      <td><?php echo $noob['wedding_anniversary']; ?></td>
      <td><?php echo $noob['other_party']; ?></td>
    </tr>
    <?php endforeach;?>

</tbody>
</table>







<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM forder  ";
$result = mysqli_query($conn, $sql);

$noobs = mysqli_fetch_all($result, MYSQLI_ASSOC);

$conn->close();
?>




<table style="border : 3px solid black;
width:80%;">

<p> orders   of customers</p>
<thead>
    <th  style="border : 2px solid black;">frist name</th>
    <th  style="border : 2px solid black;">last name</th>
    <!-- <th  style="border : 2px solid black;">cleanliness</th> -->
    <th  style="border : 2px solid black;">residance add </th>
    <th  style="border : 2px solid black;">mobile no </th>
    <th  style="border : 2px solid black;"> email add </th>
    <th  style="border : 2px solid black;">qty</th>    
</thead>
<tbody  style="border : 2px solid black;">
<?php foreach ($noobs as $noob): ?>
    <tr >
      <td ><?php echo $noob['fname']; ?></td>
      <td><?php echo $noob['lname']; ?></td>
      <td><?php echo $noob['radd']; ?></td>
      <td><?php echo $noob['mno']; ?></td>
      <td><?php echo $noob['eadd']; ?></td>
      <td><?php echo $noob['qty']; ?></td>
   
    </tr>
    <?php endforeach;?>

</tbody>
</table>










</body>
</html>
