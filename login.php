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

  if (isset($_SESSION["id"])) {
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

  <script type="text/javascript">
    function js_validateLogin() {
      var usr = $("#userName").val();
      var pwd = $("#password").val();
      if(usr=='' || pwd=='') {
        alert("Please fill out the form");
      }
    }
  </script>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div style="height: 100px">
        <?php if($msg!="") { ?>
        <div class="col-md-4 col-md-push-4 alert alert-danger" style="margin-top: 2em">
          <p class="text-center">
            <a style="font-weight: bold; color: red"><?php echo $msg; ?></a>
          </p>
        </div>   
        <?php } ?>
      </div>
    </div>

    <div class="row">
      <!-- <div class="col-md-6 bg-primary"> -->
      <div class="col-md-6 col-md-push-3" style="border: 2px solid #999">
        <h3 class="text-center text-info">User Login Details</h3>

        <form class="form-horizontal" role="form" method="post" action="" onsubmit="return js_validateLogin()">
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
    </div><!-- end row 2 -->        
  </div><!-- end .container-fluid -->

</body>
</html>