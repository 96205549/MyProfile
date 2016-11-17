<?php
include './header.php';
include './requete.php';

?>
<div class="row col-sm-12">
    <div class="col-md-8 left_bloc">
        <?php
        foreach ($users as $user) {
            foreach ($Cv as $cv) {
                if ($cv[4] == $user[0]):
                 ?>
                    <div class="form-group marge">
                        <div class="col-sm-12 cadre_bloc">
                            <div class="col-sm-4 profil_bloc">
                                <img src="../public/img/<?= $user['profile'] ?>"  class="img-responsive" width="100%" height="100%">
                            </div>
                            <div class="col-sm-8"style="height: 180px; text-justify: auto; line-height: 21px; overflow-y: hidden;">
                                <span class="col-sm-12"><a href="profile.php?profil-team-first/<?= $user[0]; ?>"><?= $user[1] . "&nbsp;" . $user[2] ?></a></span>
                                <span>&nbsp;</span>
                                <p><?= $cv[1]; ?></p>
                            </div>
                        </div>
                    </div>
                    <div>&nbsp;</div>
                    <?php
                endif;
            }
        }
        ?>
    </div>
    <div class="col-md-offset-1 col-md-3 right_bloc">
        <?php include './band-offre.php'; ?>
    </div>
</div>
<?php include './footer.php'; ?>