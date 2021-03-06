<?php
session_start();

if(!isset($_SESSION["id"])) {
	header("Location:login.php");
}

include 'includes/config.php';
include 'includes/functions.php';

// 28/7 0984399452
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MJN Report</title>
		<script src="jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>

		<script src="js/mjn_abandon.js"></script>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/datepicker.css" rel="stylesheet">
		<style>
			#content h1 {
			  color: #7961AA;
			}
			.selected {
			  border-color: red;
			}
			#position_that_show_process {
				text-align: center;
				color: red;
			}
		</style>
	</head>

	<body>
		
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="brand navbar-brand" href="#">MJN Project</a>
        </div><!-- end navbar-header -->

        <ul class="nav navbar-nav">
          <li class="active"><a href="mjn_abandon.php">Abandon</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expand="false">
              Signed in as <strong><?php echo $_SESSION["user"]; ?></strong> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu navbar-inverse">
              <li><a href="mjn_abandon_settings.php" style="color: white">Settings</a></li>
              <li><a href="logout.php" style="color: white">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container" id="content">
      
      <div class="row text-center">
        <h1>Settings</h1>           
      </div>

      <div class="row">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#nav_changePass" aria-control="nav_changePass" role="tab" data-toggle="tab">Change Password</a></li>
          <?php
            $menu = have_navtab_menu($_SESSION["id"]);
            if($menu[0][0]!="") { 
            $count = count($menu);
            for($row=0; $row<$count; $row++) { ?>
              <li role="presentation"><a href="#<?php echo $menu[$row][3]; ?>" aria-control="<?php echo $menu[$row][3]; ?>" role="tab" data-toggle="tab"><?php echo $menu[$row][4]; ?></a></li>
          <?php }} ?>
        </ul>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="nav_changePass"><?php include 'abandon_settings_changePass.php'; ?></div>
          <?php
            if($menu[0][0]!=""){
            for($row=0; $row<$count; $row++) { ?>             
              <div role="tabpanel" class="tab-pane fade" id="<?php echo $menu[$row][3]; ?>" role="tab" data-toggle="tab"><?php echo $menu[$row][2]; ?></div>
            <?php }} ?>  
        </div>
      </div>

    </div><!-- end .container -->

  </body>
</html>