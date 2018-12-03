<?php
    session_start();
    $servername = "localhost";
    $db_username = "root";
    $password = "Difi3540";
    $dbname = "EventManagement";
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        
    }
    else{
        die("Connection failed: ");
    }
    // Create connection
    $conn = new mysqli($servername, $db_username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        echo "Failed to Connect!";
        die("Connection failed: " . $conn->connect_error);
    }
    $id = $_GET['id'];
    $name = $_GET['name'];
    $sql = "SELECT * FROM $name WHERE id='$id'";
    if($result=mysqli_query($conn,$sql))
    {
        
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $name1 = $row['name'];
        $description = $row['description'];
        $contact = $row['contact'];
        $email = $row['email'];
        $image_url = $row['image_url'];
        $address = $row['address'];
        echo '$id','$name1','$description','$contact','$email','$image_url','$address','1';
        $sql = "INSERT INTO bookmarks(event_id, b_name, description, contact, email, image_url, address, user_id) 
        VALUES ('$id','$name1','$description','$contact','$email','$image_url','$address','$user_id')";
        if ($conn->query($sql) === TRUE) {
            $string = preg_replace('/\s+/', '', $row['name']);
            $cookie_name = $string;
            $cookie_value = "set";
            setcookie($cookie_name, $cookie_value, time() + (60*60*2), "/");
            echo "<script>window.history.go(-1);</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        
    }
    
    mysqli_close($conn);
?>