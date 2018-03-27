<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="myboot.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  

  
  
   <div class="container">
        <form action="#">
          <div class="row">
              <div class="form-group col-md-6">
                <label>UTIN/TIN NO:</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <label>Circle:</label>
                <input type="text" class="form-control">
              </div>

          </div>
          <div class="row">
              <div class="form-group col-md-6">
                <label>Taxes Zone:</label>
                <input type="text" class="form-control">
              </div> 
              <div class="form-group col-md-6">
                <label>Assesment Year:</label>
                <select class="form-control">
                    <option>2018-19</option>
                    <option>2019-20</option>
                    <option>2020-21</option>
                </select>
              </div>     
          </div>
          <div class="row">
              <div class="form-group col-md-6">
                <label>Net wealth of Assessee:</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <label>Total income shown in return:</label>
                <input type="text" class="form-control">
              </div>   
          </div>

          <div class="row">
              <div class="form-group col-md-6">
                <label>Tax paid:</label>
                <input type="text" class="form-control">
              </div>

              <div class="form-group col-md-6">
                <label>Date of Receipt:</label>
                <input type="date" class="form-control">
              </div>
          </div>
          <div class="row">
              <div class="form-group col-md-6">
                <label>Serial NO. (Register):</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <label>Nature of Return:</label>
                <select class="form-control">
                    <option>Self</option>
                    <option>Universal Self</option>
                    <option>Normal</option>
                </select>
              </div>
          </div>
          <div class="row">
              <div class="form-group col-md-6">
                <label>Submitted of last date:</label>
                <input type="date" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <label>Next Date:</label>
                <input type="date" class="form-control">
              </div>
          </div>

          <button type="submit" class="btn btn-default btn-primary btn-lg">Submit</button>
         
        </form>

    </div>
    

    
</body>
</html>