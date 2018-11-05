<?php

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $DOB = $_POST['DOB'];
    
    $servername = "localhost";
    $db_username = "root";
    $password = "Difi3540";
    $dbname = "EventManagement";

    // Create connection
    $conn = new mysqli($servername, $db_username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "INSERT INTO User (Username, Password, DOB)
    VALUES ('$Username','$Password','$DOB')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> window.location.assign('contact_Us.html'); </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
?>
