<!DOCTYPE html>
<html>

<body>
    <?php
        $year = $_GET['q'];
        $utin = $_GET['m'];
        include 'session.php';
        if($year == "fliter by Year"){
            $query = "select * from taxes where tin = '$utin'";
        }
        
        else{
            $query = "select * from taxes where tin = '$utin' and ass_year = '$year'";
        }
        $result = mysqli_query($conn,$query);
        $result2 = mysqli_query($conn,$query);
        $temp = mysqli_fetch_assoc($result2);
        if($temp>0){
        ?>
                   <table class="table table-condensed table-hover table-striped">
             
               <tbody>
                 <?php
                    $count = 0;
                    while($row = mysqli_fetch_assoc($result)){ $count++;
                    if($count % 2 == 1) $val = 'active';
                    else $val = 'info'; ?>
                       <tr class="<?=$val?>"><td><?=$count?></td><td><?=$row['ass_year']?></td><td><?=$row['serial']?></td><td><?=$row['circle']?></td><td><?=$row['tax_zone']?></td><td><?=$row['tax_paid']?></td><td><a href="record.php?id=<?=$row['t_id']?>&utin=<?=$row['tin']?>">view</a></td></tr> 
                    <?php }
                   
                 ?>
                   
                       
               </tbody>
   
        <?php
        } else{
            echo "<p style='color:red;font-size:30px;text-align: center;;'>NO TAX PAID ...!!!</p>";
        }
        ?>
    </table>
 
</body>
</html>