<?php

/*
define ('db_host', '192.168.100.35');
define ('db_user', 'remote_test');
define ('db_pass', 'dientu@%123456');
define ('db1', 'asteriskcdrdb');
define ('db3', 'code');
*/
// declare database
define ('db_host', 'localhost');
define ('db_user', 'remote_test');
define ('db_pass', 'dientu@%123456');
define ('db3', 'code');

// create mysql connection 
$conn = mysqli_connect(db_host, db_user, db_pass, db3);
// check connect db
if(mysqli_connect_error()) {
  echo "Failed to connect to database : ".mysqli_connect_error();
}

$sql = "SELECT idUser, user, pass, fullname FROM user";

$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql);
$result3 = mysqli_query($conn, $sql);

//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Template</title>
  <script src="jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">

  </style>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">

        <div class="row">
          <div class="panel panel-primary">
            <div class="panel-heading">mysqli_num_rows() to get row , use while and mysqli_fetch_assoc() to get every rows</div>
            <div class="panel-body">
              <?php // ################################################################################## MYSQL CODE
                if(mysqli_num_rows($result)>0) {
                  echo "All have ".mysqli_num_rows($result)." rows<br />";
                  while($row = mysqli_fetch_assoc($result)) {   // loop by while each row, and query
                    echo "user : ".$row["user"]."<br />";
                  }
                }
                mysqli_free_result($result);
              ?>
            </div>
        </div> <!-- end row 1 -->

        <div class="panel panel-info">
            <div class="panel-heading">kết hợp mysqli_fetch_array() with while() to get all rows</div>
            <div class="panel-body">
              <?php // ################################################################################## MYSQL CODE
                $result4 = mysqli_query($conn, $sql);
                while($row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC)) {   // loop by while each row, and query
                  echo "user : ".$row4["user"]."<br />";
                }
                mysqli_free_result($result4);
              ?>
            </div>
        </div> <!-- end row 1 -->

        <div class="row">
          <div class="panel panel-success">
            <div class="panel-heading">
              mysqli_fetch_array() with MYSQLI_NUM or MYSQLI_ASSOC or MYSQLI_BOTH
            </div>
            <div class="panel-body">
              <?php  
              echo "Numeric array<br />";
              $row = mysqli_fetch_array($result2, MYSQLI_NUM);
              printf ("%s (%s)\n",$row[0],$row[1]);
              echo "<br /><strong>+ Use foreach : </strong><br />";
              foreach ($row as $key => $value) {
                print "$key = $value\n";
              }
              echo "<br /><strong>+ Use print_r :</strong><br />";
              print_r($row);
              echo "<br /><strong>Associative array</strong></br >";
              $row = mysqli_fetch_array($result3, MYSQLI_ASSOC);
              printf ("%s (%s)\n",$row["idUser"],$row["user"]);

              echo "<br />dùng lại $row = mysqli_fetch_array để nó tiếp tục lấy giá trị hàng thứ 2 và printf nó ra";
              $row = mysqli_fetch_array($result3, MYSQLI_ASSOC);
              printf ("%s (%s)\n",$row["idUser"],$row["user"]); 

              mysqli_free_result($result2);
              mysqli_free_result($result3);             
              ?>
            </div>
            <div class="panel-heading">
              <p>By using the MYSQLI_ASSOC constant this function will behave identically to the mysqli_fetch_assoc(), while MYSQLI_NUM will behave identically to the mysqli_fetch_row() function. The final option MYSQLI_BOTH will create a single array with the attributes of both.</p>
            </div>
          </div>
        </div>

       
      </div><!-- end div col-md-10 -->
      <div class="col-md-1"></div>
  </div><!-- end .container-fluid -->

</body>
</html>