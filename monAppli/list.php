<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <a href="index.html" class="btn btn-success btn-xs pull-right">Ajouter un utilisateur</a>
        <br>
        <br>
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
        <?php
          $bdd = new PDO('mysql:host=localhost;dbname=testigs;charset=utf8', 'root', '1234');
          $reponse = $bdd->query('SELECT * FROM client');

          while ($donnees = $reponse->fetch()){
            echo('<tr><td>'.$donnees['id'].'</td><td>'.$donnees['nom'].'</td><td>'.$donnees['prenom'].'</td><td style="text-align:center"><a href="delete.php?id='.$donnees['id'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td></tr>');
          }
        ?>
          </tbody>
        </table>
      </div>
    </div>

    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
