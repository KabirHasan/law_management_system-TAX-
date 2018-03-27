<?php
    include '../include/connection.php';
    if(isset($_POST['save']) ){
        $cname = $_POST['cname'];
        if($cname == "Enter Chamber Name") $cname = "";
        
        $aname = $_POST['aname'];
        if($aname =="Enter Advocate name") $aname = "";
        
        $bname = $_POST['bname'];
        if($bname == "Enter BAR Name") $bname = "";
        
        $mem_no= $_POST['mem_no'];
        if($mem_no == "Enter membership no") $mem_no = "";
        
        $caddress = $_POST['caddress'];
        if($caddress =="Enter Chamber Address") $caddress = "";
        
        $raddress = $_POST['raddress'];
        if($raddress =="Residential Address" ) $raddress = "";
        
        $phone = $_POST['phone'];
        if($phone == "Enter Contact Number") $phone = "";
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $rpass = $_POST['rpass'];
        
        
        $query = "select * from advocates where email = '$email'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        if($row > 0){
                echo"<script>
                    alert('Email address already exits... ');
                    window.open('../signupform.php','_self');
                </script>";   
        }
        
        if($pass == $rpass){
            $query = "INSERT INTO `advocates`( `advocate_name`, `chamber_name`, `bar_name`, `mem_no`, `chamber_address`, `residential_address`, `phone_no`, `email`, `pass`) VALUES ('$aname','$cname','$bname','$mem_no','$caddress','$raddress','$phone','$email','$pass')";
            $res = mysqli_query($conn,$query);
            if($res == 1){
                echo"<script>
                    alert('Registration Completed... You can log in');
                    window.open('../index.php','_self');
                </script>";
            }
        }
        else{
           
              echo  "<script>
                alert('Password do not match');
                window.open('../signupform.php','_self');
               </script>"; 
       }
       
        

        
        
        
        
    }
?>