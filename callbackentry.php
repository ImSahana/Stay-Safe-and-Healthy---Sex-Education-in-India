<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insynedu";

$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$message=$_POST['message'];
// echo $name;

//  Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//$sql = "INSERT INTO contact ( fname, pnumber, email, tmessage) VALUES (".$name.", ".$number.", ".$email.", ".$message.")";

$sql = "INSERT INTO contact (fname, pnumber, email, tmessage) VALUES ('$name', '$number', '$email', '$message')";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 $conn->close();
?>