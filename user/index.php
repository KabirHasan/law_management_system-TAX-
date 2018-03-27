<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="bootstrap/style.css">
  <link rel="stylesheet" href="bootstrap/myboot.css">
  <link rel="stylesheet" href="bootstrap/myboot2.css">
  <script src="jquery1.js"></script>
  <script src="jqeury2.js"></script>
    <meta charset="UTF-8">
    <title>Document</title>
  <style>
      #qq{
          
      }
    </style>
</head>
<body style="background-image: url('bg.jpg'); background-attachment: fixed;
    background-position: center; background-size: cover; background-repeat: no-repeat">
    
    <div class="container" style="margin-top:50px;">

        <form action="process/loginprocess.php" method="post">
          <div class="row">
               <div class="col-md-4"></div> 
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="email" id="qq" style="font-size: 25px;color: white;">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                
          </div>
          <div class="row">
             <div class="col-md-4"></div> 
              <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="pwd" style="font-size: 25px;color: white;">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pass">
              </div>
                            
          </div>
          <div class="row">
             <div class="col-md-4"></div> 
              <div class="col-md-4"></div>
              <div class="checkbox col-md-2">
                <label style="color:white;"><input type="checkbox"> Remember me</label>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-2"><button class="btn btn-block btn-primary" type="submit" name="save" style="font-size: 25px;color: white;">Sign In</button></div>
              
          </div>
          <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4"></div>
              <div class="col-md-4"><a class="" href="signupform.php" style="font-size: 25px;color: white;">Register for Account</a></div>
          </div>

          
        </form>
        
    </div>
</body>
</html>