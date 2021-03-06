<?php
session_start();

if(!isset($_SESSION["id"])) {
	header("Location:login.php");
}

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
		
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="brand navbar-brand" href="#">MJN Project</a>
        </div><!-- end navbar-header -->

        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Abandon</a></li>
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
        <h1>Abandon System</h1>           
      </div>
          
      <div class"row">
        <div class="col-md-9 col-md-push-3">
          <form class="form-inline" style="margin-top: 50px; margin-bottom: 2em;" method="post" action="#" name="abandon_form" >
            <div class="form-group">
              <label for="abandon_date">Date</label>
              <input type="text" class="form-control" id='ntc_abandon_date' name="ntc_abandon_date" placeholder="mm/dd/yyyy">              
            </div>
            <div class="form-group">
              <label for="callerid">CallerID</label>
              <input type="text" class="form-control" id="ntc_callerid" name="ntc_callerid">
            </div>
            <button type="button" name="submit" class="btn btn-default" id="submit" onclick="ajaxSubmit()">Submit</button>
          </form>
        </div><!-- end .col .form -->

        <script type="text/javascript">
            $(function () {
                $('#ntc_abandon_date').datepicker();
            });                             
        </script>
        <div class="row">
          <div class="col-md-4 col-md-push-4" id="position_that_show_process"></div>
        </div>
      </div>
      <div class="clearfix visible-md"></div>
      
      <div class="row text-center" id="position_that_you_show"></div>
    </div><!-- end .container -->

  </body>
</html>
