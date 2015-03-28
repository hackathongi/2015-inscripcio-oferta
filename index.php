<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Inscriure Oferta</title>

    <!-- Angular JS -->
    <script src="js/angular.min.js"></script>
    <script src="js/app.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hackajobs-stylesheet.css" rel="stylesheet">
    <link href="css/hackajobs-stylesheet.min.css" rel="stylesheet">

    <style type="text/css">
      .error {
        <?php 
          if (isset($_GET["e"]) && isset($_GET["user_id"])) {
            echo 'display: block;';
            echo 'color: red;';
          } else {
            echo 'display: none;';
          }
          ?>
      }

      .fberror {
        <?php 
          if (isset($_GET["user_id"])) {
            echo 'display: block;';
            echo 'color: red;';
          } else {
            echo 'display: none;';
          }
          ?>
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<header>
    <div class="container">
        <div class="wally-logo">
            <img src="img/wallyJobsLogoHor.svg" alt="WallyJobs"/>
        </div>
        <div class="clearfix"></div>
    </div>
</header>

    <div class="container" ng-app="hackathonApp" ng-controller="InscriptionController">
      <div class="row">

    <article class="apply-offer">
        <div class="col-xs">

        <h4 class="apply-offer-subtitle">Inscriure's en l'oferta</h4>
        <h2 class="apply-offer-title">{{job.title}}</h2>
          <?php
            $url_fb = "https://apisocial.wallyjobs.com/login/facebook?urlOK=".urlencode("https://applicant.wallyjobs.com/");
          ?>

          <div class="fberror">Abans has de registrar-te</div>
          <div class="error">S'han d'emplenar tots els camps</div>
          <div class="offer-apply" ng-hide="user_id.length">
            <a class="btn btn-primary btn-lg" href="<?php echo $url_fb ?>">Registrar con Facebook</a>
          </div>
          <hr>
          <form enctype="multipart/form-data" method="post" action="form.php" data-toggle="validator" role="form">
            <div class="form-group apply-offer-presentation">
              <label class="control-label" for="apply-offer-presentation">Carta de presentació</label>
              <textarea class="form-control" rows="8" id="description" name="description" placeholder="La teva carta de presentació"></textarea>
            </div>
            <div class="form-group apply-offer-cv">
                <label class="control-label" for="apply-offer-cv">Currículum Vitae</label>
                <input class="form-control" id="userfile" type="file" name="userfile" accept="application/pdf">
            </div>
            <input type="hidden" value="{{user_id}}" id="user_id" name="user_id" />
            <input type="hidden" value="{{job.id}}" id="job_id" name="job_id" />
            <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
            <div class="form-group apply-offer-submit">
                <a onclick="window.history.back();" class="btn btn-link">Cancel·la</a>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Aplica</button>
            </div>
          </form>
        </div>
    </article>
      </div>
    </div>
    <footer>
      <p class="small">©2015 Bla bla bla, ...</p>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
  </body>
</html>