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
         
         $create_product = "INSERT INTO users (Email, Password, Contact, isAdmin) VALUES ('$user_email', '$user_password', '$user_contact', '$user_isAdmin')";
         
         $emailCheck = "SELECT * FROM users WHERE Email = '$user_email'";
         
         $result = $conn->query($emailCheck);

         $fail = "User is already registered!";
         $success = "User has been successfully registered!";
 
        if($result->num_rows > 0) {
            echo "<script type='text/javascript'>alert('$fail');</script>";   
            header("Location:modify.html");
        } else 
           {
               if ($conn->query($create_product) === TRUE) {
                header("Location:modify.html");
            } else {
                echo "Error: " . $create_product . "<br>" . $conn->error;
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

