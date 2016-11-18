<html>
    <head>
        <title>Toutes-Installations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../public/img/img-prestation/reseaux.png" />
        <!--link rel="stylesheet" href="../public/css/style.css" type="text/css"-->
        <link rel="stylesheet" href="../public/css/ets.css" type="text/css">
        <link rel="stylesheet" href="../public/css/jasny-bootstrap.css">
        <link rel="stylesheet" href="../public/vendor/font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/font-awesome/css/font-awesome.css.map" type="text/css">
        <!--link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap-theme.css" type="text/css"-->
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap.css" type="text/css">
    </head>
    <body class="connect">
        <div class="container">
            <div class="conteneur-con col-md-12">
                <!--div class="row col-sm-12">
                    <?php //include './menu.php'; ?>
                </div-->
                <form method="post" action="auth.php">
                <div class="col-md-offset-3 col-md-4 ">
                    <table class="table-responsive col-md-12">
                        <tr>
                            <td><!--font color="#fff">Login:</font--></td>
                            <td><input type="text" name="login" placeholder="login" class="form-control" style=" height:45px; border-bottom-width:3px;  border-bottom-color: #CCC;"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><!--font color="#fff"><b>Password:</b></font--></td>
                            <td><input type="password" name="password" placeholder="password" class="form-control" style=" height:45px; border-bottom-width:3px;  border-bottom-color: #CCC;"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><button type="submit" name="conn" class="btn btn-info form-control" style=" height:45px;"><b>connecter</b></button></td>
                        </tr>
                    </table>
                </div>
                </form>
            </div>

        </div>
    </body>
    <script src="../public/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../public/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../public/vendor/ckeditor/ckeditor.js"></script>
    <script src="../public/js/fileinput.js"></script>
    <script src="../public/js/add-dynamic.js"></script> 
</html>