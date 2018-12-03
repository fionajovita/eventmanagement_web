<?php
    $lk = $_POST['lk'];
    $event_date = $_POST['date'];
    $budget = $_POST['budget'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $msg = $_POST['msg'];
    
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
    $sql = "INSERT INTO Enquiry (Lookingfor, EventDate, Budget, Name, Email, Contact, Message)
    VALUES ('$lk','$event_date','$budget','$name','$email','$contact','$message')";

    if ($conn->query($sql) === TRUE) {
        
        echo "<script>
            alert('Message Sent Successfully! We will get in touch with you soon :)');
             window.history.go(-1);
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
?>
