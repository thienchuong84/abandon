<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Template</title>
  <script src="jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/datepicker.css" rel="stylesheet">
  <style type="text/css">

  </style>
</head>
<body>

  <nav class="navbar navbar-inverse navbar-static-top">
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
            Signed in as <strong><?php echo "admin"; ?></strong> <span class="caret"></span>
          </a>
          <ul class="dropdown-menu navbar-inverse">
            <li><a href="mjn_abandon_setting_test.php.php" style="color: white">Settings</a></li>
            <li><a href="logout_unset.php" style="color: white">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid" id="content">
    <div class="row">
      <div class="col-md-1"></div>
      <!-- <div class="col-md-10" style="border: 1px dashed #777"> -->
      <div class="col-md-10">
        <div class="row">
            <h1>Abandon System</h1>           
        </div>
        
        <div class"row">    
            <div class="col-md-1"></div>
            <div class="col-md-10">
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
            </div>

            <script type="text/javascript">
                $(function () {
                    $('#ntc_abandon_date').datepicker();
                });                             
            </script>
        </div>
        <div class="row" id="position_that_show_process"></div>
        <div class="row" id="position_that_you_show"></div>
        
       </div><!-- end .col-md-10 -->
      

    </div>     

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="row">

        </div> <!-- end row 1 -->

        <div class="row">
          <div class="col-md-3"></div>

          <div class="col-md-6">

          </div>

          <div class="col-md-3"></div>
        </div><!-- end row 2 -->        
      </div><!-- end div col-md-10 -->
      <div class="col-md-1"></div>
  </div><!-- end .container-fluid -->

</body>
</html>