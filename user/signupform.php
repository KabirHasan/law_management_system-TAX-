<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="stylesheet" href="bootstrap/style.css">
      <link rel="stylesheet" href="bootstrap/myboot.css">
      <link rel="stylesheet" href="bootstrap/myboot2.css">
    <meta charset="UTF-8">
    <title>Sign Up form</title>
    <style>
        
    </style>
</head>
<body style="background:#926C75;">
    <div class="container signupform">
        <div >
            <form action="process/add_advocate.php" method="post">
              <div>
                  <label class="text-primary">Register to continue</label>
              </div>
              <div class="row">
                  <div class="form-group col-md-6">
                    <label class="text-primary" for="cname"><span id="cname"></span></label>
                    <input type="text" class="form-control" value="Enter Chamber Name" onfocus="myfunction()" id="cname_input" name="cname" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="text-primary" for="aname"><span  id="aname"></span></label>
                    <input type="text" class="form-control" value="Enter Advocate name" id="aname_input" onfocus="myfunction2()" name="aname" required>
                  </div>
              </div>
              <div class="row">
                  <div class="form-group col-md-6">
                    <label class="text-primary" for="bname"><span id="bname"></span></label>
                    <input type="text" class="form-control" value="Enter BAR Name" id="bname_input" onfocus="myfunction3()" name="bname" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="text-primary" for="bname"><span id="mem_no"></span></label>
                    <input type="text" class="form-control" value="Enter membership no" id="mem_no_input" onfocus="myfunction4()" name="mem_no" required>
                  </div>    
              </div>
              <div class="row">
                  <div class="form-group col-md-6">
                    <label class="text-primary" for="bname" id="camber"></label>
                    <input type="text" class="form-control address" id="camberr" onfocus="myfunction5()" value="Enter Chamber Address" name="caddress" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="text-primary" for="bname" id="residential"></label>
                    <input type="text" class="form-control address" onfocus="myfunction6()" id="residentiall" value="Residential Address" name="raddress" required>
                  </div>   
              </div>
              <div class="row">
                  <div class="form-group col-md-6">
                    <label class="text-primary" for="bname" id="contact"></label>
                    <input type="text" class="form-control" value="Enter Contact Number" onfocus="myfunction7()" id="contactt" name="phone" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="text-primary" for="email" id="email"></label>
                    <input type="email" class="form-control" onfocus="myfunction8()" id="emaill" value="Enter email address" name="email" required>
                  </div>
              </div>
              <div class="row">
                  <div class="form-group col-md-6">
                    <label class="text-primary" for="password" id="pass"></label>
                    <input type="text" class="form-control" onfocus="myfunction9()" id="passs" value="Create a password" name="pass" required>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label class="text-primary" for="password" id="rpass"></label>
                    <input type="text" class="form-control" onfocus="myfunction10()" id="rpasss" value="Re-enter password" name="rpass">
                  </div>
                  
              </div>
              <div class="row">
                
                <div class="col-md-2">
                    <button type="submit" class="btn btn-block text-primary btn-lg" name="save">Sign up</button>
                </div>


              </div>

            </form>
        </div>
    </div>
    

    
    
    
    
    
    
    
    
    
    <script>
        function myfunction(){
            document.getElementById("cname_input").value = "";
            document.getElementById("cname").innerHTML = "Chamber Name:";
        }
        function myfunction2(){
            document.getElementById("aname_input").value = "";
            document.getElementById("aname").innerHTML = "Advocate Name:";
        }
        function myfunction3(){
            document.getElementById("bname_input").value = "";
            document.getElementById("bname").innerHTML = "BAR Name:";
        }
        function myfunction4(){
            document.getElementById("mem_no_input").value = "";
            document.getElementById("mem_no").innerHTML = "Membership No:";
        }
        function myfunction5(){
            document.getElementById("camberr").value = "";
            document.getElementById("camber").innerHTML = "Chamber Address";
            document.getElementById("camberr").style.height = "80px";
        }
        function myfunction6(){
            document.getElementById("residentiall").value = "";
            document.getElementById("residential").innerHTML = "Residential Address:";
            document.getElementById("residentiall").style.height = "80px";
        }
        function myfunction7(){
            document.getElementById("contactt").value = "+880";
            document.getElementById("contact").innerHTML = "Contact No.:";
        }
        function myfunction8(){
            document.getElementById("emaill").value = "";
            document.getElementById("email").innerHTML = "Email:";
        }
        function myfunction9(){
            document.getElementById("passs").type="password";
            document.getElementById("passs").value = "";
            document.getElementById("pass").innerHTML = "Create a password:";
        }
        function myfunction10(){
            document.getElementById("rpasss").type = "password";
            document.getElementById("rpasss").value = "";
            document.getElementById("rpass").innerHTML = "Re-enter your password:";
        }
    </script>
</body>
</html>