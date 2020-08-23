<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MedKube";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn==true) {
    echo "true";
}
else {
    echo "false";
}

$sql = "INSERT INTO users (Email, Password, Contact, isAdmin) VALUES ('John@hotmail.com', 'Doe', '03125423390',0)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();



?>
