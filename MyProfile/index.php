<?php include './header.php'; ?>
<div class="row col-sm-12">
    <div class="col-md-12 left_bloc">
        <div class="slide-bloc col-md-12">
            <!--code du slide-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 380px; overflow: hidden">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="<?= (sizeof($slid[0])> 0) ? "active" : " " ?>"></li>
                    <?php foreach ($slides as $slide) { ?>
                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <?php } ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../public/img/<?= $slid[1] ?>" alt="<?= $slid[1] ?>" width="100%" height="100%">
                        <div class="carousel-caption">
                            <h3>Chania</h3>
                            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                        </div>
                    </div>
                    <?php foreach ($slides as $slide) { 
                        if($slide[0]!= $slid[0]):
                        ?>
                        <div class="item <?php // ($slide[0] == "1") ? "active" : " " ?>">
                            <img src="../public/img/<?= $slide[1] ?>" alt="<?= $slide[1] ?>" width="100%" height="100%">
                            <div class="carousel-caption">
                                <h3>Chania</h3>
                                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                            </div>
                        </div>
                    <?php endif; } ?>                  
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
    <!--div class="col-md-offset-1 col-md-3 right_bloc">
        <div class="row form-group pad_bloc">
            <div class="row bar_pub">
                NOS SERVICES
            </div>
            <div class="row index-pub_bloc">
    <?php //foreach ($services as $service) {     

    ?>
                <span class=" col-md-12 info"><i class="fa fa-caret-right"></i>&nbsp; <?php // $service['1']; ?></span><br>
<?php //}  ?>
               
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
    </div-->
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
                    <span class="col-md-12" style="margin-top: 20px;"><a href="">Ingenerie réseaux et logicielle</a></span><br>
                    <span class="col-md-12">&nbsp;</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 prestation">
                    <img src="../public/img/reseaux.jpg" class="img-responsive" width="100%" height="100%">
                </div>
                <div class="col-md-12">
                    <span class="col-md-12" style="margin-top: 20px;"><a href="">Formation en Ingenerie réseaux et logicielle</a></span><br>
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
        </div>
    </div>
    <div class=" row">
        <div class="col-md-12">

            <div class="col-md-4">
                <div class="col-md-12 prestation">
                    <img src="../public/img/img-prestation/paneau.png" class="img-responsive" width="100%" height="100%">
                </div>
                <div class="col-md-12">
                    <span class="col-md-12" style="margin-top: 20px;"><a href="">Ingenerie réseaux et logicielle</a></span><br>
                    <span class="col-md-12">&nbsp;</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 prestation">
                    <img src="../public/img/img-prestation/application.png" class="img-responsive" width="100%" height="100%">
                </div>
                <div class="col-md-12">
                    <span class="col-md-12" style="margin-top: 20px;"><a href="">Formation en Ingenerie réseaux et logicielle</a></span><br>
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
                    <span class="col-md-12" style="margin-top: 20px;"><a href="">Service de nettoyage pour un environnement sain</a></span><br>
                    <span class="col-md-12">&nbsp;</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>