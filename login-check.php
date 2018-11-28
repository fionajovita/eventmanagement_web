<?php
    session_start();
    if(empty($_SESSION["username"]))
    {
        echo "<script> window.location.assign('login.html'); </script>";
    }
    else{
        
        echo "<script> window.location.assign('useracc.php'); </script>";
    }
?>