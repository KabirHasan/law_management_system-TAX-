<?php
    include 'include/connection.php';
    session_start();
    
    if( !isset($_SESSION['advocate_name']) ){
        header('location:index.php');
    }
    
?>