<?php 
//getting post data
$name=$_POST["name"]; 
$address=$_POST["address"]; 
$phone=$_POST["phone"];
$email=$_POST["email"];
//server credentials 
$server="localhost";
$username="root";
$password="";
$database="bcatest";
// Create connection
$conn = new mysqli($server, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
//inserting data
$sql = "INSERT INTO student(name,address,phone,email) 
VALUES('".$name."','".$address."','".$phone."','".$email."')";
$result = $conn->query($sql);
if($result)
echo"Data Inserted Successfully !";
else
echo"Failed to Insert Data !";
$conn->close();
?>