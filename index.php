<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>

    <!-- Angular JS -->
    <script src="js/angular.min.js"></script>
    <script src="js/app.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container" ng-app="hackathonApp" ng-controller="InscriptionController">
      <div class="row">
        <div class="col-xs">
          <h2>{{job.title}}</h2>
          <?php
          $url_fb = "https://apisocial.wallyjobs.com/login/facebook?urlOK=".urlencode("http://localhost/2015-inscripcio2/dist/");
          ?>

          <div class="offer-apply">
            <a class="btn btn-primary btn-lg" href="<?php echo $url_fb ?>">Apply</a>
          </div>

          <form enctype="multipart/form-data" method="post" action="form.php" data-toggle="validator" role="form">
            <br>
              <textarea class="form-control" rows="5" id="description" name="description" placeholder="Desar carta de presentació"></textarea>
            <br>
            Currículum vitae:<br>
            <input type="hidden" value="{{job.owner.id}}" id="user_id" name="user_id" />
            <input type="hidden" value="{{job.id}}" id="job_id" name="job_id" />
            <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
            <input type="file" id="userfile" name="userfile" accept="application/pdf">
            <br>
            <br>
            <input type="submit" name="submit" id="submit" value="Inscriure'm">
          </form>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
  </body>
</html>