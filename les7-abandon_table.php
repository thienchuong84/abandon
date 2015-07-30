<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Datepicker for Bootstrap</title>
    <script src="jquery/1.11.3/jquery.min.js"></script>
    <link id="bs-css" href="css/bootstrap.min.css" rel="stylesheet">
    <link id="bsdp-css" href="bootstrap-datepicker/css/datepicker3.css" rel="stylesheet">
    <script>
      var page = {bootstrap:3};
      function swap_bs(){
        var bscss = $('#bs-css'),
            bsdpcss = $('#bsdp-css');
        if (page.bootstrap == 3){
          bscss.prop('href', 'bootstrap-datepicker/css/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css');
          bsdpcss.prop('href', 'bootstrap-datepicker/css/datepicker.css');
          page.bootstrap = 2;
          $(page).trigger('change:bootstrap', 2)
        }
        else{
          bscss.prop('href', 'css/bootstrap.min.css');
          bsdpcss.prop('href', 'bootstrap-datepicker/css/datepicker3.css');
          page.bootstrap = 3;
          $(page).trigger('change:bootstrap', 3)
        }
      }
    </script>
    <style>
      body {
        padding-top: 50px;
      }
      #content h1 {
        color: #7961AA;
      }
    </style>
    <link href="bootstrap-datepicker/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="bootstrap-datepicker/docs.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="bootstrap-datepicker/google-code-prettify/prettify.min.js"></script>

    <script src="bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="bootstrap-datepicker/js/locales/bootstrap-datepicker.vi.js" charset="UTF-8"></script>

  </head>

  <body>

  

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand navbar-brand" href="#">MJN</a>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Abandon</a></li>
            <!--
            <li><a href="#" taget="_blank">Read the Docs</a></li>
            <li><a href="#" taget="_blank">GitHub</a></li>
            -->
          </ul>
        </div>
      </div>
    </div>
  <div class="container-fluid" id="content">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10" style="border: 1px dashed #777">
        <div class="row">
            <h1>Abadon System</h1><br /><br /><br />            
            
            <div class="col-md-2"></div>
            <div class="col-md-10">
              <form class="form-inline" style="margin-top: 50px;" method="post" action="#" name="abandon_form" onsubmit="return validateForm()">
                <div class="form-group">
                  <label for="abandon_date">Date</label>
                  <input type="text" class="form-control" id='ntc_abandon_date' name="ntc_abandon_date" placeholder="mm/dd/yyyy">              
                </div>
                <div class="form-group">
                  <label for="callerid">CallerID</label>
                  <input type="text" class="form-control" id="ntc_callerid" name="ntc_callerid" required>
                </div>
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
              </form>
            </div>

            <script type="text/javascript">
                $(function () {
                    //$('#datetimepicker1').datetimepicker();   //default
                    $('#ntc_abandon_date').datepicker();
                });

                function validateForm() {
                    var x = document.forms["abandon_form"]["ntc_callerid"].value;
                    if (x == null || x == "") {
                        alert("CallerID must be filled out");
                        return false;
                    }
                }                
            </script>
        </div>

        <?php
        //check if submit , show result
        if(isset($_POST['submit'])){ 
          if($_POST['ntc_abandon_date'] == "") {
            $d=strtotime("yesterday");
            $abandon_date = date("Y-m-d", $d);
          } else {
            $d=$_POST['ntc_abandon_date'];
            $abandon_date = trim(substr($d,6,4).'-'.substr($d,0,2).'-'.substr($d,3,2));
          }

        ?>
          <div class="col-md-6"></div>
            <div class="col-md-6">
            <p>Have Submit<p>
            <p>Abandon date : <?php echo $abandon_date ; ?></p>
            <p>CallerID : <?php echo $_POST['ntc_callerid']; ?></p>
          </div>


          <div class="row">
            <div class="col-md-12">            
              <div class="table-responsive">
                <table class="table table-hover">
                  <thread>
                    <tr>
                      <th>calldate</th>
                      <th>src</th>
                      <th>dst</th>
                      <th>channel</th>
                      <th>dstchannel</th>
                      <th>lastapp</th>
                      <th>lastdata</th>
                      <th>duration</th>
                      <th>billsec</th>
                      <th>disposition</th>
                    </tr>
                  </thread>
                  <tbody>  
                    <tr>
                      <td>calldate</td>
                      <td>src</td>
                      <td>dst</td>
                      <td>channel</td>
                      <td>dstchannel</td>
                      <td>lastapp</td>
                      <td>lastdata</td>
                      <td>duration</td>
                      <td>billsec</td>
                      <td>disposition</td>
                    </tr>      
                  </tbody>
                </table>
              </div>
            </div>
          </div><!-- end div row table -->
          
        <?php }
        ?>
      </div><!-- end .col-md-8 -->
      <div class="col-md-1"></div>
    </div>


</body>
</html>
