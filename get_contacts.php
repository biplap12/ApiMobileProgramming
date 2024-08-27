<?php 
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
//retrieving data
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
//encoding data in json format
$json = array();
if($result->num_rows>0){
while ($row = $result->fetch_array()) {
$json["data"][]=array("id"=>$row["id"],"name"=>$row["name"],
 "address"=>$row["address"],"phone"=>$row["phone"],"email"=>$row["email"]);
}
}
echo json_encode($json);
$conn->close();
?>