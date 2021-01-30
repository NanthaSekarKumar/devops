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
$message=$_POST['message'];
$sql = "INSERT INTO contact (name,mobile_no,email,msg) VALUES ('$username','$phone','$email','$message')";
header('Location: index.html');
if ($conn->query($sql) === TRUE)
{
}
else 
{
}
$conn->close();
?>