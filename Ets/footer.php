</div>
<div class="clearfix">&nbsp;</div>
<div class="row col-md-12 col-xs-12">
    <div class="col-xs-12 col-md-12 col-sm-12 transit">
        <span class="service"><b>Business</b></span>
        <div class="col-md-12 promotion-vehicule">
            Promotion des v&eacute;hicules d&apos;occasion 
        </div>
        <?php $countTr = sizeof($produitsT); ?>
        <div class="col-md-12 col-xs-12 cadre-transit">
            <div class="carousel slide"  id="carousel2">
                <div class="carousel-inner">
                    <div class="item active">
                        <?php
                        $tot = sizeof($produitsT);
                        $i = 0;
                        foreach ($produitsT as $key => $trans):
                            $i++;
                            $dataT[] = $trans[0] . ';' . $trans[1] . ';' . $trans[3] . ';' . $trans[4];
                        endforeach;

                        ?>
                        <?php
                        //die(print_r($i));
                        if ($tot > 0 && $tot < 4) {
                            for ($j = 0; $j < $tot; $j++) :
                                $val = explode(";", $dataT[$j]);

                                ?>
                                <div class="col-md-3 bloc-vehicule">
                                    <div class="col-md-12 col-xs-12 profil-vehicule">
                                        <a href="services-all.php"><img class="img-responsive" src="../public/img/vehicule/<?= $val[3]; ?>" width="100%" height="100%"></a> 
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <p><?= $val[1]; ?></p>
                                        <?= $val[2]; ?>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <a href="services-all.php?prod/<?= $val[0]; ?>" class="btn btn-default btn-sm">Details >></a>
                                    </div>
                                </div>

                                <?php
                            endfor;
                        }elseif ($tot >= 4) {
                            for ($i = 0; $i < 4; $i++) {
                                $val = explode(";", $dataT[$i]);

                                ?>
                                <div class="col-md-3 bloc-vehicule">
                                    <div class="col-md-12 col-xs-12 profil-vehicule">
                                        <a href="services-all.php?prod/<?= $val[0]; ?>"><img class="img-responsive" src="../public/img/vehicule/<?= $val[3]; ?>" width="100%" height="100%"></a> 
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <p><?= $val[1]; ?></p>
                                        <?= $val[2]; ?>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <a href="services-all.php?prod/<?= $val[0]; ?>" class="btn btn-default btn-sm">Details >></a>
                                    </div>
                                </div>
                            <?php }

                            ?>
                        </div>
                        <?php
                    }if (($tot > 3 && $tot <= 7) || $tot > 3 && $tot > 7) {

                        ?>                         
                        <div class="item">
                            <?php
                            for ($i = 4; $i < $tot; $i++) {
                                $val = explode(";", $dataT[$i]);

                                ?>
                                <div class="col-md-3 bloc-vehicule">
                                    <div class="col-md-12 col-xs-12 profil-vehicule">
                                        <a href="services-all.php?prod/<?= $val[0]; ?>"><img class="img-responsive" src="../public/img/vehicule/<?= $val[3]; ?>" width="100%" height="100%"></a> 
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <p><?= $val[1]; ?></p>
                                        <?= $val[2]; ?>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <a href="services-all.php?prod/<?= $val[0]; ?>" class="btn btn-default btn-sm">Details >></a>
                                    </div>
                                </div>
                                <?php
                            }
                        }

                        ?>
                    </div>
                </div>
                <a data-slide="prev" href="#carousel2" class="left carousel-control" style="left:-40px;">
                    <span class="icon-prev"></span>
                </a>
                <a data-slide="next" href="#carousel2" class="right carousel-control" style="right:-40px;">
                    <span class="icon-next "></span>
                </a>
            </div>                    

            <div class="clearfix">&nbsp;</div>
        </div>
    </div>
</div>
<div class="clearfix">&nbsp;</div>
<!--div class="clearfix">&nbsp;</div-->
<div class="row container">
    <div class="col-md-12 row footer-bloc">
        <div class="col-md-3 info-foo">
            <p>
            <h4><strong>Nos business</strong></h4>
            <?php foreach ($allBusiness as $biz) { ?>
                <a href="business.php?biz/<?= $biz[0] ?>">
                    <i class="fa fa-caret-right"></i> 
                    &nbsp;<?= $biz[1] ?>
                </a><br/><br/>
            <?php } ?>
            </p>
        </div>
        <div class="col-md-3 info-foo">
            <p>
            <h4><strong>Nos services</strong></h4>
            <?php foreach ($services as $service) { ?>
                <i class="fa fa-caret-right"></i>&nbsp; <?= $service['1']; ?><br/><br/>
            <?php } ?>
            </p>
        </div>
        <div class="col-md-3 info-foo">
            <p>
            <h4><strong>Domaines de formation</strong></h4>
            <i class="fa fa-caret-right"></i> Camera video surveillance<br/><br/>
            <i class="fa fa-caret-right"></i> Maintenance et réseaux informatique<br/><br/>
            <i class="fa fa-caret-right"></i> Montage des antennes parabolique<br/><br/>
            <i class="fa fa-caret-right"></i> Programmation informatique (androïd et web)<br/><br/>
            </p>
        </div>
        <div class="col-md-3 info-foo">
            <p>
            <h4><u><strong>Nous-contacter</strong></u></h4>
            <i class="fa fa-home"></i> <?= $Ets['nomEts'] ?><br><br>
            <i class="fa fa-phone"></i> <?= $Ets['contact'] ?><br><br>
            <i class="fa fa-envelope"></i> joezerbouraima@gmail.com<br><br>
            <i class="fa fa-bicycle"></i> <?= $Ets['adresse'] ?><br>
            </p>
        </div>
    </div>
</div>
</div>
</div>
</body>
<script src="../public/vendor/jquery/dist/jquery.min.js"></script>
<script src="../public/js/jquery.min.js"></script>
<script src="../public/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!--script src="../public/js/postmsg.js"></script-->                
<script type="text/javascript" src="../public/popup/js/jquery.slimscroll.min.js"></script>          
<script type="text/javascript" src="../public/popup/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="../public/popup/js/mvpready-core.js"></script>
<script type="text/javascript" src="../public/popup/js/mvpready-helpers.js"></script>
<script type="text/javascript" src="../public/popup/js/mvpready-admin.js"></script>
<!--script src="../public/js/zoom/js/jquery.js"></script-->
<script src="../public/js/zoom/js/jquery.bridget.js"></script>
<script src="../public/js/zoom/js/jquery.mousewheel.js"></script>
<!--script src="../public/js/zoom/js/jquery.event.drag.js"></script-->
<script src="../public/js/zoom/js/gajs.js"></script>
<script src="../public/js/zoom/js/PreventGhostClick.js"></script>
<script src="../public/js/zoom/js/mag-analytics.js"></script>
<script src="../public/js/zoom/js/mag.js"></script>
<script src="../public/js/zoom/js/mag-jquery.js"></script>
<script src="../public/js/zoom/js/mag-control.js"></script>
<script src="../public/js/zoom/js/index.js"></script>
</html>
