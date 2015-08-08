<!-- Create August 07, 2015 : used in mjn.php, mjn_abandon.php -->

<nav class="navbar navbar-inverse navbar-static-top">

  <div class="container">

    <div class="navbar-header">
      <a class="brand navbar-brand" href="mjn.php">MJN Project</a>
    </div><!-- end navbar-header -->


    <?php // if isset($_SESSION['navbar']) -> Load navbar for user
    //if(isset($_SESSION['navbar']) && $_SESSION['navbar'][0][0]!="") { 
    if(isset($_SESSION['navbar'])) { ?>
    <ul class="nav navbar-nav">      
      <li class="active"><a href="mjn_abandon.php">Abandon</a></li>
    </ul>
    <?php } ?>



    <?php // if isset($_SESSION) -> show "Sign in as USER" , else show "Sign in" link to Login page
    if(isset($_SESSION['id'])) {   ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a><?php echo date("l").", ".date("F")." ".date("d").", ".date("Y"); ?></a></li>        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expand="false">
            Signed in as <strong><?php echo $_SESSION["user"]; ?></strong> <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="mjn_abandon_settings.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    <?php } 
    else { ?>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="login.php" class="btn btn-link" role="button"><span class="glyphicon glyphicon-user" aria-hidden="true"> Login</a></li>
        <li><a><?php echo date("l").", ".date("F")." ".date("d").", ".date("Y"); ?></a></li>
      </ul>-->    
      <ul class="nav navbar-nav navbar-right">        
        <li><a><?php echo date("l").", ".date("F")." ".date("d").", ".date("Y"); ?></a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"> Login</a></li>
      </ul>
    <?php } ?>

  </div>

</nav>