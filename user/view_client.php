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
    <style>
        #det td{
            padding: 2px 8px 2px 8px;
        }
    </style>

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
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <table id="det">
                <tr><td>Name( Organization )</td><td>:</td><td><?=$row['name_org']?></td><td>Name (Authorized Person)</td><td>:</td><td><?=$row['name_per']?></td></tr>
                <tr><td>Address( Office )</td><td>:</td><td><?=$row['add_off']?></td><td>Present Address</td><td>:</td><td><?=$row['add_pre']?></td></tr>
                <tr><td>Permanent Address</td><td>:</td><td><?=$row['add_per']?></td><td>NID</td><td>:</td><td><?=$row['nid']?></td></tr>
                <tr><td>Contact Person Name</td><td>:</td><td><?=$row['cont_name']?></td><td>Contact Person No</td><td>:</td><td><?=$row['cont_no']?></td></tr>
                <tr><td>Date of birth</td><td>:</td><td><?=$row['birth_date']?></td><td>Father's Name</td><td>:</td><td><?=$row['name_fat']?></td></tr>
                <tr><td>Mother's Name</td><td>:</td><td><?=$row['name_mot']?></td><td>Wife/Husband Name</td><td>:</td><td><?=$row['name_fia']?></td></tr>
                <tr><td>Occupation</td><td>:</td><td><?=$row['occ']?></td><td>Sons</td><td>:</td><td><?=$row['son']?></td></tr>
                <tr><td></td><td></td><td></td><td>Daughters</td><td>:</td><td><?=$row['dau']?></td></tr>
                
            </table> </div>
            
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
