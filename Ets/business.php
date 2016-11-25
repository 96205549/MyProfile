<?php
include './header.php';
include './requete.php';
//$url = $_SERVER['REQUEST_URI'];
//$tabl = explode('/', $url);
//$id = $tabl[3];
//$reqProd = $db->query("SELECT * FROM produits where id='$id'")->fetch();
//$reqAttrib = $db->query("SELECT * FROM attributs where idProduit='$id'")->fetchAll();
/*
 * requête pour les 8 produit propres au transit dans ressources
 */
//$ress = $db->query("select * from ressources where idProduit='$reqProd[0]' order by id DESC limit 8")->fetchAll();

?>
<!--div class="band col-md-12"></div-->
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
<?php endforeach;?>
    <div class="clearfix">&nbsp;</div>
</div>


<?php include './footer.php'; ?>
