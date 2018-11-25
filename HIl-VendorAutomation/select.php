<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vendor form</title>
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
<a href="https://kmehant.000webhostapp.com/" class="btn btn-info sel">Back</a>
<body>
<form class="submit">
<table class="table table-info">
<?php 
  if(isset($_GET['id'])){
    $name = $_GET['id'];
    $color = "white";
    $db = mysqli_connect('localhost','id6788380_vijay','vijay123','id6788380_loginform');
  
    $query = "SELECT * FROM loginform WHERE id=$name ";
    $result = mysqli_query($db,$query);
    if (!$result) {
      printf("Error: %s\n", mysqli_error($db));
      exit();
     }
      
     if (mysqli_num_rows($result) != 0) {
      
    
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     echo "<h4><font color=$color>Success! Please check below</font></h4>";
     echo "<h2><font color=$color>Details</font></h2>";
     $prod = 'item';
     $quantity = 'quantity';
     $specs = 'specification';
     $date = 'date';
     $location = 'location';
     

     echo "<tbody>";
     $info = "info";
       echo "<tr class=$info>";
          echo "<td>Item</td>";
          echo "<td>$row[$prod]</td>";
          
       echo "</tr>";
       echo "<tr class=$info>";
          echo "<td>Quantity</td>";
          echo "<td>$row[$quantity]</td>";
          
       echo "</tr>";
       echo "<tr class=$info>";
          echo "<td>Specifications</td>";
          echo "<td>$row[$specs]</td>";
          
       echo "</tr>";
       echo "<tr class=$info>";
          echo "<td>Delivery date</td>";
          echo "<td>$row[$date]</td>";
          
       echo "</tr>";
       echo "<tr class=$info>";
          echo "<td>Location</td>";
          echo "<td>$row[$location]</td>";
          
       echo "</tr>";
        
      echo "</tbody>";
      
      if(isset($_POST['submit']))
          { 

      
            $cat = $_POST['price'];
            $code = $_POST['code'];
            $gst = $_POST['gst'];
            $cd = $_POST['cd'];
            $tranc = $_POST['tc'];
            $cont = $_POST['cont'];
            $time = date("d/m/Y");
            
     $sqll = sprintf("INSERT INTO vendordetails (time,namev,firm,cont, cost, code, gst, transcost, cdate, itemr, quantityr, specr, dater, locr) VALUES ('$time' ,'%s' ,'%s','$cont','$cat' , '$code','$gst','$tranc','$cd','%s', '%s' , '%s' , '%s' , '%s')", mysqli_real_escape_string($db,$_POST['namev']),mysqli_real_escape_string($db,$_POST['firm']),mysqli_real_escape_string($db,$row['item']),mysqli_real_escape_string($db,$row['quantity']),mysqli_real_escape_string($db,$row['specification']), mysqli_real_escape_string($db,$row['date']),mysqli_real_escape_string($db,$row['location']));
            
            mysqli_query($db,$sqll);
            $alert = "alert alert-success";
           printf(" <div class= '$alert'> <strong>Thank you!</strong> The data has been sent</div>");
          


          }
      
     mysqli_close($db);
     
  }
  }

?>
</table>
</form>
    <form method="post">
    <div class="form-group">
         
          <label for="exampleInputEmail1">Name:</label>
          <input type="text" class="form-control" name="namev"  aria-describedby="emailHelp" required>
        
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Firm Name:</label>
          <input type="text" class="form-control" name="firm"  aria-describedby="emailHelp" required>
        
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Contact Number:</label>
          <input type="tel" class="form-control" name="cont" 
           pattern="[6-9]{3}[0-9]{3}[0-9]{4}" aria-describedby="emailHelp" required>
        
        </div>
        <div class="form-group ">
          <label for="exampleInputEmail1">Cost per item/ piece:</label>
          <input type="number" class="form-control" name="price" step="0.001" aria-describedby="emailHelp" required>
          <small><p>Enter cost per item in INR</p></small>
        </div>
        <div class="form-group  ">
          <label for="exampleInputCode">HSN/SAC code:</label>
          <input type="number" class="form-control" name="code" id="exampleInputCode" required >
        </div>
        <div class="form-group  ">
            <label for="exampleInputCode">GST %:</label>
            <input type="number" class="form-control" name="gst"   id="exampleInputCode" required>
          </div>
          <div class="form-group  ">
              <label for="exampleInputCode">Transport cost:</label>
              <input type="number" class="form-control" name="tc" id="exampleInputCode" required>
          </div>
          <div class="form-group  ">
              <label for="exampleInputEmail1">Committed date:</label>
              <input type="text" class="form-control"  name= "cd" id="date2" required>
              <small><p>Please give your committed date for delivery.</p></small>
              <div class="submit"><input type="submit" name="submit" class="btn btn-primary" value ="Submit form"></div>
            
            </div>
        
<br>
<br>
<br>
<br>
      

      </form>

</body>
</html>