<?php include './requete.php'; ?>
<div class="row form-group pad_bloc">
    <div class="row bar_pub">
        NOS SERVICES
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
        PUBLICITE
    </div>
    <div class="row pub_bloc">

    </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="row form-group">
    <div class="row bar_pub">
        PARTENAIRE
    </div>
    <div class="row pub_bloc">

    </div>
</div>