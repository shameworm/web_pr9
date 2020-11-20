<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_base1";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br />";

$sql = mysqli_query($conn, "SELECT * FROM tab1");
$my_row = mysqli_fetch_array($sql);

while($row=mysqli_fetch_array($sql))
{
echo $row['row0'],' ', $row['row1'],' ', $row['row2'],' ', $row['row3']."<br />";
}
?>