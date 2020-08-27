<?php
              if(isset($_POST['login']))
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
              
                
                $sql = "SELECT * FROM users WHERE Email = '$login_email'";
                $result = $conn->query($sql);
                
                $fail = "User is not registered!";
                $success = "User is already registered!";
              
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      $email = $row["Email"];
                      $password = $row["Password"];
                      if($row["isAdmin"] == 1){
                        header("Location:dashboard.php");
                      }else{
                       header("Location:index.php");
                      }
                    }
                  } else {
                    echo "<script type='text/javascript'>alert('$fail');</script>";
                }

                $conn->close();
              }
            ?>