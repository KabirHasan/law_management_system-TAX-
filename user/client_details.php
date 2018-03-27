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
    
    <link rel="stylesheet" href="bootstrap/myboot.css">
    <link rel="stylesheet" href="bootstrap/myboot2.css">
    <link rel="stylesheet" href="bootstrap/style.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);
        #myform{
            padding: 20px;
            background: gray;
            
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
                <div class="col-lg-12 text-center">
                    <h1 class="page-header text-center text-primary" style="font-family: fantasy;">Client registration form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
            <div class="row">
                
                <div class="container col-md-12">
                    <div >
                        <form action="process/client_add.php" method="post" id="myform">
                          
                          <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="utin">UTIN/TIN:</label>
                                    <input type="text" class="form-control uuu" id="utin" name="utin" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="utin">Name(Organization):</label>
                                    <input type="text" class="form-control uuu" id="" name="name_org" required>
                                </div>
                          </div>
                          <div class="row">

                                <div class="form-group col-md-6">
                                    <label for="utin">Name(Authorized Person):</label>
                                    <input type="text" class="form-control uuu" id="" name="name_per" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="utin">Office Address:</label>
                                    <input type="text" class="form-control uuu" id="" name="add_off">
                                </div>
                          </div>

                          <div class="row">
                              <div class="form-group col-md-6">
                                <label for="bname">Present Address:</label>
                                <input type="text" class="form-control uuu" id="cadd" name="add_pre">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="bname">Permanent Address:</label>
                                <input type="text" class="form-control uuu" id="cadd2" name="add_per">
                              </div>
                            </div>
                          <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="utin">Contact Person Name:</label>
                                    <input type="text" class="form-control uuu" id="" name="cont_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="utin">Contact Number:</label>
                                    <input type="text" class="form-control uuu" id="" value="+880" name="cont_no">
                                </div>
                          </div>
                          <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="utin">NID NO:</label>
                                    <input type="text" class="form-control uuu" id="" name="nid" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="utin">Date of Birth:</label>
                                    <input type="date" class="form-control uuu" id="" name="birth_date" required>
                                </div>
                          </div>
                          <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="utin">Father's Name:</label>
                                    <input type="text" class="form-control uuu" id="" name="name_fat">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="utin">Mother's Name:</label>
                                    <input type="text" class="form-control uuu" id="" name="name_mot">
                                </div>
                          </div>
                          <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="utin">Wife/Husband Name:</label>
                                    <input type="text" class="form-control uuu" id="" name="name_fia">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="utin">Occupation:</label>
                                    <input type="text" class="form-control uuu" id="" name="occ">
                                </div>
                          </div>
                          <div class="row">
                                <label class="col-md-3">Family Details :</label>
                                <div class="col-md-4">
                                   <label>Sons</label>
                                   <input type="checkbox" name="children" id="son" onclick="abc()">
                                   <input type="text" id="num" name="son">
                                </div>
                                <div class="col-md-4">
                                   <label>Daughters</label>
                                   <input type="checkbox" name="children" id="dou" onclick="abc2()">
                                   <input type="text" id="num2" name="dau" >
                                </div>
                          </div>
                          <div class="row">

                            <div class="col-md-2">
                                <button type="submit" class="btn btn-block text-primary" name="save">Save</button>
                            </div>


                          </div>

                        </form>
                    </div>
                </div>
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
    
    
    <script>
        function cad(){
            if(document.getElementById("cadd").onkeypress == true){
                alert("Hello");
            }
            document.getElementById("cadd").style.height = "80px";
            
            
        }
        function cad2(){
           
            document.getElementById("cadd2").style.height = "80px";
        }
        
        function abc(){
            var qq = document.getElementById("son");
            if(qq.checked == true){
               document.getElementById("num").style.display = "inline"; 
            }
            else{
                document.getElementById("num").style.display = "none";
            }
            
        }
        
        function abc2(){
            var qq = document.getElementById("dou");
            if(qq.checked == true){
               document.getElementById("num2").style.display = "inline"; 
            }
            else{
                document.getElementById("num2").style.display = "none";
            }
            
        }
        
    </script> 

</body>

</html>















