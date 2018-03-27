<!DOCTYPE html>
<html>
<head>
<style>
    #red{
        color: red;
    }

</style>
</head>
<body>

<?php
$q = $_GET['q'];

include 'session.php';
$sql="SELECT * FROM clients WHERE name_per like '%$q%' or  tin like '%$q%' ";
$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql);
$qq = mysqli_fetch_assoc($result2);

if($qq>0){
    
?>
    


   <thead>
       <tr><th>UTIN</th><th>Name</th><th>Case</th><th>Tax</th><th>Record</th></tr>
   </thead>
   <tbody>
    <?php 
     
        $count = 0;

                    while($row = mysqli_fetch_assoc($result)){ $count++;
                    if($count % 2 == 1) $val = 'active';
                    else $val = 'info';
                    
                   ?>
                       <tr class="<?=$val?>"><td><?=$row['tin']?></td><td><?=$row['name_per']?></td><td ><a href="case_entry.php?id=<?=$row['c_id']?>"><span style="color:red" >Case entry</span></a></td><td><a style="color:green" href="previous_record.php?id=<?=$row['tin']?>">record</a></td><td><a href="view_client.php?id=<?=$row['c_id']?>"><i class="fa fa-eye"></i></a><a href="edit_client.php?id=<?=$row['c_id']?>"><i class="fa fa-wrench"></i></a><a href="delete_client.php?id=<?=$row['c_id']?>"><i class="fa fa-trash-o"></i></a></td></tr> 
        

     <?php } ?>


   </tbody>

<?php }
   else echo "<p style='color:red;font-size:30px;text-align: center;;'>NO DATA FOUND ...!!!</p>";  
?>  
 
</body>
</html>