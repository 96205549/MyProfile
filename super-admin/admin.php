<?php
//+header('Location: index.php?tab=info');
//session_status();
include './admin_requete.php';

//session_start();
//die(print_r($_SESSION['user']));
$url = $_SERVER['REQUEST_URI'];
$tabl = explode('/', $url);
$index = $tabl[3];
if ($index == "admin.php") {
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
                                <strong>Tab Navigation</strong> / <a href="#settings-content">Skip to Content</a>	
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="main-setup">
                                <ul id="myTab" class="nav nav-layout-sidebar nav-stacked">
                                    <li class="modepaie">
                                        <a href="#info" data-toggle="tab" >
                                            ETs Infos 
                                        </a>
                                    </li>
                                    <li class="modepaie">
                                        <a href="#prestation" data-toggle="tab"  class = "<?= ($tab == "prest") ? "active" : " " ?>"  >
                                            Nos Prestations
                                        </a>
                                    </li>
                                    <li class="modepaie">
                                        <a href="#cv" data-toggle="tab">
                                            Mon CV
                                        </a>
                                    </li>
                                    <li class="modepaie">
                                        <a href="#post" data-toggle="tab">
                                            Poster un travail
                                        </a>
                                    </li>
                                    <li class="modepaie">
                                        <a href="#slide" data-toggle="tab">
                                            Update slide
                                        </a>
                                    </li>
                                    <li class="modepaie">
                                        <a href="#profil" data-toggle="tab" <?= ($tab == "profil") ? "active" : " " ?>>
                                            Profil
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
                                        <h3 class="portlet-title">Informations de l&apos; entreprise </h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="controller.php" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <?php foreach ($data as $val): ?>
                                                <section class="col-sm-8" style="margin-top:15px;">
                                                    <span class="col-md-12">
                                                        <input type="text" name="nomEts" value="<?= $val['1']; ?>" class="form-control" placeholder="nom_ETs">
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <input type="text" name="addresse" value="<?= $val['4']; ?>" class="form-control" placeholder="addresse">
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <input type="text" name="bp" value="<?= $val['5']; ?>" class="form-control" placeholder="Boîte postale">
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <input type="text" name="contact" value="<?= $val['6']; ?>" class="form-control" placeholder="contact">
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <textarea name="slogan"  class="form-control ckeditor" placeholder="Slogan" rows="5"><?= $val['2']; ?></textarea>
                                                    </span>
                                                    <span class="col-md-12 clearfix">&nbsp;</span>
                                                    <span class="col-md-12">
                                                        <button type="submit" name="submitInfo" class="btn btn-primary">Mettre &agrave; jour</button>
                                                    </span>
                                                </section>
                                                <section class="col-sm-4">
                                                    <div>&nbsp;</div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail col-md-12" style="height: 150px;">
                                                                        <img src="../public/img/<?= $val['3']; ?>" type="file" name="avatar" alt="logo">
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
                                        <h3 class="portlet-title">les prestations </h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="controller.php" class="form-horizontal">
                                        <div class="col-md-12">
                                            <span  data-toggle="collapse" data-target="#demo1" style="cursor: alias;"><a href="#">Ajouter une prestation</a></span>

                                        </div>
                                        <div id="demo1" class="collapse col-md-12">
                                            <span class="clearfix">&nbsp;</span>
                                            <span  class="col-md-8"><input type="text" class=" form-control" name="presta" placeholder="new service.."></span>
                                            <span  class="col-md-3"><input type="submit" name="submitPresta" class="btn btn-default" value="Ajouter"></span> 
                                        </div>
                                        <div class="col-md-12">
                                            <table class=" col-md-12 table-responsive table-striped table-hover table-bordered" style="margin-top: 20px;">
                                                <tr style="height: 30px;" class="table-responsive">
                                                    <td align='center'><b>N°:</b></td>
                                                    <td > <b>Nom Prestation</b></td>
                                                    <td align='center'><b>Action</b></td>

                                                </tr>
                                                <?php foreach ($data2 as $value): ?>
                                                    <tr style="height: 40px;">
                                                        <td align='center'><?= $value[0]; ?></td>
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
                                        <h3 class="portlet-title">Mon cv</h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="controller.php" class="form-horizontal" enctype="multipart/form-data">
                                        <?php //foreach ($datacv as $value): ?>
                                            <div class="col-md-12" style="margin-top: 30px; padding: 4px; ">
                                                <label><?= (sizeof($datacv)>0) ? $datacv[2]:" " ?></label><br>
                                                <span><input type="file" name="cvfile" class="form-control"></span><br>
                                                <span><textarea class="form-control ckeditor" rows="8" name="cvtexte"><?= (sizeof($datacv)>0) ? $datacv[1]:" " ?></textarea></span><br>
                                                <span><button class="btn btn-primary" name="postcv">Poster</button> &nbsp; <button class="btn btn-default">Anuler</button></span><br>
                                            </div>
                                        <?php //endforeach; ?>
                                    </form>
                                </div> <!-- /.tab-pane -->
                                <div class="tab-pane fade in <?= ($tab == "profil") ? "active" : " " ?>" id="profil">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">Mon profile </h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="controller.php" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <section class="col-sm-8" style="margin-top:15px;">
                                                <span class="col-md-12">
                                                    <input type="text" name="nom" value="<?= $profil['nom'] ?>" class="form-control" placeholder="votre nom">
                                                </span>
                                                <span class="col-md-12 clearfix">&nbsp;</span>
                                                <span class="col-md-12">
                                                    <input type="text" name="profession" value="<?= $profil[2] ?>" class="form-control" placeholder="profession">
                                                </span>
                                                <span class="col-md-12 clearfix">&nbsp;</span>
                                                <span class="col-md-12">
                                                    <input type="text" name="email" value="<?= $profil[3] ?>" class="form-control" placeholder="email">
                                                </span>
                                                <span class="col-md-12 clearfix">&nbsp;</span>
                                                <span class="col-md-12">
                                                    <input type="text" name="contact" value="<?= $profil[4] ?>" class="form-control" placeholder="contact">
                                                </span>
                                                <span class="col-md-12 clearfix">&nbsp;</span>
                                                <span class="col-md-12">
                                                    <input type="text" name="login" value="<?= $profil[5] ?>" class="form-control" placeholder="login">
                                                </span>
                                                <span class="col-md-12 clearfix">&nbsp;</span>
                                                <span class="col-md-12">
                                                    <input type="password" name="lastpass" class="form-control" placeholder="last pass">
                                                </span>
                                                <span class="col-md-12 clearfix">&nbsp;</span>
                                                <span class="col-md-12">
                                                    <input type="password" name="newpass" class="form-control" placeholder="new pass">
                                                </span>
                                                <span class="col-md-12 clearfix">&nbsp;</span>
                                                <span class="col-md-12">
                                                    <input type="password" name="confirm" class="form-control" placeholder="confirm pass">
                                                </span>
                                                <span class="col-md-12 clearfix">&nbsp;</span>
                                                <span class="col-md-12">
                                                    <button type="submit" name="submitProfil" class="btn btn-primary">Mettre &agrave; jour</button>
                                                </span>
                                            </section>
                                            <section class="col-sm-4">
                                                <div>&nbsp;</div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-12">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail col-md-12" style="height: 150px;">
                                                                    <img src="../public/img/<?= $profil['profile'] ?>"  alt="profil">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                                <div>
                                                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Selectionnez l&apos;image</span><span class="fileinput-exists"><i class="fa fa-pencil text-primary"></i></span><input type="file" name="profil"></span>
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
                                <div class="tab-pane fade in <?= ($tab == "blog") ? "active" : " " ?>" id="post">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">Poster un blog </h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="controller.php" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="col-md-12" style="margin-top: 30px; padding: 4px;">
                                            <label></label>
                                            <span><input type="file" class="form-control" name="postfile"></span><br>
                                            <span><textarea class="form-control ckeditor" id="editor1" name="comment_post" rows="8"></textarea></span><br>
                                            <span><button class="btn btn-primary" name="postwork">Poster</button> &nbsp; <button class="btn btn-default">Anuler</button></span><br>

                                        </div>
                                    </form>
                                </div> 
                                <!-- integration du slide-->
                                <div class="tab-pane fade in <?= ($tab == "slide") ? "active" : " " ?>" id="slide">
                                    <div class="portlet-header">
                                        <h3 class="portlet-title">Slides </h3>
                                    </div>
                                    <form  method="post" action="controller.php" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <span  data-toggle="collapse" data-target="#demo2" style="cursor: alias;"><a href="#">Ajouter un slide</a></span>

                                        </div>
                                        <div id="demo2" class="collapse col-md-12">
                                            <span class="clearfix">&nbsp;</span>
                                            <span  class="col-md-8"><input type="file" class=" form-control fileinput" name="slidefile"></span>
                                            <span  class="col-md-3"><input type="submit" class="btn btn-default" name="submitSlide" value="Ajouter"></span> 
                                        </div>
                                        <div class="col-md-12">
                                            <table class=" col-md-12 table-responsive table-striped table-hover table-bordered" style="margin-top: 20px;">
                                                <tr style="height: 30px;" class="table-responsive">
                                                    <td></td>
                                                    <td><b>Nom de l'image</b></td>
                                                    <td><b>Chemin</b></td>
                                                    <td><b>Taille</b></td>
                                                    <!--td>Modifier</td-->
                                                    <td><b>Supprimer</b></td>
                                                </tr>
                                                <?php foreach ($slides as $slide) {

                                                    ?>
                                                    <tr style="height: 40px;">
                                                        <td align='center'><img src="../public/img/<?= $slide[1] ?>" width="80" height="50" class="img-responsive thumbnail"></td>
                                                        <td><?= $slide[1] ?></td>
                                                        <td><?= $slide[2] ?></td>
                                                        <td>198 k0</td>
                                                        <!--td align='center'><a href="#"><i class="fa fa-pencil text-warning text-center"></i></a></td-->
                                                        <td align='center'><a href="controller.php?code=slide/<?= $slide[0] ?>"><i class="fa fa-remove text-danger"></i></a></td>
                                                    </tr>
                                                <?php } ?>

                                                <tbody>

                                                </tbody>
                                            </table>
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
</html>