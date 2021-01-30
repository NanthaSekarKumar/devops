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
$dates=$_POST['dates'];
$message=$_POST['message'];
$sql = "INSERT INTO appointment (name,mobile_no,email,dates,msg) VALUES ('$username','$phone','$email','$dates','$message')";
header('Location: index.html');
if ($conn->query($sql) === TRUE)
{
}
else 
{
}
$conn->close();
?>