<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include './requete.php'; ?>
<html>
    <head>
        <title>Toutes-Installations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../public/img/img-prestation/reseaux.png" />
        <link rel="stylesheet" href="../public/popup/css/mvpready-admin.css">
        <link rel="stylesheet" href="../public/css/style.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/font-awesome/css/font-awesome.css.map" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap.css.map" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap-theme.css.map" type="text/css">
        <link rel="stylesheet" href="../public/css/mag.css">
        <link rel="stylesheet" href="../public/css/index.css">



    </head>
    <body class="body"> 
        <div class="container">
            <div class="conteneur col-md-12">
                <div row container>
                    <div class="col-md-12">
                        <div class="col-md-3 logo">
                            <img src="../public/img/<?= $Ets[3] ?>" class="img-responsive" width="100%" height="100%">
                        </div>
                        <div class="col-md-9 head-bloc">                          
                            <img src="../public/img/img-prestation/entetenew.png" class="img-responsive col-md-offset-1">                    
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-12">
                        <?php include './menu.php'; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row col-sm-12">
                        <p>
                            <?= $Ets[2] ?>
                        </p>

                    </div>