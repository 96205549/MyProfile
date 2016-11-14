<?php include './header.php'; ?>
<div class="row col-sm-12">
    <div class="col-md-8 left_bloc">
        <form method="post">
            <div class="col-md-12 contact">
                <input class="form-control" placeholder="votre nom" name="pseudo">
                <span class="clearfix">&nbsp;</span>
                <input class="form-control" placeholder="votre email" name="email">
                <span class="clearfix">&nbsp;</span>
                <textarea class="form-control bloc-area" rows="9" placeholder="message..."  name="msg"></textarea>
                <span class="clearfix">&nbsp;</span>
                <button type="submit"  name="submit" class="btn btn-default"><i class="fa fa-send "></i> &nbsp; Envoyer</button>
            </div>
        </form>
    </div>
    <div class="col-md-offset-1 col-md-3 right_bloc">
        <span class="clearfix">&nbsp;</span>
        <p>
            <span><i class="fa fa-android text-primary"></i> &nbsp;<a href="#"><font color="slategray"><b><?= $Ets['nomEts'] ?></b></font> SARL </a></span><br>
            <span class="clearfix">&nbsp;</span>
            <span ><i class="fa fa-book text-primary"></i>&nbsp; banlieu-tic@gmail.com</span><br>
            <span class="clearfix">&nbsp;</span>
            <span ><i class="fa fa-ambulance text-primary"></i>&nbsp; <?= $Ets['adresse'] ?></span><br>
            <span class="clearfix">&nbsp;</span>
            <span ><i class="fa fa-phone-square text-primary"></i>&nbsp; <?= $Ets['contact'] ?></span><br>
            <span class="clearfix">&nbsp;</span>
            <span ><i class="fa fa-apple text-primary"></i>&nbsp; <?= $Ets['boitePostal'] ?></span><br>
        </p>
    </div>
</div>
<?php include './footer.php'; ?>

<?php
if (isset($_POST['submit'])) {
    $pseud = $_POST['pseudo'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $date = time();

    $reg = $db->query("INSERT INTO `contact`(`pseudo`, `email`, `message`, `date`) VALUES ('$pseud','$email','$msg','$date')");
    //die(print_r($reg));
    /*if ($reg) {
        echo 'message envoyer avec succès';
    } else {
        echo "message échouer";
    }*/
}

?>