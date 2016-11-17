<?php include './header.php'; ?>
<?php include './requete.php'; ?>
<div class="row col-sm-12">
    <div class="col-md-8 left_bloc">


        <!--debut du cadre du blog-->
        <?php foreach ($posts as $post) {

            ?>
            <div class="form-group blog-site-bloc ">
                <div class="blog-site col-md-12">
                    <img src="../public/img/<?= $post[2]; ?>" width="100%" height="100%">
                </div>
                <div class="col-md-12">
                    <p><?= $post[1]; ?> </p>
                </div>
                <span class="col-md-6">
                    150k <i class="fa fa-thumbs-o-up col-md-1 text-primary"></i>  
                    &nbsp; <i class="fa fa-thumbs-o-down col-md-offset-1 text-danger"></i> 20
                    &nbsp;<span  data-toggle="collapse" data-target="#demo<?= $post[0]; ?>" style="cursor: alias;"> <i class="fa fa-comment-o col-md-offset-1 text-info"></i> 77</span>
                </span>
                <span class="col-md-6 text-primary text-right"><b>publier le <?= date("d/m/y", $post['date']); ?> à 21:05:35 </b></span>
                <div id="demo<?= $post[0]; ?>" class="collapse col-md-12">
                    <?php foreach ($msgs as $msg):  
                        if($msg[3] == $post[0]):
                    ?>
                    <div class="row comment-bloc" id="comment">
                        <span class="col-md-7 comment-profile fa fa-user text-primary"> Clotoe rodrigue</span>
                        <span class="col-md-12"> 
                            <?= $msg[1]; ?>   
                        </span>
                        <span>&nbsp;</span>
                    </div>
                    <?php endif; endforeach; ?>
                    <div class="row">
                        <form action="Pushmsg.php" method="post" id="postMsg">
                            <span class="col-md-12 comment-input">
                                <span class="col-md-1 user-zone"><i class="fa fa-user-md"></i></span><span class="col-md-11"><input type="text" name="msg" id="msg" class="form-control col-md-11" placeholder="laissez votre commentaire ..."><input type="hidden" name="idpost" value="<?= $post[0]; ?>"></span>
                            </span>
                        </form>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
            </div>
        <?php } ?>
        <!--fin du cadre du blog-->

    </div>
    <div class="col-md-offset-1 col-md-3 right_bloc">
        <?php include './band-offre.php'; ?>
    </div>
</div>
<?php include './footer.php'; ?>