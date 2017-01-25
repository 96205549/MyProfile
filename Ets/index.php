<?php include './header.php'; ?>
<div class="row col-sm-12">
    <div class="col-md-12 left_bloc">
        <div class="slide-bloc col-md-12">
            <!--code du slide-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-height: 380px; overflow: hidden">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="<?= (sizeof($slid[0]) > 0) ? "active" : " " ?>"></li>
                    <?php foreach ($slides as $slide) { ?>
                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <?php } ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../public/img/<?= $slid['chemin'] ?>" alt="<?= $slid['chemin'] ?>" width="100%" height="100%">
                        <div class="carousel-caption">
                            <h3><?= $slid['titre']; ?></h3>
                            <p><?= $slid['commentaire']; ?></p>
                        </div>
                    </div>
                    <?php
                    foreach ($slides as $slide) {
                        if ($slide[0] != $slid[0]):

                            ?>
                            <div class="item">
                                <img src="../public/img/<?= $slide['chemin'] ?>" alt="<?= $slide['chemin'] ?>" width="100%" height="100%">
                                <div class="carousel-caption">
                                    <h3><?= $slide['titre'] ?></h3>
                                    <p><?= $slide['commentaire'] ?></p>
                                </div>
                            </div>
                        <?php endif;
                    }

                    ?>                  
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- endconde-->
        </div>
    </div>
  
    <div class="clearfix">&nbsp;</div>
    <div class="col-md-12" style="margin-top: 20px;">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
        
    <div class=" row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="col-md-12 prestation">
                    <img src="../public/img/cam.jpg" class="img-responsive" width="100%" height="100%">
                </div>
                <div class="col-md-12">
                    <span class="col-md-12" style="margin-top: 20px;"><a href="">Expert en montage des cam&eacute;ra et vid&eacute;o surveillance </a></span><br>
                    <span class="col-md-12">&nbsp;</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 prestation">
                    <img src="../public/img/res3.png" class="img-responsive" width="100%" height="100%">
                </div>
                <div class="col-md-12">
                    <span class="col-md-12" style="margin-top: 20px;"><a href="">Ingenerie en maintenance informatique et réseaux</a></span><br>
                    <span class="col-md-12">&nbsp;</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 prestation">
                    <img src="../public/img/dev.png" class="img-responsive" width="100%" height="100%">
                </div>
                <div class="col-md-12">
                    <span class="col-md-12" style="margin-top: 20px;"><a href="">Ing&eacute;nerie en d&eacuteveloppement logiciel</a></span><br>
                    <span class="col-md-12">&nbsp;</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=" row">
        <div class="col-md-12">

            <div class="col-md-4">
                <div class="col-md-12 prestation">
                    <img src="../public/img/img-prestation/paneau.png" class="img-responsive" width="100%" height="100%">
                </div>
                <div class="col-md-12">
                    <span class="col-md-12" style="margin-top: 20px;"><a href="">Ingenerie en montage parabole</a></span><br>
                    <span class="col-md-12">&nbsp;</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 prestation">
                    <img src="../public/img/logoNCI.png" class="img-responsive" width="100%" height="100%">
                </div>
                <div class="col-md-12">
                    <span class="col-md-12" style="margin-top: 20px;"><a href="">Service de nettoyage pour un environnement sain</a></span><br>
                    <span class="col-md-12">&nbsp;</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 prestation">
                    <img src="../public/img/img-prestation/android.png" class="img-responsive" width="100%" height="100%">
                </div>
                <div class="col-md-12">
                    <span class="col-md-12" style="margin-top: 20px;"><a href="">Developpement d'application mobile</a></span><br>
                    <span class="col-md-12">&nbsp;</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-8 col-md-4 col-xs-10">
            <hr>
            <div class="clearfix">&nbsp;</div>
            <div class="col-md-12 " style="height: 120px;">
                <span class="col-md-6"><img src="../public/img/am.jpg" height="100" width="100" class="thumbnail"></span><span class="col-md-6"><img src="../public/img/smfi.jpg" height="100" width="100" class="thumbnail"></span>
            </div>
            <div class="col-md-12" align="center"><p class="text-warning">Ils nous ont fait confiance</p></div>
        </div>
    </div>
    
</div>
<?php include './footer.php'; ?>