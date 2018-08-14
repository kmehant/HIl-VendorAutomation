<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js" type="text/javascript"></script>
  <link rel="stylesheet" href="style.css" type="text/css">
  <script> type="text/javascript">
            $(function () {
                $('#date2').datepicker();
            });
        </script>
</head>

<body>

<div id="img">
<img src="https://hil.in/wp-content/uploads/2015/04/hil.png" alt="HIL LIMITED">
</div>
  <?php
  
   if (isset($_POST['submit'])) 
   {
      $db = mysqli_connect('localhost','id6788380_vijay','vijay123','id6788380_loginform');
      $quant = $_POST['quantity'];
      $sql = sprintf("INSERT INTO loginform (item,quantity,specification,location,date) VALUES ('%s','$quant','%s','%s','%s')", mysqli_real_escape_string($db,$_POST['item']),mysqli_real_escape_string($db,$_POST['spec']),mysqli_real_escape_string($db,$_POST['loc']),mysqli_real_escape_string($db,$_POST['date2']));
      mysqli_query($db,$sql);
      mysqli_close($db);
      $alert = "alert alert-success";
     
     printf(" <div class= '$alert'> <strong>Success!</strong> The data has been stored</div>");
   }
   
  ?>
 <br>

    <center><h1> ADMIN FORM </h1></center>
    <form method="post" >
        <div class="form-group ">
          <label for="exampleInputEmail1">Item name:</label>
          <input type="text" class="form-control" name="item" aria-describedby="emailHelp" required>
          <small id="emailHelp" class="form-text text-muted">Please Item name above</small>
        </div>
        <div class="form-group  ">
          <label for="exampleInputCode">Quantity:</label>
          <input type="number" class="form-control" name="quantity" id="exampleInputCode" required>
        </div>
        <div class="form-group  ">
            <label for="exampleInputCode">Specifications:</label>
            <textarea type="text" class="form-control" name="spec" id="exampleInputCode" required></textarea>
          </div>
          <div class="form-group  ">
              <label for="exampleInputCode">Location:</label>
              <input type="text" class="form-control" name="loc" id="exampleInputCode" required>
          </div>
          <div class="form-group  ">
              <label for="exampleInputEmail1">Expected delivery date:</label>
              <input type="text" class="form-control" name="date2" id="date2" required >
             
            </div>
            
     
        <button type="submit" name="submit" class="btn btn-primary">Submit Details</button> 
      
      
        
        <br>
     
  
         
      </form>
      <form>
          <div class ="btn-group">
        <a href="forms.php" class="btn btn-primary">Check Active Forms</a>
        <a href="vendors.php" class="btn btn-primary">Vendor Details</a>
      </div>  
      </form>
   <br>
        <br>
        <br>
</body>
</html>