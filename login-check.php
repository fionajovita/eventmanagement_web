<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "<script> window.location.assign('useracc.php'); </script>";
    }
    else{
        
        echo "<script> window.location.assign('login.html'); </script>";
    }
    
?>