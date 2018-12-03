<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['user_id']);
    echo "<script> window.location.assign('index.html'); </script>";
?>