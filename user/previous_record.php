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
		<?php include ('include/navbar.php');
            $utin = $_GET['id'];
            $temp_query = "select * from clients where tin = '$utin'";
            $result = mysqli_query($conn,$temp_query);
            $client = mysqli_fetch_assoc($result);
        ?>
        <!-- Navigation -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
                   
                    <h1 class="page-header text-center text-info"><?=$client['name_per']?> ( <?=$utin?> )</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
             
           <table class="table table-condensed table-hover table-striped" >
               <thead>
                   <tr><th>SL</th><th>Year&rarr; <select onchange="showResult(this.value)"><option>fliter by Year</option><option>2018-19</option><option>2019-20</option></select></th><th>serial</th><th>Circle</th><th>Tax zone</th><th>Tax paid</th><th>Details</th></tr>
               </thead>
               <tbody id="livesearch2" >
                 <?php
                    
                    $count = 0;
                    $query = "select * from taxes where tin = '$utin'";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_assoc($result)){ $count++;
                    if($count % 2 == 1) $val = 'active';
                    else $val = 'info';
                   ?>
                       <tr class="<?=$val?>"><td><?=$count?></td><td><?=$row['ass_year']?></td><td><?=$row['serial']?></td><td><?=$row['circle']?></td><td><?=$row['tax_zone']?></td><td><?=$row['tax_paid']?></td><td>
                       <a href="record.php?id=<?=$row['t_id']?>&utin=<?=$row['tin']?>">view</a></td></tr> 
                    <?php }
                   
                 ?>
                   
                       
               </tbody>
           </table>
           
           
           
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
    <script>
    function showResult(str) {

      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("livesearch2").innerHTML=this.responseText;
       
        }
      }
      xmlhttp.open("GET","livesearch2.php?q="+str+"&m="+<?=$utin?>,true);
      xmlhttp.send();
    }
    </script>

</body>

</html>
