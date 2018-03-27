<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ATC tech</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
		<?php include ('include/navbar.php'); ?>
        <!-- Navigation -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                        
                        $id = $_GET['id'];
                        $query = "select * from clients where c_id = '$id' ";
                        $result = mysqli_query($conn,$query);
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <h1 class="page-header">Client UTIN/TIN : <?=$row['tin']?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<?php 
                        if(isset($_GET['id'])){
							 $userid = $_GET['id'];
							  $sql = mysqli_query($conn,"SELECT * FROM clients WHERE c_id = '$userid'");
							          while ($row = mysqli_fetch_assoc($sql)){
										  $id = $row['c_id'];
									  
						
						?>
            <div class="col-md-1"></div>
            <div class="col-md-8 col-md-offset-1">
				<table id="det" class="table table-border">
					<tr><td>Name( Organization )</td><td>:</td><td><?=$row['name_org']?></td> <td>Name (Authorized Person)</td><td>:</td><td><?=$row['name_per']?></td></tr>
					<tr><td>Address( Office )</td><td>:</td><td><?=$row['add_off']?></td> <td>Present Address</td><td>:</td><td><?=$row['add_pre']?></td></tr>
					<tr><td>Permanent Address</td><td>:</td><td><?=$row['add_per']?></td> <td>NID</td><td>:</td><td><?=$row['nid']?></td></tr>
					<tr><td>Contact Person Name</td><td>:</td><td><?=$row['cont_name']?></td> <td>Contact Person No</td><td>:</td><td><?=$row['cont_no']?></td></tr>
					<tr><td>Date of birth</td><td>:</td><td><?=$row['birth_date']?></td> <td>Father's Name</td><td>:</td><td><?=$row['name_fat']?></td></tr>
					<tr><td>Mother's Name</td><td>:</td><td><?=$row['name_mot']?></td> <td>Wife/Husband Name</td><td>:</td><td><?=$row['name_fia']?></td></tr>
					<tr><td>Occupation</td><td>:</td><td><?=$row['occ']?></td><td>Sons</td><td>:</td><td><?=$row['son']?></td></tr>
					<tr><td></td><td></td><td></td><td>Daughters</td><td>:</td><td><?=$row['dau']?></td></tr>
					
				</table> 
		
			  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">EDIT</button>
			</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Edit Profile</h4>
      </div>
	  <form method="post" action="">
							<div class="modal-body">
				
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Name( Organization )</label>
											<input type="text" class="form-control" name="name_org" value="<?php echo $row['name_org']; ?>" placeholder="<?php echo $row['name_org']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Address( Office ) </label>
											<input type="text" class="form-control" name="add_off" value="<?php echo $row['add_off']; ?>" placeholder="<?php echo $row['add_off']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Permanent Address </label>
											<input type="text" class="form-control" name="add_per" value="<?php echo $row['add_per']; ?>" placeholder="<?php echo $row['add_per']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Contact Person Name </label>
											<input type="text" class="form-control" name="cont_name" value="<?php echo $row['cont_name']; ?>" placeholder="<?php echo $row['cont_name']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Date of birth </label>
											<input type="date" class="form-control" name="birth_date" value="<?php echo $row['birth_date']; ?>" placeholder="<?php echo $row['birth_date']; ?>">
										</div>
										
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Mother's Name</label>
											<input type="text" class="form-control" name="name_mot" value="<?php echo $row['name_mot']; ?>" placeholder="<?php echo $row['name_mot']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Occupation</label>
											<input type="text" class="form-control" name="occ" value="<?php echo $row['occ']; ?>" placeholder="<?php echo $row['occ']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Name (Authorized Person)</label>
											<input type="text" class="form-control" name="name_per" value="<?php echo $row['name_per']; ?>" placeholder="<?php echo $row['name_per']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Present Address</label>
											<input type="text" class="form-control" name="add_pre" value="<?php echo $row['add_pre']; ?>" placeholder="<?php echo $row['add_pre']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">NID</label>
											<input type="text" class="form-control" name="nid" value="<?php echo $row['nid']; ?>" placeholder="<?php echo $row['nid']; ?>">
										</div>
										
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Contact Person No</label>
											<input type="text" class="form-control" name="cont_no" value="<?php echo $row['cont_no']; ?>" placeholder="<?php echo $row['cont_no']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Father's Name</label>
											<input type="text" class="form-control" name="name_fat" value="<?php echo $row['name_fat']; ?>" placeholder="<?php echo $row['name_fat']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Wife/Husband Name</label>
											<input type="text" class="form-control" name="name_fia" value="<?php echo $row['name_fia']; ?>" placeholder="<?php echo $row['name_fia']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">sons</label>
											<input type="text" class="form-control" name="son" value="<?php echo $row['son']; ?>" placeholder="<?php echo $row['name_fia']; ?>">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label for="exampleInput">Daughter</label>
											<input type="text" class="form-control" name="dau" value="<?php echo $row['dau']; ?>" placeholder="<?php echo $row['name_fia']; ?>">
										</div>
						
										
										
										
										
				
							</div>
								<div class="modal-footer">
									<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
									<button class="btn btn-success" name="edit" type="submit">Save changes</button>
								</div>
	  </form>
	  
							<?php
                            if (isset($_POST['edit'])){
								$name_org=$_POST['name_org'];
								$name_auth=$_POST['name_per'];
								$address=$_POST['add_off'];
								$present_address=$_POST['add_pre'];
								$per_address=$_POST['add_per'];
								$con_per_name=$_POST['cont_name'];
								$contact_person_no=$_POST['cont_no'];
								$nid=$_POST['nid'];
								$date_birth=$_POST['birth_date'];
								$fa_name=$_POST['name_fat'];
								$mo_name=$_POST['name_mot'];								
								$occupation=$_POST['occ'];
								$name_fia=$_POST['name_fia'];
								
								
								
								
								
								
								
								
                            	$q = mysqli_query($conn,"UPDATE clients SET name_org = '$name_org', name_per='$name_auth',add_off='$address',
								add_pre='$present_address',add_per='$per_address',cont_name='$con_per_name',cont_no='$contact_person_no',nid='$nid',birth_date='$date_birth', name_fat='$fa_name',name_mot='$mo_name', name_fia='$name_fia', occ='$occupation' WHERE c_id = '$userid' ");
                                echo "<script> alert('Information added successfully!!'); </script>";
                            	$link="edit_client.php?id=$userid";
                            	echo "<script> window.open('$link','_self'); </script>";
						}}}
							
							
							?>
     
    </div>

  </div>
</div>
			<div class="col-md-2">
			
			
			</div>
			
			
			
			
			
			
			
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
