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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css" type="text/css">
  <script> type="text/javascript">
            $(function () {
                $('#date2').datepicker();
            });
        </script>
</head>
<h1>ACTIVE FORMS</h1>
<div id="img">
<img src="https://hil.in/wp-content/uploads/2015/04/hil.png" alt="HIL LIMITED">
</div>
<form> <a href="AdminDetailSubmit.php" class="btn btn-success">Create New Forms</a>
</form>
<body>


<form>
 
    <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th><font color="white">Item name</font></th> 
        <th><font color="white">Quantity</font></th>
        <th><font color="white"> Specification</font></th>
        <th><font color="white">Date</font></th>
        <th><font color="white">Location</font></th>
        <th><font color="white">Admin Option</font></th>
      </tr>
    </thead>
 <?php
 $db=  mysqli_connect('localhost','','','');
     $sql = 'SELECT * FROM loginform';
     $result = mysqli_query($db,$sql);

     foreach($result as $row){
         
      
         $item = htmlspecialchars($row['item']);
         $quant = htmlspecialchars($row['quantity']);
         $specs = htmlspecialchars($row['specification']);
         $date = htmlspecialchars($row['date']);
         $loc = htmlspecialchars($row['location']);

      

   $url = "delete.php?id=%s";
   echo "<tbody>";
   $info = "success";
     echo "<tr class=$info>";
        echo "<td>$item</td>";
        echo "<td>$quant</td>";
        echo "<td>$specs</td>";
        echo "<td>$date</td>";
        echo "<td>$loc</td>";


        printf ("<td><a href=$url>DELETE</a></td>", htmlspecialchars($row['id']));
     echo "</tr>";
      
    echo "</tbody>";
     }
    mysqli_close($db);
    

    ?>

    
  </table>
    
 

</body>
</html>
