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

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xls/0.7.6/xls.core.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.3.13/js/tableexport.js"></script>
<script src="https://fastcdn.org/FileSaver.js/1.1.20151003/FileSaver.min.js"></script>

  <link rel="stylesheet" href="style.css" type="text/css">
  <script> type="text/javascript">
            $(function () {
                $('#date2').datepicker();
            });
        </script>
        <div id="img">
<img src="https://hil.in/wp-content/uploads/2015/04/hil.png" alt="HIL LIMITED">
</div>
</head>
<h1>VENDOR DETAILS</h1>
<form> <a href="forms.php" class="btn btn-success">Active Forms</a>
<a href="AdminDetailSubmit.php" class="btn btn-success">Create New Form</a>
</form>
<body>


<form>
 
    <table class="table table-striped table-responsive" id="tableId">
    <thead>
      <tr>
          <th><font color="white">Qtn Recd Date</font></th> 
      <th><font color="white">Name</font></th> 
      <th><font color="white">Firm Name</font></th> 
      <th><font color="white">Contact Number</font></th> 
        <th><font color="white">Cost</font></th>
        <th><font color="white"> HSN Code</font></th>
        <th><font color="white">GST</font></th>
        <th><font color="white">Transport price</font></th>
        <th><font color="white"> Committed Date</font></th>
        <th><font color="white">Item name</font></th> 
        <th><font color="white">Quantity</font></th>
        <th><font color="white"> Specification</font></th>
        <th><font color="white">Date</font></th>
        <th><font color="white">Location</font></th>
        <th><font color="white">Admin Option</font></th>
      </tr>
    </thead>
 <?php
 $db=  mysqli_connect('localhost','id6788380_vijay','vijay123','id6788380_loginform');
     $sql = 'SELECT * FROM vendordetails';
     $result = mysqli_query($db,$sql);

     foreach($result as $row){
      $namev = htmlspecialchars($row['namev']);
      $firm = htmlspecialchars($row['firm']);
      $cont = htmlspecialchars($row['cont']);
      $cost = htmlspecialchars($row['cost']);
      $code = htmlspecialchars($row['code']);
      $gst = htmlspecialchars($row['gst']);
      $trans = htmlspecialchars($row['transcost']);
      $cdate= htmlspecialchars($row['cdate']);
      $time = $row['time'];
         $item = htmlspecialchars($row['itemr']);
         $quant = htmlspecialchars($row['quantityr']);
         $specs = htmlspecialchars($row['specr']);
         $date = htmlspecialchars($row['dater']);
         $loc = htmlspecialchars($row['locr']);

      

   $url = "remove.php?id=%s";
   echo "<tbody>";
   $info = "success";
     echo "<tr class=$info>";
      echo "<td>$time</td>";
        echo "<td>$namev</td>";
        echo "<td>$firm</td>";
        echo "<td>$cont</td>";
        echo "<td>$cost</td>";
        echo "<td>$code</td>";
        echo "<td>$gst</td>";
        echo "<td>$trans</td>";
        echo "<td>$cdate</td>";
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
   <script type="text/javascript">
    function selectElementContents(el) {
        var body = document.body, range, sel;
        if (document.createRange && window.getSelection) {
            range = document.createRange();
            sel = window.getSelection();
            sel.removeAllRanges();
            try {
                range.selectNodeContents(el);
                sel.addRange(range);
            } catch (e) {
                range.selectNode(el);
                sel.addRange(range);
            }
        } else if (body.createTextRange) {
            range = body.createTextRange();
            range.moveToElementText(el);
            range.select();
        }
    }
</script>

  </table>
  <input type="button" value="select table" class="btn btn-success"
   onclick="selectElementContents( document.getElementById('tableId') );">


</body>
</html>