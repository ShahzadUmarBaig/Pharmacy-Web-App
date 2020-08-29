<?php
    if(isset($_POST['create']))
    {
    $feed_name = $_POST['Name'];
    $feed_email = $_POST['Email'];
    $feed_message = $_POST['Message'];

    $servername = "localhost";
    $username = "root";
    $serverpass = "";
    $dbname = "MedKube";

    // Create connection
    $conn = new mysqli($servername, $username, $serverpass, $dbname);
    // Check connection

    $sql = "INSERT INTO feedback (Name,Email,Message) VALUES ('$feed_name','$feed_email','$feed_message')";
                   
                  
    if ($conn->query($sql) === TRUE) {
    
        echo "<script type='text/javascript'>alert('Message Has Been Delivered!');</script>";
    
        header("Location:index.php");  
    
    } else {
    
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
    }
?>
