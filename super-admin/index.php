<html>
    <head>
        <title>BANLIEUE-TIC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../public/img/img-prestation/reseaux.png" />
        <link rel="stylesheet" href="../public/css/style.css" type="text/css">
        <link rel="stylesheet" href="../public/css/ets.css" type="text/css">
        <link rel="stylesheet" href="../public/css/jasny-bootstrap.css">
        <link rel="stylesheet" href="../public/vendor/font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/font-awesome/css/font-awesome.css.map" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap.css.map" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="../public/vendor/bootstrap/dist/css/bootstrap-theme.css.map" type="text/css">
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
                                        <a href="#boutik" data-toggle="tab">
                                            ETs Infos 
                                        </a>
                                    </li>
                                    <li class="modepaie">
                                        <a href="#prestation" data-toggle="tab">
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
                                        <a href="#profil" data-toggle="tab">
                                            Profil
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- phase 2-->

                        <div class="col-md-9 col-sm-8 layout-main">

                            <div id="settings-content" class="tab-content stacked-content">

                                <div class="tab-pane fade in active" id="boutik">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">Informations de l&apos; entreprise </h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="" class="form-horizontal">
                                        infos

                                    </form>
                                </div> <!-- /.tab-pane -->

                                <div class="tab-pane fade" id="prestation">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">les prestations </h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="" class="form-horizontal">
                                        mode
                                    </form>
                                </div> <!-- /.tab-pane -->
                                <div class="tab-pane fade" id="cv">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">Mon cv</h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="" class="form-horizontal">
                                        mode
                                    </form>
                                </div> <!-- /.tab-pane -->
                                <div class="tab-pane fade" id="profil">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">Mon profile </h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="" class="form-horizontal">
                                        <div class="col-md-12">
                                            <section class="col-sm-8" style="margin-top:15px;">
                                                <span class="col-md-12">
                                                    <input type="text" name="nom" class="form-control" placeholder="votre nom">
                                                </span>
                                                <span class="col-md-12 clearfix">&nbsp;</span>
                                                <span class="col-md-12">
                                                    <input type="text" name="login" class="form-control" placeholder="login">
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
                                                    <button type="submit" name="submitprofil" class="btn btn-primary">Mettre &agrave; jour</button>
                                                </span>
                                            </section>
                                            <section class="col-sm-4">
                                                <div>&nbsp;</div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-12">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail col-md-12" style="height: 150px;">
                                                                    <img src="../public/img/prof.jpg"  alt="profil">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                                <div>
                                                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Selectionnez l&apos;image</span><span class="fileinput-exists"><i class="fa fa-pencil text-primary"></i></span><input type="file" name="..."></span>
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
                                <div class="tab-pane fade" id="post">

                                    <div class="portlet-header">
                                        <h3 class="portlet-title">Poster un blog </h3>
                                    </div> <!-- /.heading-block -->
                                    <form  method="post" action="" class="form-horizontal">
                                        mode
                                    </form>
                                </div> 
                                <!-- integration du slide-->
                                <div class="tab-pane fade" id="slide">
                                    <div class="portlet-header">
                                        <h3 class="portlet-title">Slides </h3>
                                    </div>
                                    <form  method="post" action="" class="form-horizontal">
                                        <div class="col-md-12">
                                            <span  data-toggle="collapse" data-target="#demo2" style="cursor: alias;"><a href="#">Ajouter un slide</a></span>

                                        </div>
                                        <div id="demo2" class="collapse col-md-12">
                                            <span class="clearfix">&nbsp;</span>
                                            <span  class="col-md-8"><input type="file" class=" form-control fileinput"></span>
                                            <span  class="col-md-3"><input type="submit" class="btn btn-default" value="Ajouter"></span> 
                                        </div>
                                        <div class="col-md-12">
                                            <table class=" col-md-12 table-responsive table-striped table-hover table-bordered" style="margin-top: 20px;">
                                                <tr style="height: 30px;" class="table-responsive">
                                                    <td></td>
                                                    <td>Nom de l'image</td>
                                                    <td>Chemin</td>
                                                    <td>Taille</td>
                                                    <td>Modifier</td>
                                                    <td>Supprimer</td>
                                                </tr>
                                                <tr style="height: 40px;">
                                                    <td align='center'><img src="../public/img/aaron.jpg" width="80" height="50" class="img-responsive thumbnail"></td>
                                                    <td>gloire.jpg</td>
                                                    <td>/Chemin/image/</td>
                                                    <td>198 k0</td>
                                                    <td align='center'><a href="#"><i class="fa fa-pencil text-warning text-center"></i></a></td>
                                                    <td align='center'><a href="#"><i class="fa fa-remove text-danger"></i></a></td>
                                                </tr>
                                                <tr style="height: 40px;">
                                                    <td align='center'><img src="../public/img/prof.jpg" width="80" height="50" class="img-responsive thumbnail"></td>
                                                    <td>gloire.jpg</td>
                                                    <td>/Chemin/image/</td>
                                                    <td>198 k0</td>
                                                    <td align='center'><a href="#"><i class="fa fa-pencil text-warning text-center"></i></a></td>
                                                    <td align='center'><a href="#"><i class="fa fa-remove text-danger"></i></a></td>
                                                </tr>
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
    <script src="../public/js/fileinput.js"></script>
</html>