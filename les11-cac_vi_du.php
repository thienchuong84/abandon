<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Template</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style type="text/css">

  </style>
</head>
<body>

  <div class="container-fluid">
    
    <?php // bootstrap with navtab ?>
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#page_1" aria-controls="page_1" role="tab" data-toggle="tab">array</a></li>
      <li role="presentation"><a href="#page_2" aria-controls="page_2" role="tab" data-toggle="tab">mysqli</a></li>
    </ul>

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="page_1"><?php include 'les11-array.php'; ?></div>
      <div role="tabpanel" class="tab-pane" id="page_2"><?php include 'les11-mysqli.php'; ?></div>
    </div>
    





  </div><!-- end .container-fluid -->

</body>
</html>