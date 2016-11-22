<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './conn.db';
session_start();
if (!isset($_SESSION['user'])) {

    header('Location: index.php');
}
$id = $_SESSION['user'];

/*
 * affichage des info de l'entreprise
 */
$sqlEts = 'SELECT * FROM ets order by id desc limit 1';

/*
 * affichage de la dernière information de  la table produit 
 */

  //$Lprod = $_POST['Lprod'];

//if (empty($Lprod)) {
$infoP = 'SELECT * FROM produits order by id desc limit 1';

//}else {
//    $infoP = "SELECT * FROM produits where id='$Lprod' ";
//}


/*
 * affichage des infos du slide
 */
$sli = 'SELECT * FROM slide order by id desc';

/*
 * affichage des posts du blog
 */
$post = 'SELECT * FROM post order by id desc';

/*
 * affichage des service que propose la structure
 */
$sqlService = 'SELECT * FROM offres order by id desc';

/*
 * affichage des données de nos cv respectivent
 */
$sqlcv = "SELECT * FROM cv where id_users='$id' order by id desc limit 1";

/*
 * affichage des infos de l'utilisateur
 */
$user = "SELECT * FROM users where id='$id' order by id desc limit 1";

/*
 * listes de tous les produits
 */
$liste = "SELECT * FROM produits order by id desc";


$data = $db->query($sqlEts);
$data2 = $db->query($sqlService);
$datacv = $db->query($sqlcv)->fetch();
$slides = $db->query($sli)->fetchAll();
$Posts = $db->query($post)->fetchAll();
$profil = $db->query($user)->fetch();
$addProd = $db->query($infoP)->fetch();
$listeProd = $db->query($liste)->fetchAll();
/*
 * affichage de tous les images  d'un produit
 */
$produits = "SELECT * FROM ressources where idProduit='$addProd[0]' order by id desc";

$AllProduits = $db->query($produits)->fetchAll();
