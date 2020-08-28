<?php
    if(isset($_POST['user-create']))
    {
        $user_email = $_POST['user-email'];
        $user_password = $_POST['user-password'];
        $user_contact = $_POST['user-contact'];
        $user_isAdmin = $_POST['user-isAdmin'];
        
        $servername = "localhost";
        $username = "root";
        $serverpass = "";
        $dbname = "MedKube";

        // Create connection
        $conn = new mysqli($servername, $username, $serverpass, $dbname);
        // Check connection
        
        $emailCheck = 'SELECT * FROM users WHERE Email = "$email"';
      
        $result = $conn->query($emailCheck);
      
        $fail = "User is already registered!";
        $success = "User has been successfully registered!";
      
        if ($result->num_rows > 0)
            {
                echo "<script type='text/javascript'>alert('$fail');</script>";
            } else {
                $sql = "INSERT INTO users (Email, Password, Contact, isAdmin) VALUES ('$email','$password','$contact',0)";
                if ($conn->query($sql) === TRUE) {
                    header("Location:index.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }   
            }
       
            $conn->close();   
    }
    elseif (isset($_POST['product-create'])) 
    {
        $product_title = $_POST['product-title'];
        $product_desc = $_POST['product-description'];
        $product_price = $_POST['product-price'];
        $product_instock = $_POST['product-instock'];
        $product_image = $_POST['product-image'];

        echo $product_title . "</br>";
        echo $product_desc . "</br>";
        echo $product_price . "</br>";
        echo $product_instock . "</br>";
        echo $product_image . "</br>";

        $servername = "localhost";
        $username = "root";
        $serverpass = "";
        $dbname = "MedKube";

        // Create connection
        $conn = new mysqli($servername, $username, $serverpass, $dbname);
        // Check connection
        
        $create_product = "INSERT INTO products (Title, Description, Price, inStock, Image) VALUES ('$product_title', '$product_desc', '$product_price', '$product_instock', '$product_image')";
        
        $fail = "Product could not be created!";
        $success = "Product has been successfully created!";
        
        if ($conn->query($create_product) === TRUE) {
            header("Location:modify.html");
        } else {
            echo "Error: " . $create_product . "<br>" . $conn->error;
        }
        
        $conn->close();   
    }
?>

