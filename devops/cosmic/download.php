<?php
$servername = "localhost";
$username = "agro";
$password = "G~D6draM";
$dbname = "agro";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username=$_POST['username'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$sql = "INSERT INTO downloads (name,mobile_no,email) VALUES ('$username','$phone','$email')";
header('Location: pdf/plan.pdf');
if ($conn->query($sql) === TRUE)
{
}
else 
{
}
$conn->close();
?>