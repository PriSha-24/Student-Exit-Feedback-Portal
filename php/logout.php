<?php 
    session_start();
    session_destroy();
    header("Location: ../studentlogin.php");
    exit();
?>