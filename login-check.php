<?php
    session_start();
<<<<<<< HEAD
    if(isset($_SESSION['username'])){
        echo "<script> window.location.assign('useracc.php'); </script>";
    }
    else{
        
        echo "<script> window.location.assign('login.html'); </script>";
    }
    
=======
    if(empty($_SESSION["username"]))
    {
        echo "<script> window.location.assign('login.html'); </script>";
    }
    else{
        
        echo "<script> window.location.assign('useracc.php'); </script>";
    }
>>>>>>> 4eb0ddcd9b40c1945148eb8b2094ad5c8a9de9bc
?>