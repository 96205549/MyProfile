<?php
include './header.php';
include './requete.php';
$url = $_SERVER['REQUEST_URI'];
$count = sizeof($url);
$tabl = explode('/', $url);
$ntn = sizeof($tabl);
//die(print_r($ntn));
if ($ntn > 3) {
    $id = $tabl[3];
    $file = $tabl[2];
    $allProd = $db->query("SELECT * FROM produits where idBusi='$id'")->fetchAll();
} else {
    $all = $db->query("SELECT * FROM produits")->fetchAll();
}

?>
<!--div class="band col-md-12"></div-->
<div class="clearfix">&nbsp;</div>
<div class="col-md-12 cadre-transit">
    <?php
    if ($ntn>3) {
        foreach ($allProd as $key => $prod):

            ?>
            <div class="col-md-3 bloc-vehicule">
                <div class="col-md-12 col-xs-12 profil-vehicule">
                    <a href="services-all.php?prod/<?= $prod[0]; ?>"><img class="img-responsive" src="../public/img/vehicule/<?= $prod[4]; ?>" width="100%" height="100%"></a> 
                </div>
                <div class="col-md-12 col-xs-12">
                    <p><?= $prod[1]; ?></p>
                    <?= $prod[3]; ?> F CFA
                </div>
                <div class="col-md-12 col-xs-12">
                    <a href="services-all.php?prod/<?= $prod[0]; ?>" class="btn btn-default btn-sm">Details >></a>
                </div>
            </div>
            <?php
        endforeach;
    }else {
        foreach ($all as $key => $prod):

            ?>
            <div class="col-md-3 bloc-vehicule">
                <div class="col-md-12 col-xs-12 profil-vehicule">
                    <a href="services-all.php?prod/<?= $prod[0]; ?>"><img class="img-responsive" src="../public/img/vehicule/<?= $prod[4]; ?>" width="100%" height="100%"></a> 
                </div>
                <div class="col-md-12 col-xs-12">
                    <p><?= $prod[1]; ?></p>
                    <?= $prod[3]; ?> F CFA
                </div>
                <div class="col-md-12 col-xs-12">
                    <a href="services-all.php?prod/<?= $prod[0]; ?>" class="btn btn-default btn-sm">Details >></a>
                </div>
            </div>
            <?php
        endforeach;
    }

    ?>

    <div class="clearfix">&nbsp;</div>
</div>


<?php include './footer.php'; ?>
