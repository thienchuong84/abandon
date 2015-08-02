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


  <ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#">Nav Tabs</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
  </ul> <br /><br />


  <ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="#">Nav Pills</a></li>
    <li role="presentation"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
  </ul> <br /><br />

  <!-- add .disabled to disabled tab -->
  <ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="#">Nav Pills Disabled</a></li>
    <li role="presentation"><a href="#">Home</a></li>
    <li role="presentation" class="disabled"><a href="#">Profile</a></li>
  </ul> <br /><br />

<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 col-md-push-1">
      <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="#">Nav Pills with Dropdown</a></li>
        <li role="presentation"><a href="#">Home</a></li>
        <li role="presentation" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            Dropdown <span class="caret"></span> <!-- span caret make mui ten xo xuong -->
          </a>
          <ul class="dropdown-menu">
            <li role="presentation"><a href="#">menu 1</a></li>
            <li role="presentation"><a href="#">Action menu 2</a></li>
          </ul>
        </li>
      </ul> <br />
      <p>Pills with dropdown : at "Dropdown" is li tag, so we need to add ul tag with some li tag to create menu</p> <br /><br />
    </div>
  </div>




  <div class="container-fluid">
    <div class="row">
      <dic class="col-md-10 col-md-push-1">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div> <!-- end row 1 -->

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