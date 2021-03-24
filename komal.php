<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM student ORDER by  name DESC";
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



<table style="border : 3px solid black;
width:80%;">

<thead>
    <th  style="border : 2px solid black;">name</th>
    <th  style="border : 2px solid black;">email</th>
    <th  style="border : 2px solid black;">info</th>
    
</thead>
<tbody  style="border : 2px solid black;">
<?php foreach ($noobs as $noob): ?>
    <tr >
      <td ><?php echo $noob['name']; ?></td>
      <td><?php echo $noob['email']; ?></td>
      <td><?php echo $noob['info']; ?></td>
    </tr>
    <?php endforeach;?>
    <a href="mainpage.php"> To insert the data</a>
</tbody>
</table>

</body>
</html>
