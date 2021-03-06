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
    <?php
        if( isset($_POST['search']) && isset($_POST['utin']) ){
            $utin = $_POST['utin'];
            $query = "SELECT * FROM `clients` WHERE tin = '$utin' ";
            $res = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($res);
            if($row > 0){
                //header('location:dashboard.php');
                header('location:case_entry.php?id='.$row['c_id']);
                //header('Location: viewPollResults.php?pollId=' . $pollId);
            }
            else{
               echo "<script>alert('Client is not Registered ..!!!!')</script>"; 
            }

        }
    ?>

    <div id="wrapper">
        <!-- Navigation -->
		    <?php include ('include/navbar.php'); ?>
        <!-- Navigation -->
        <div id="page-wrapper">
            <div class="row">
               
                <div class="col-lg-12">
                  
                    <h1 class="page-header text-center"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="col-md-4"></div>
            <form method="post" class="form-group">
                <div class="col-md-4">
                    <input type="text" placeholder="Enter UTIN/TIN" class="form-control" name="utin" required>
                    <button type="submit" class="btn btn-block btn-primary" name="search">Search</button>
                </div>
            </form>
            <div class="col-md-4"></div>

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
