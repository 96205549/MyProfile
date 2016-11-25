<?php
include './header.php';
include './requete.php';
$url = $_SERVER['REQUEST_URI'];
$tabl = explode('/', $url);
$id = $tabl[3];
//die(print_r($id));
$reqProd = $db->query("SELECT * FROM produits where id='$id'")->fetch();
$reqAttrib = $db->query("SELECT * FROM attributs where idProduit='$id'")->fetchAll();
/*
 * requête pour les 8 produit propres au transit dans ressources
 */
$ress = $db->query("select * from ressources where idProduit='$reqProd[0]' order by id DESC limit 8")->fetchAll();

?>
<div class="col-md-12 col-xs-12 col-lg-12">
    <div class="col-md-7 produit-profile">
        <div class="col col-md-12" style="height:400px; overflow: hidden;">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="xt<?= 1 ?>" >
                    <div class="mag-eg-el-wrap img-thumbnail">
                        <div class="proportion">
                            <div mag-thumb="inner" class="mag-eg-el mag-host" mag-mode="inner" data-mag-mode="inner" mag-theme="default" data-mag-theme="default" mag-position="mirror" data-mag-position="mirror" mag-position-event="move" data-mag-position-event="move" mag-toggle="true" data-mag-toggle="true">
                                <div class="mag-noflow mag-zoomed-container mag-zoomed-bg" mag-theme="default" data-mag-theme="default" mag-toggle="true" data-mag-toggle="true" style="display: none;">
                                    <div class="mag-zoomed" style="transform: scale3d(1.3122, 1.3122, 1) translate3d(-49.2661%, -12.6911%, 0px); width: 100%; height: 100%; position: absolute; top: 0px; left: 0px;">
                                        <img src="../public/img/vehicule/<?= $reqProd[4] ?>" width="100%" height="100%">
                                    </div>
                                </div>
                                <div class="mag-thumb">
                                    <img src="../public/img/vehicule/<?= $reqProd[4] ?>" width="100%" height="100%">
                                </div>
                                <div class="mag-zone" style="touch-action: none; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div></div>

                            <div class="filler"></div>
                        </div>
                    </div>
                </div>

                <!-- ajout du des images provenant de ressource -->
                <?php foreach ($ress as $key => $resP) : ?>
                    <div class="tab-pane fade" id="rs<?= $resP[0] ?>" >
                        <div class="mag-eg-el-wrap img-thumbnail">
                            <div class="proportion">
                                <div mag-thumb="inner" class="mag-eg-el mag-host" mag-mode="inner" data-mag-mode="inner" mag-theme="default" data-mag-theme="default" mag-position="mirror" data-mag-position="mirror" mag-position-event="move" data-mag-position-event="move" mag-toggle="true" data-mag-toggle="true">
                                    <div class="mag-noflow mag-zoomed-container mag-zoomed-bg" mag-theme="default" data-mag-theme="default" mag-toggle="true" data-mag-toggle="true" style="display: none;">
                                        <div class="mag-zoomed" style="transform: scale3d(1.3122, 1.3122, 1) translate3d(-49.2661%, -12.6911%, 0px); width: 100%; height: 100%; position: absolute; top: 0px; left: 0px;">
                                            <a href="#rs<?= 2 ?>" data-toggle="tab"> 
                                                <img src="../public/img/vehicule/<?= $resP[1] ?>" width="100%" height="100%" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mag-thumb">
                                        <img src="../public/img/vehicule/<?= $resP[1] ?>" width="100%" height="100%" class="img-responsive">
                                    </div>
                                    <div class="mag-zone" style="touch-action: none; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div></div>

                                <div class="filler"></div>
                            </div>
                        </div>	
                    </div>
                <?php endforeach; ?>

                <!-- fin-->

            </div>

        </div>
    </div>
    <div class="col-md-4 col-md-offset-1 detail-produit">
        <span class="bar-detail-produit row container col-md-12">D&eacute;tails du produit</span>
        <div>
            <span class="col-md-12">&nbsp;</span>
            <p>
                <?php foreach ($reqAttrib as $key => $attrib) { ?>
                    <b> <?= $attrib[1] ?> </b> <?= $attrib[2] ?> <br>
                <?php } ?>
                <b> prix:</b> <?= $reqProd[3] ?> F CFA <br>
                <br>
            <p>
                <?= $reqProd[2] ?>  
            </p>

            </p>
        </div>
    </div>
    <?php if (sizeof($ress) > 0): ?>
        <div class="col-md-12 cadre-transit">
            <div class="carousel slide"  id="carousel3">
                <div class="carousel-inner">
                    <div class="item active">
                        <?php
                        $tota = sizeof($ress);
                        $i = 0;
                        foreach ($ress as $key => $trans):
                            $i++;
                            $ressT[] = $trans[0] . ';' . $trans[1];
                        endforeach;

                        ?>
                        <?php
                        //die(print_r($i));
                        if ($tota > 0 && $tota < 4) {
                            for ($j = 0; $j < $tota; $j++) :
                                $val = explode(";", $ressT[$j]);

                                ?>
                                <div class="col-md-3 blo-vehicule">
                                    <div class="col-md-12 col-xs-12 profil-vehicule">
                                        <a href="#rs<?= $val[0]; ?>" data-toggle="tab"><img class="img-responsive" src="../public/img/vehicule/<?= $val[1]; ?>" width="100%" height="100%"></a> 
                                    </div>

                                </div>

                                <?php
                            endfor;
                        }elseif ($tota >= 4) {
                            for ($i = 0; $i < 4; $i++) {
                                $val = explode(";", $ressT[$i]);

                                ?>
                                <div class="col-md-3 bloc-vehicule">
                                    <div class="col-md-12 col-xs-12 profil-vehicule">
                                        <a href="#rs<?= $val[0]; ?>" data-toggle="tab"><img class="img-responsive" src="../public/img/vehicule/<?= $val[1]; ?>" width="100%" height="100%"></a> 
                                    </div>

                                </div>
                            <?php }

                            ?>
                        </div>
                    <?php } if (($tota > 3 && $tota <= 7) || $tota > 3 && $tota > 7) {

                        ?>                         
                        <div class="item">
                            <?php
                            for ($i = 4; $i < $tota; $i++) {
                                $val = explode(";", $ressT[$i]);

                                ?>
                                <div class="col-md-3 bloc-vehicule">
                                    <div class="col-md-12 col-xs-12 profil-vehicule">
                                        <a href="#rs<?= $val[0]; ?>" data-toggle="tab"><img class="img-responsive" src="../public/img/vehicule/<?= $val[1]; ?>" width="100%" height="100%"></a> 
                                    </div>
                                </div>
                                <?php
                            }
                        }

                        ?>
                    </div>
                </div>
                <a data-slide="prev" href="#carousel3" class="left carousel-control" style="left:-40px;">
                    <span class="icon-prev"></span>
                </a>
                <a data-slide="next" href="#carousel3" class="right carousel-control" style="right:-40px;">
                    <span class="icon-next "></span>
                </a>
            </div>                    
        </div>
    <?php endif; ?>

</div>
<div class="band col-md-12"></div>
<div class="clearfix">&nbsp;</div>
<div class="col-md-12 cadre-transit">
    <?php foreach ($allTransit as $key => $transit): ?>
        <div class="col-md-3 bloc-vehicule">
            <div class="col-md-12 col-xs-12 profil-vehicule">
                <a href="services-all.php?prod/<?= $transit[0]; ?>"><img class="img-responsive" src="../public/img/vehicule/<?= $transit[4]; ?>" width="100%" height="100%"></a> 
            </div>
            <div class="col-md-12 col-xs-12">
                <p><?= $transit[1]; ?></p>
                <?= $transit[3]; ?> F CFA
            </div>
            <div class="col-md-12 col-xs-12">
                <a href="services-all.php?prod/<?= $transit[0]; ?>" class="btn btn-default btn-sm">Details >></a>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="clearfix">&nbsp;</div>
</div>
<?php include './footer.php'; ?>
