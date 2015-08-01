<?php
  session_start();

  include 'includes/functions.php';
  //include 'includes/config.php';

  $msg = "";

  // check if have $_POST , query db and return to $msg
  if(count($_POST) > 0) {
    $ntc_user = test_input($_POST["userName"]);
    $ntc_pass = test_input($_POST["password"]);

    $conn = mysqli_connect(db_host, db_user, db_pass, db3);
    if(mysqli_connect_error()){
      echo "Failed to connect to db code : ".$mysqi_connect_error();
    }
    //$sql = "SELECT idUser, user, pass, fullname FROM user WHERE user='".$ntc_user."' and pass='".$ntc_pass."' limit 1";
    $sql = "SELECT idUser, user, pass, fullname FROM user WHERE user='".$ntc_user."' and pass='".$ntc_pass."' limit 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo $row["user"];

    if(is_array($row)) {
        $_SESSION["id"] = $row["idUser"];
        $_SESSION["user"] = $row["user"];
        //$msg = "Welcome to ".$_SESSION["user"]; //test
    } else {
        $msg = "Invalid Username or Password";
    }

    mysqli_free_result($result);
    mysqli_close($conn);
  }

  if (isset($_SESSION[id])) {
    header("Location:mjn_abandon.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Login Details</title>
  <script src="jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
  .row-centered {
    text-align: center;
    padding: 2em;
    font-weight: bold;
    color: red;
    border: 1px dashed #999;
  }
  </style>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="row">
          <p><h3 class="text-center text-danger" style="height: 30px"><?php if(isset($msg)) {echo $msg; } ?></h3></p>
        </div> <!-- end row 1 -->

        <div class="row">
          <div class="col-md-3"></div>

          <!-- <div class="col-md-6 bg-primary"> -->
          <div class="col-md-6" style="border: 2px solid #999">
            <h3 class="text-center text-info">User Login Details</h3>

            <form class="form-horizontal" role="form" method="post" action="">
              <div class="form-group">
                <label class="control-label col-sm-2" for="userName">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="userName" placeholder="Enter Username" name="userName" />
                </div>
              </div><!-- end form-group 1 -->
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" />
                </div>
              </div><!-- end form-group 2 -->
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" name="submit" class="btn btn-default" value="Submit" >Submit</button>
                </div>
              </div><!-- end form-group 3 -->
            </form><!-- end form -->
          </div>

          <div class="col-md-3"></div>
        </div><!-- end row 2 -->        
      </div><!-- end div col-md-10 -->
      <div class="col-md-1"></div>
  </div><!-- end .container-fluid -->

</body>
</html>