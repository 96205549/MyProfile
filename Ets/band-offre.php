<?php include './requete.php'; ?>
<div class="row form-group pad_bloc">
    <div class="row bar_pub">
        <b> NOS SERVICES </b>
    </div>
    <div class="row index-pub_bloc">
        <?php foreach ($services as $service) {
            ?>
            <span class=" col-md-12 info"><i class="fa fa-caret-right"></i>&nbsp; <?= $service['1']; ?></span><br>
        <?php } ?>
    </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="row form-group">
    <div class="row bar_pub">
        <b> PUBLICITE </b>
    </div>
    <div class="row pub_bloc">
        <span><img src="../public/img/band-pub.png" class="img-responsive"></span>
        <span>&nbsp;</span>   
    </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="row form-group">
    <div class="row bar_pub">
         <b> PARTENAIRE </b>
    </div>
    <div class="row pub_bloc">
        <div class="clearfix">&nbsp;</div>
        <div class="col-md-12 " style="height: 120px;">
            <marquee><span class="col-md-6"><img src="../public/img/am.jpg" height="100" width="100" class="thumbnail"></span><span class="col-md-6"><img src="../public/img/smfi.jpg" height="100" width="100" class="thumbnail"></span></marquee>
        </div>
        <div class="col-md-12" align="center"><p class="text-warning">Ils nous ont fait confiance</p></div>
    </div>
</div>