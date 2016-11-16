<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './conn.db';
session_start();
$id = $_SESSION['user'];
if (isset($_POST['submitInfo'])) {
    $req = "SELECT * FROM ets ";
    $ets = $db->query($req)->fetch();
    $nomets = $_POST['nomEts'];
    $slogan = $_POST['slogan'];
    $addr = $_POST['addresse'];
    $bp = $_POST['bp'];
    $cont = trim($_POST['contact']);
    $date = time();
    $logo = "logo";


    if (isset($_FILES['avatar'])) {
        $dossier = '../public/img/';
        $fichier = basename($_FILES['avatar']['name']);
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) { //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            $file_name = $_FILES['avatar']['name'];
        } else { //Sinon (la fonction renvoie FALSE).
            $file_name = $ets['logo'];
        }

        $inside = $db->prepare("UPDATE ets SET nomEts=:nom, slogan=:slogan, logo=:logo, adresse=:adr, contact=:cont, boitePostal=:bp, date=:date WHERE id=:id");
        $inside->execute(array(
            'nom' => $nomets,
            'slogan' => $slogan,
            'logo' => $file_name,
            'adr' => $addr,
            'cont' => $cont,
            'bp' => $bp,
            'date' => $date,
            'id' => 1
            )
        );

        // $inside = $db->query("UPDATE `ets` SET `nomEts`='$nomets',`slogan`='$slogan',`logo`='$file_name',`adresse`='$addr',`contact`='$cont',`boitePostal`='$bp',`date`='$date' WHERE `id`=$id");      
        //die(print_r($inside));

        if ($inside == true) {
            echo "oui enregistrement effectuer avec succès";
            header('Location: admin.php?tab=info');
        } else {
            echo "echec d'enregistrement";
        }
    }
}

/*
 * ajout de prestation de service
 */

if (isset($_POST['submitPresta'])) {
    $service = $_POST['presta'];
    $date = time();
    //$iduser = 1;
    //echo '<br>addresse=>'.$addr."<br>nom=>".$nomets."<br>slog=>".$slogan."<br>bp=>".$bp."<br>cont=>".$cont."<br>date=>".$date."<br>logo=>".$logo."<br>";
    $inside = $db->query("INSERT INTO `offres`(`services`,`id_users`,`date`) VALUES ('$service','$id','$date')");
    //print_r($inside);
    if ($inside == true) {
        echo "oui enregistrement effectuer avec succès";
        header('Location: admin.php?tab=prest');
    } else {
        echo "echec d'enregistrement";
    }
}

/*
 * ajout du cv
 */

if (isset($_POST['postcv'])) {
    $cvT = $_POST['cvtexte'];
    $date = time();
    //$iduser = '1';
    //echo '<br>addresse=>'.$addr."<br>nom=>".$nomets."<br>slog=>".$slogan."<br>bp=>".$bp."<br>cont=>".$cont."<br>date=>".$date."<br>logo=>".$logo."<br>";
    $select = $db->query("SELECT * FROM `cv` WHERE id_users='$id'");
    $data = $select->fetchAll();
    $taille = sizeof($data);

    if (isset($_FILES['cvfile'])) {
        $dossier = '../public/img/';
        $fichier = basename($_FILES['cvfile']['name']);
        if (move_uploaded_file($_FILES['cvfile']['tmp_name'], $dossier . $fichier)) { //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            $file_name = $_FILES['cvfile']['name'];
        } else { //Sinon (la fonction renvoie FALSE).
            $file_name = "cv";
        }
        if (sizeof($data) > 0) {
            $inside = $db->prepare('UPDATE cv SET cv_texte=:cvt, cv_jointe=:cvj, date=:date WHERE id_users=:id');
            $inside->execute(array(
                'cvt' => $cvT,
                'cvj' => $file_name,
                'date' => $date,
                'id' => $id));

            //$inside = $db->query("UPDATE `cv` SET `cv_texte`='$cvT',`cv_jointe`='$file_name',`date`='$date' WHERE `id_users`='$id'");
        } else {
            $inside = $db->query("INSERT INTO `cv`(`cv_texte`,`cv_jointe`,`id_users`,`date`) VALUES ('$cvT','$file_name','$id','$date')");
        }
        if ($inside == true) {
            echo "oui enregistrement effectuer avec succès";
            header('Location: admin.php?tab=cv');
        } else {
            echo "echec d'enregistrement";
        }
    }
}


/*
 * poster un travaille
 */

