<?php
  session_start();
  if(!isset($_SESSION["id"])) {
    header("Location:login_test_alert.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Settings</title>
  <script src="../jquery/1.11.3/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">

  </style>
</head>
<body>

  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a class="brand navbar-brand" href="#">MJN Project</a>
      </div><!-- end .navbar-header -->
      <div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Abandon</a></li>
          <!-- <li><a href="#" taget="_blank">Welcome admin</a></li> -->
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" taget="_blank" role="button" aria-haspopup="true" aria-expanded="false">
              Signed in as <strong><?php echo $_SESSION["user"] ?></strong><span class="caret"> <!-- Indicates dropdown functionality (will reverse automatically in dropup menus) -->
            </a>
            <ul class="dropdown-menu navbar-inverse">
              <li><a href="mjn_abandon_setting_test.php" taget="_blank" style="color: white">Setting</a></li>
              <li><a href="logout_unset.php" taget="_blank" style="color: white">Logout</a></li>
            </ul>
        </ul>
      </div></div></div>
    </div><!-- end .navbar .container -->
  </nav>

  <div class="container-fluid">
    <div class="row">

    </div>
    <div class="row">
      <div class="col-md-10 col-md-push-1" style="border: 1px dashed #999">
        
        <div class="row">
          <dic class="col-md-10 col-md-push-1">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div> <!-- end row 1 -->

        <div class="row">
          <div class="col-md-3"></div>

          <div class="col-md-6">

          </div>

          <div class="col-md-3"></div>
        </div><!-- end row 2 -->
        <?php //include 'setting_change_pass_test.html'; ?>        
      </div><!-- end div col-md-10 -->
  </div><!-- end .container-fluid -->

</body>
</html>