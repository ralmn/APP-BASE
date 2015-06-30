<?php
session_start(); // dfs

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Bases | Depussay</title>
    <!-- Logo -->
    <link rel="shortcut icon" type="image/x-icon" href="logo-depussay.jpg" />

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="static/theme/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="static/theme/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="static/theme/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      form{
        text-align: center;
      }


    </style>
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><b>Adresse</b>Bases :</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Choix de la base</p>
        <form action="action.php" method="POST">
            <select name="bases" id="bases">
              <option name="#">=== Les Bases Depussay ===</option>
                       <option name="$alluy">- Alluy</option>
                       <option name="$angerville">- Angerville</option>
                       <option name="$bazainville">- Bazainville</option>
                       <option name="$brionne">- Brionne</option>
                       <option name="$chateaudun">- Chateaudun</option>
                       <option name="$conan">- Conan</option>
                       <option name="$droue">- Droue</option>
                       <option name="$fessanvilliers">- Fessanvilliers</option>
                       <option name="$gauville">- Gauville</option>
                       <option name="$gellainville">- Gellainville</option>
                       <option name="$luzy">- Luzy</option>
                       <option name="$nevers">- Nevers</option>
                       <option name="$nourray">- Nourray</option>
                       <option name="$perroy">- Perroy</option>
                       <option name="$pithiviers">- Pithiviers</option>
                       <option name="$rugles">- Rugles</option>
                       <option name="$sandillion">- Sandillion</option>
                       <option name="$sully-sur-loire">- Sully-sur-Loire</option>
                       <option name="$terminiers">- Terminiers</option>
                       <option name="$thorigne">- Thorigne</option>
                       <option name="$tournoisis">- Tournoisis</option>
                       <option name="$voves">- Voves</option>
                               
            </select>          
          <div class="row">
            <div class="col-xs-8">    
             <!-- <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember-me"> Se souvenir de moi
                </label>
              </div> -->                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Imprimer</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="static/theme/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="static/theme/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="static/theme/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>