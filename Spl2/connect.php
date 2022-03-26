<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password,'test');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database

$sql = "SELECT * FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";}

  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $id=mysqli_real_escape_string($conn,$_POST['id']);
  echo $id;

  $sql2="SELECT * FROM registration where registration.id=$id" ;
  $result1=$conn->query($sql2);

 

  if ($result1 ->num_rows > 0) {
    // output data of each row
    while($row = $result1 -> fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    }
  } else {
    echo "wrong";
  }



 # echo $name;
  # echo $id;

  
$conn->close();
?>