<?php
              if(isset($_POST['create']))
              {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $contact = $_POST['contact'];

                $servername = "localhost";
                $username = "root";
                $serverpass = "";
                $dbname = "MedKube";

                // Create connection
                $conn = new mysqli($servername, $username, $serverpass, $dbname);
                // Check connection

                $emailCheck = 'SELECT * FROM users WHERE Email = '. $email .'';
                $result = $conn->query($emailCheck);

                $fail = "User is already registered!";
                $success = "User has been successfully registered!";

                if ($result->num_rows > 0) {

                 echo "<script type='text/javascript'>alert('$fail');</script>";
                 
                } else {
                    
                    $sql = "INSERT INTO users (Email, Password, Contact, isAdmin) VALUES ('$email','$password','$contact',0)";
                    
                    if ($conn->query($sql) === TRUE) {
                        echo "<script type='text/javascript'>alert('$success');</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    header("Location:index.php");
                }

                $conn->close();
              }
            ?>