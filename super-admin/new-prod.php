<?php
//+header('Location: index.php?tab=info');
//session_status();
include './admin_requete.php';

//session_start();
//die(print_r($_SESSION['user']));
$url = $_SERVER['REQUEST_URI'];
$tabl = explode('/', $url);
$index = $tabl[2];
if ($index == "new-prod.php") {
    $tab = "info";
} else {
    $val = $_GET['tab'];
    if (empty($val)) {
        $tab = "info";
    } else {
        $tab = $val;
    }
}

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
                        <div class="col-md-3 col-sm-4 layout-sidebar">
                            <div class="nav-layout-sidebar-skip">
                                <strong>Tab Navigation</strong> / <a href="">Nouveau produit</a>
                                / <a href="listes-prod.php">Listes produits</a>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="main-setup">
                                <ul id="myTab" class="nav nav-layout-sidebar nav-stacked">
                                    <li class="modepaie">
                                        <a href="#info" data-toggle="tab" >
                                            Add produits 
                                        </a>
                                    </li>
                                    <li class="modepaie">
                                        <a href="#prestation" data-toggle="tab"  class = "<?= ($tab == "prest") ? "active" : " " ?>"  >
                                            Attributs produits
                                        </a>
                                    </li>
                                    <li class="modepaie">
                                        <a href="#cv" data-toggle="tab">
                                            Images produits
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <!-- phase 2-->

                        <div class="col-md-9 col-sm-8 layout-main">

                            <div id="settings-content" class="tab-content stacked-content">

                                <div class="tab-pane fade in <?= ($tab == "info") ? "active" : " " ?>" id="info">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">Gestions des produits du site </h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="controller.php" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            
                                                <section class="col-sm-8" style="margin-top:15px;">
                                                    <span class="col-md-12">
                                                        <input type="text" name="nom-prod"  class="form-control" placeholder="libelle produit">
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                   <span class="col-md-12">
                                                        <textarea name="detail"  class="form-control" placeholder="bref description du produit"><?php // $val['2'];    ?></textarea>
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <input type="text" name="prix"  class="form-control" placeholder="prix">
                                                    </span>
                                                    <span class="col-md-12">
                                                        <input type="hidden" name="idprod" value="0">
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <select name="categorie" class="form-control" >
                                                            <?php foreach ($dataB as $key => $value) { ?>
                                                                <option value="<?= $value[0]; ?>"><?= $value[1]; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </span>

                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                   
                                                    <span class="col-md-12">
                                                        <button type="submit" name="submitProduit" class="btn btn-primary"> + Cr&eacute;er </button>
                                                    </span>
                                                </section>
                                                <section class="col-sm-4">
                                                    <div>&nbsp;</div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail col-md-12" style="height: 150px;">
                                                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOTAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTkwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9Ijk1IiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE5MHgxNDA8L3RleHQ+PC9zdmc+" type="file" name="avatar" alt="logo">
                                                                    </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                                    <div>
                                                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Selectionnez l&apos;image</span><span class="fileinput-exists"><i class="fa fa-pencil text-primary"></i></span><input type="file" name="img-prod"></span>
                                                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-remove text-danger"></i></a>
                                                                    </div>
                                                                </div>                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            
                                        </div>

                                    </form>
                                </div> <!-- /.tab-pane -->

                                <div class="tab-pane fade in <?= ($tab == "prest") ? "active" : " " ?>" id="prestation">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">les Attributs du produit </h3>
                                    </div> <!-- /.heading-block -->
                                    <div class="portlet-body text-warning">
                                        !Oups les attributs ne peuvent &ecirc;tre cr&eacute; si le produit n&apos;est cr&eacute; veuillez donc cr&eacute;er d&apos; abord le produit
                                    </div>
                                </div> <!-- /.tab-pane -->
                                <div class="tab-pane fade in <?= ($tab == "cv") ? "active" : " " ?>" id="cv">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">les ressources du produits</h3>
                                    </div> <!-- /.heading-block -->

                                    <div class="portlet-body text-warning">
                                        !Oups les ressources ne peuvent &ecirc;tre cr&eacute; si le produit n&apos;est cr&eacute; veuillez donc cr&eacute;er d&apos; abord le produit
                                    </div>
                                </div> <!-- /.tab-pane -->




                            </div>
                        </div>


                        <!-- fin phase 2-->
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
