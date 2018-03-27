<?php include '../session.php';

    if( isset($_POST['save']) && isset($_POST['utin']) ){
        $utin = $_POST['utin'];
        $circle = $_POST['circle'];
        $zone = $_POST['zone'];
        $ass_year = $_POST['ass_year'];
        $net_welth = $_POST['net_welth'];
        $income = $_POST['income'];
        $tax_paid = $_POST['tax_paid'];
        //$rec_date = $_POST['rec_date'];
        $serial = $_POST['serial'];
        $return_nat = $_POST['return_nat'];
        $sub_last_date = $_POST['sub_last_date'];
        $next_date = $_POST['next_date'];
        
       
        $rec_date = date("Y-m-d");
        
        
        
        $query = "INSERT INTO `taxes`(`tin`, `circle`, `tax_zone`, `ass_year`, `net_wealth`, `income`, `tax_paid`, `rec_date`, `serial`, `return_nat`, `sub_last_date`, `next_date`) VALUES ('$utin','$circle','$zone','$ass_year','$net_welth','$income','$tax_paid','$rec_date','$serial','$return_nat','$sub_last_date','$next_date')";
        
        
        $res = mysqli_query($conn,$query);
        
        if($res == 1){
            echo "<script> alert(' Successfully Tax Added!!') </script>";
            $query = "SELECT t_id FROM taxes WHERE t_id = (SELECT MAX(t_id) FROM taxes)";
            $res = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($res);
            $id = $row['t_id'];
            $link = "../record.php?id=$id&utin=$utin";
            echo "<script> window.open('$link','_self'); </script>";

        }
        else{
            echo "<script> alert(' Failed to save !!') </script>";
        }
        
    }
    
?>