if (isset($_POST['postwork'])) {
    $post = $_POST['comment_post'];
    $date = time();
    //$iduser = '1';

    if (isset($_FILES['postfile'])) {
        $dossier = '../public/img/';
        $fichier = basename($_FILES['postfile']['name']);
        if (move_uploaded_file($_FILES['postfile']['tmp_name'], $dossier . $fichier)) { //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            $file_name = $_FILES['postfile']['name'];
        } else { //Sinon (la fonction renvoie FALSE).
            $file_name = "post";
        }

        $inside = $db->query("INSERT INTO `post`(`texte`, `nom_img`, `chemin_url`, `date`, `id_users`) VALUES ('$post','$file_name','$file_name','$date','$id')");

        if ($inside == true) {
            echo "oui enregistrement effectuer avec succès";
            header('Location: admin.php?tab=blog');
        } else {
            echo "echec d'enregistrement";
        }
    }
}

/*
 * ajout du slide submitSlide
 */

if (isset($_POST['submitSlide'])) {

    $date = time();
    // $iduser = '1';
    //echo '<br>addresse=>'.$addr."<br>nom=>".$nomets."<br>slog=>".$slogan."<br>bp=>".$bp."<br>cont=>".$cont."<br>date=>".$date."<br>logo=>".$logo."<br>";
    //$select = $db->query("SELECT * FROM `post` WHERE id_users='$iduser'");
//    $data = $select->fetchAll();
//    $taille = sizeof($data);
    if (isset($_FILES['slidefile'])) {
        $dossier = '../public/img/';
        $fichier = basename($_FILES['slidefile']['name']);
        if (move_uploaded_file($_FILES['slidefile']['tmp_name'], $dossier . $fichier)) { //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            $file_name = $_FILES['slidefile']['name'];
        } else { //Sinon (la fonction renvoie FALSE).
            $file_name = "slide";
        }
        $inside = $db->query("INSERT INTO `slide`(`nomImage`, `chemin`, `date`, `id_users`) VALUES ('$file_name','$file_name','$date','$id')");
        //die(print_r($inside));
        if ($inside == true) {
            echo "oui enregistrement effectuer avec succès";
            header('Location: admin.php?tab=slide');
        } else {
            echo "echec d'enregistrement";
        }
    }
}


/*
 * mise à jour du profile utilisateur
 */

if (isset($_POST['submitProfil'])) {
    //$iduser = '2';
    $req = "SELECT * FROM users where id='$id' ";
    $user = $db->query($req)->fetch();
    $nom = $_POST['nom'];
    $profession = $_POST['profession'];
    $email = $_POST['email'];
    $cont = $_POST['contact'];
    $login = $_POST['login'];
    $passlast = $_POST['lastpass'];
    $passa = $_POST['newpass'];
    $passb = $_POST['confirm'];
    $date = time();
    if (empty($passlast)) {
        if ((sha1($passlast) == $user['pass']) && (($passa == $passb))) {
            $pass = sha1($passa);
        } else {
            $pass = $user['pass'];
        }
    } else {
        if ((sha1($passlast) == $user['pass']) && ($passa == $passb)) {
            $pass = sha1($passa);
        } else {
            $pass = $user['pass'];
        }
    }
    //die(print_r($pass));

    if (isset($_FILES['profil'])) {
        $dossier = '../public/img/';
        $fichier = basename($_FILES['profil']['name']);
        if (move_uploaded_file($_FILES['profil']['tmp_name'], $dossier . $fichier)) { //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            $file_name = $_FILES['profil']['name'];
        } else { //Sinon (la fonction renvoie FALSE).
            $file_name = $user['profile'];
        }



        /* $inside = $db->prepare('UPDATE users SET nom=:nom, profession=:profession, email=:mail, contact=:contact, login=:login, pass=:pass, profile=:profile, type-user=:user_type, date=:date WHERE id=:id');
          $inside->execute(array(
          'nom' => $nom,
          'profession' => $profession,
          'mail' => $email,
          'contact' => $cont,
          'login' => $login,
          'pass' => $pass,
          'profile' => $file_name,
          'user_type' => '0',
          'date' => $date,
          'id' => $id)); */

        $inside = $db->query("UPDATE `users` SET `nom`='$nom',`profession`='$profession',`email`='$email',`contact`='$cont',`login`='$login',`pass`='$pass',`profile`='$file_name',`type-user`='0',`date`='$date' WHERE `id`= '$id'");

        header('Location: admin.php?tab=profil');

        if ($inside == true) {
            echo "oui enregistrement effectuer avec succès";
            header('Location: admin.php?tab=profil');
        } else {
            echo "echec d'enregistrement";
        }
    }
}

if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $id = explode("/", $code)[1];
    $syst = explode("/", $code)[0];
    //echo $id."---".$syst;
    if ($syst == "slide") {
        $inside = $db->query("delete from slide where id='$id'");
        if ($inside) {
            header('Location: admin.php?tab=slide');
        } else {
            echo "echec de suppression";
        }
    } elseif ($syst == "prest") {
        $inside = $db->query("delete from offres where id='$id'");
        if ($inside) {
            header('Location: admin.php?tab=prest');
        } else {
            echo "echec de suppression";
        }
    }
}