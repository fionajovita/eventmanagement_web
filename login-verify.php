<?php
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
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $sql = "SELECT User_id, Username, Password FROM User WHERE Username = '$Username' AND Password = '$Password'";
    $query = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($query);
    if ($numrows!=0)
    {
        $lifetime=100;
        $row = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION["user_id"] = $row['User_id'];
        $_SESSION["username"] = $Username;
        echo "<script> window.location.assign('index.html'); </script>";
    }
    else{
        echo "<script> window.location.assign('login.html'); alert('Invalid Login Credentials!'); </script>";
    } 
    mysqli_close($conn);
?>
