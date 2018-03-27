<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/myboot.css">
    <link rel="stylesheet" href="bootstrap/myboot2.css">
    <link rel="stylesheet" href="bootstrap/style.css">
    <meta charset="UTF-8">
    <title>Client Details</title>
    <style>


    </style>
</head>
<body>
    <div class="container">
        <div >
            <form action="#" method="post">
              <div class="cheading">
                  <label class="text-primary">Client Details</label>
              </div>
              <div class="row">
                    <div class="form-group col-md-6">
                        <label for="utin">UTIN/TIN:</label>
                        <input type="text" class="form-control uuu" id="utin">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="utin">Name(Organization):</label>
                        <input type="text" class="form-control uuu" id="">
                    </div>
              </div>
              <div class="row">

                    <div class="form-group col-md-6">
                        <label for="utin">Name(Authorized Person):</label>
                        <input type="text" class="form-control uuu" id="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="utin">Office Address:</label>
                        <input type="text" class="form-control uuu" id="">
                    </div>
              </div>

              <div class="row">
                  <div class="form-group col-md-6">
                    <label for="bname">Present Address:</label>
                    <input type="text" class="form-control uuu" id="cadd">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="bname">Permanent Address:</label>
                    <input type="text" class="form-control uuu" id="cadd2">
                  </div>
                </div>
              <div class="row">
                    <div class="form-group col-md-6">
                        <label for="utin">Contact Person Name:</label>
                        <input type="text" class="form-control uuu" id="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="utin">Contact Number:</label>
                        <input type="text" class="form-control uuu" id="" value="+880">
                    </div>
              </div>
              <div class="row">
                    <div class="form-group col-md-6">
                        <label for="utin">NID NO:</label>
                        <input type="text" class="form-control uuu" id="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="utin">Date of Birth:</label>
                        <input type="date" class="form-control uuu" id="">
                    </div>
              </div>
              <div class="row">
                    <div class="form-group col-md-6">
                        <label for="utin">Father's Name:</label>
                        <input type="text" class="form-control uuu" id="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="utin">Mother's Name:</label>
                        <input type="text" class="form-control uuu" id="">
                    </div>
              </div>
              <div class="row">
                    <div class="form-group col-md-6">
                        <label for="utin">Wife/Husband Name:</label>
                        <input type="text" class="form-control uuu" id="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="utin">Occupation:</label>
                        <input type="text" class="form-control uuu" id="">
                    </div>
              </div>
              <div class="row">
                    <label class="col-md-3">Family Details :</label>
                    <div class="col-md-4">
                       <label>Sons</label>
                       <input type="checkbox" name="children" id="son" onclick="abc()" >
                       <input type="text" id="num">
                    </div>
                    <div class="col-md-4">
                       <label>Daughters</label>
                       <input type="checkbox" name="children" id="dou" onclick="abc2()">
                       <input type="text" id="num2" >
                    </div>
              </div>
              <div class="row">
                
                <div class="col-md-2">
                    <button type="submit" class="btn btn-block text-primary">Save</button>
                </div>


              </div>

            </form>
        </div>
    </div>
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