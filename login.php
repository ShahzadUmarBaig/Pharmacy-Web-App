<?php
              if(isset($_POST['create']))
              {
                $login_email = $_POST['login_email'];
                $login_password = $_POST['login_password'];

                $servername = "localhost";
                $username = "root";
                $serverpass = "";
                $dbname = "MedKube";

                // Create connection
                $conn = new mysqli($servername, $username, $serverpass, $dbname);
                // Check connection

                $emailCheck = 'SELECT * FROM users WHERE Email = '. $login_email .'';
                $result = $conn->query($emailCheck);

                $fail = "User is not registered!";
                $success = "User is already registered!";

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      $email = $row["Email"];
                      $password = $row["Password"];
                      header("Location:index.php");
                    }
                  } else {
                    echo "<script type='text/javascript'>alert('$fail');</script>";
                }

                $conn->close();
              }
            ?>