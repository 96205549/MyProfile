<?php
//+header('Location: index.php?tab=info');
//session_status();
include './admin_requete.php';

//session_start();
//die(print_r($_SESSION['user']));
$url = $_SERVER['REQUEST_URI'];
$tabl = explode('/', $url);
$index = $tabl[2];
if ($index == "prod-add.php") {
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
        <!--link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap.css.map" type="text/css"-->
        <!--link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap.min.css" type="text/css"-->
        <!--link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap-theme.css" type="text/css"-->
        <!--link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap-theme.css.map" type="text/css"-->
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
                                            Ressources produits
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
                                            <?php foreach ($data as $val): ?>
                                                <section class="col-sm-8" style="margin-top:15px;">
                                                    <span class="col-md-12">
                                                        <input type="text" name="nom-prod" value="<?php // $val['1'];   ?>" class="form-control" placeholder="libelle produit">
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <input type="text" name="detail" value="<?php //$val['4'];   ?>" class="form-control" placeholder="bref detail">
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <input type="text" name="prix" value="<?php // $val['5'];   ?>" class="form-control" placeholder="prix">
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <select name="categorie" value="<?php // $val['6'];   ?>" class="form-control" >
                                                            <option>Informatique</option>
                                                            <option>Mécanique</option>
                                                            <option>Transit</option>
                                                            <option>Immobilier</option>
                                                        </select>
                                                    </span>

                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <textarea name="description"  class="form-control" placeholder="description produit"><?php // $val['2'];   ?></textarea>
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <button type="submit" name="submitInfo" class="btn btn-primary"> + Cr&eacute;er </button>
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
                                                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Selectionnez l&apos;image</span><span class="fileinput-exists"><i class="fa fa-pencil text-primary"></i></span><input type="file" name="avatar"></span>
                                                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-remove text-danger"></i></a>
                                                                    </div>
                                                                </div>                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            <?php endforeach; ?>
                                        </div>

                                    </form>
                                </div> <!-- /.tab-pane -->

                                <div class="tab-pane fade in <?= ($tab == "prest") ? "active" : " " ?>" id="prestation">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">les Attributs du produit </h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="controller.php" class="form-horizontal">
                                        <div class="col-md-12">
                                            <span  data-toggle="collapse" data-target="#demo1" style="cursor: alias;"><a href="#">Ajouter un attribut</a></span>

                                        </div>
                                        <div id="demo1" class="collapse col-md-12">
                                            <span class="clearfix">&nbsp;</span>
                                            <span  class="col-md-4"><input type="text" class=" form-control" name="nom-attrib" placeholder="nom attribut.."></span>
                                            <span  class="col-md-2"><input type="text" class=" form-control" name="valeur-attrib" placeholder="valeur attribut.."></span>
                                            <span  class="col-md-2">
                                                <select class=" form-control" name="prod-attrib">
                                                    <option>produit</option>
                                                </select>
                                            </span>
                                            <span  class="col-md-3"><input type="submit" name="submitPresta" class="btn btn-primary" value=" + Ajouter"></span> 
                                        </div>
                                        <div class="col-md-12">
                                            <table class=" col-md-12 table-responsive table-striped table-hover table-bordered" style="margin-top: 20px;">
                                                <tr style="height: 30px;" class="table-responsive">
                                                    <td align='center'><b>N°:</b></td>
                                                    <td > <b>Nom attribut</b></td>
                                                    <td > <b>Valeur attribut</b></td>
                                                    <td align='center'><b>Action</b></td>

                                                </tr>
                                                <?php foreach ($data2 as $value): ?>
                                                    <tr style="height: 40px;">
                                                        <td align='center'><?= $value[0]; ?></td>
                                                        <td><?= $value[1]; ?></td>
                                                        <td><?= $value[1]; ?></td>
                                                        <td align='center'><!--a href="#"><i class="fa fa-pencil text-warning text-center"></i></a>&nbsp;--><a href="controller.php?code=prest/<?= $value[0] ?>"><i class="fa fa-remove text-danger"></i></a></td>
                                                    </tr>
                                                <?php endforeach; ?>

                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div> <!-- /.tab-pane -->
                                <div class="tab-pane fade in <?= ($tab == "cv") ? "active" : " " ?>" id="cv">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">les ressources du produits</h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="controller.php" class="form-horizontal" enctype="multipart/form-data">

                                        <div class="portlet-body">
                                            <div class="clearfix">&nbsp</div>
                                            <div class="row">

                                                <div id="champsimage">

                                                    <div class="col-md-4">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail col-md-12" style="height: 150px;">
                                                                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOTAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTkwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9Ijk1IiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE5MHgxNDA8L3RleHQ+PC9zdmc+" type="file" name="avatar" alt="image produit">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                            <div>
                                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Selectionnez l&apos;image</span><span class="fileinput-exists"><i class="fa fa-pencil text-primary"></i></span><input type="file" name="avatar"></span>
                                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-remove text-danger"></i></a>
                                                            </div>
                                                        </div>                     
                                                    </div>

                                                    <div id="tableau_image"></div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div>&nbsp;</div>
                                        <div class="row">
                                            <div class="text-right col-sm-8 m-b-sm">
                                                <button type="button" class="btn btn-success" onclick="addImage()" >
                                                    <i class="fa fa-plus"></i> &nbsp;Nouveau
                                                </button>
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fa fa-check"></i>&nbsp;Enregistrer
                                                </button>
                                            </div>
                                        </div>
                                    </form>


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
