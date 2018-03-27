<?php include '../session.php';

    if( isset($_POST['save']) && isset($_POST['utin']) ){
        $utin = $_POST['utin'];
        $name_org = $_POST['name_org'];
        $name_per = $_POST['name_per'];
        $add_off = $_POST['add_off'];
        $add_pre = $_POST['add_pre'];
        $add_per = $_POST['add_per'];
        $cont_name = $_POST['cont_name'];
        $cont_no = $_POST['cont_no'];
        $nid = $_POST['nid'];
        $birth_date = $_POST['birth_date'];
        $name_fat = $_POST['name_fat'];
        $name_mot = $_POST['name_mot'];
        $name_fia = $_POST['name_fia'];
        $occ = $_POST['occ'];
        $son = $_POST['son'];
        $dau = $_POST['dau'];
        $ad_id = $_SESSION['ad_id'];
        
        $query = "select * from clients where tin = '$utin' ";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        if($row > 0){
            echo "<script> alert(' UTIN or TIN already exits !!') </script>";
            echo "<script> window.open('../client_details.php','_self'); </script>";    
        }
        
        
        $query = "INSERT INTO `clients`(`ad_id`, `tin`, `name_org`, `name_per`, `add_off`, `add_pre`, `add_per`, `cont_name`, `cont_no`, `nid`, `birth_date`, `name_fat`, `name_mot`, `name_fia`, `occ`, `son`, `dau`) VALUES ('$ad_id','$utin','$name_org','$name_per','$add_off','$add_pre','$add_per','$cont_name','$cont_no','$nid','$birth_date','$name_fat','$name_mot','$name_fia','$occ','$son','$dau')";
        
        
        $res = mysqli_query($conn,$query);
        
        if($res == 1){
            echo "<script> alert(' Successfully Added, Client Name: $name_per !!') </script>";
            echo "<script> window.open('../client_details.php','_self'); </script>";

        }
        else{
            echo "<script> alert(' Failed to save !!') </script>";
        }
        
    }
    
?>