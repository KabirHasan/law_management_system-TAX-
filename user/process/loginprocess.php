<?php
    include '../include/connection.php';
    if( isset($_POST['save']) ){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        
        
        
        $query = "SELECT id,advocate_name, pass FROM `advocates` WHERE email= '$email' and pass='$pass'";
        
        
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);
        if($row>0){
            
            session_start();
            $_SESSION['advocate_name'] = $row['advocate_name'];
            $_SESSION['ad_id'] = $row['id'];
            header('location:../dashboard.php');
        }
        
        else{
            echo "<script>
                alert('Incorrect email or password');
                window.open('../index.php','_self');
            </script>";
        }
        
    }
?>