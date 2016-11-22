<?php
//+header('Location: index.php?tab=info');
//session_status();
include './admin_requete.php';

//session_start();
//die(print_r($_SESSION['user']));
$url = $_SERVER['REQUEST_URI'];
$tabl = explode('/', $url);

?>
<html>
    <head>
        <title>Toutes-Installations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../public/img/img-prestation/reseaux.png" />
        <link rel="stylesheet" href="../public/css/style.css" type="text/css">
        <link rel="stylesheet" href="../public/css/ets.css" type="text/css">
        <link rel="stylesheet" href="../public/css/jasny-bootstrap.css">
        <link rel="stylesheet" href="../public/vendor/font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/font-awesome/css/font-awesome.css.map" type="text/css">
        <!--link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap-theme.css" type="text/css"-->
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap.css" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="conteneur col-md-12">
                <div class="row col-sm-12">
                    <?php include './menu.php'; ?>
                </div>
                <div class="col-md-12">
                    <!-- inclusion du tabs-->
                    <div class="layout layout-main-right layout-stack-sm">
                        <div class="col-md-4 col-sm-4 layout-sidebar">
                            <div class="nav-layout-sidebar-skip">
                                <strong>Listes des Produits</strong> / <a href="new-prod.php">Nouveau produit</a>	
                            </div>
                            <div class="clearfix">&nbsp;</div>
                        </div>

                        <div class="col-md-12 col-sm-18  col-xs-4 layout-main">
                            <div class="col-md-12">
                                <table class=" col-md-12 table-responsive table-striped table-hover table-bordered" style="margin-top: 20px;">
                                    <tr style="height: 30px;" class="table-responsive">

                                        <td><b></b></td>
                                        <td><b>Libelle produit</b></td>
                                        <td><b>Description produit</b></td>
                                        <td><b>Prix produit</b></td>
                                        <td><b>Action</b></td>
                                    </tr>
                                    <?php foreach ($listeProd as $liste) {

                                        ?>
                                        <tr style="height: 50px;">
                                            <td align='center' class="col-md-2"><img src="../public/img/vehicule/<?= $liste['imageProduit']; ?>" width="80" height="50" class="img-responsive thumbnail"></td>
                                            <td class="p col-md-2"><p><?= $liste[1] ?></p></td>
                                            <td class="p col-md-4"><p><?= $liste[2] ?></p></td>
                                            <td class="p col-md-2"><p><?= $liste[3] ?></p></td>
                                            <td align='center' class="col-md-1"><a href="controller.php?Lprod=listpro/<?= $liste[0] ?>"><i class="fa fa-pencil text-warning"></i></a>&nbsp;<a href="controller.php?Delprod=listpro/<?= $liste[0] ?>"><i class="fa fa-remove text-danger"></i></a></td>
                                        </tr>
                                    <?php } ?>

                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- fin inclusion -->
                </div>
            </div>

        </div>
    </body>
    <script src="../public/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../public/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../public/vendor/ckeditor/ckeditor.js"></script>
    <script src="../public/js/fileinput.js"></script>
    <script src="../public/js/add-dynamic.js"></script> 
</html>

