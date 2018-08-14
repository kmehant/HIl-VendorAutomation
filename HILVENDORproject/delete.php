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

</head>

<body>


<?php 
  if(isset($_GET['id'])){
    $name = $_GET['id'];
  $db = mysqli_connect('localhost','id6788380_vijay','vijay123','id6788380_loginform');
  $sql = " DELETE FROM loginform where id=$name ";
  mysqli_query($db,$sql);
  $alert = "alert alert-success";
     
  printf(" <div class= '$alert'> <strong>Success!</strong> The form has been deleted</div>");
  mysqli_close($db);
  }

?>
<center> <a href="forms.php" class="btn btn-success" role="button">Back</a> </center>
 
</body>
</html>