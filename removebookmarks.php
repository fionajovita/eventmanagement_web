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
    $str = $_GET['str'];
    $sql = "DELETE FROM bookmarks WHERE event_id='$id' AND user_id='$user_id' ";
    if (mysqli_query($conn, $sql)) {
        setcookie($str,'',time()-3600,'/');
        echo "<script>window.history.go(-1);</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
    
?>