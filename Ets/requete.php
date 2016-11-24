<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../super-admin/conn.db';
//session_start();
$idpost = 1;
/*
 * requête pour la premère donnée du slide
 */
$sli1 = 'SELECT * FROM slide order by id desc limit 1';
/*
 * requête pour tous les données du slide
 */
$slide = $db->query("select * from slide");
/*
 * requête de tous les offres de services
 */
$service = $db->query("select * from offres");
/*
 * recupération de tous les posts
 */
$post = $db->query("select * from post");
/*
 * requête pour tous les utilisateurs
 */
$user = $db->query("select * from users");
/*
 * requête pour cv
 */
$cv = $db->query("select * from cv ");
/*
 * requête pour info de l'entreprise
 */
$ets = $db->query("select * from ets ");
/*
 * requete pour tous les messages
 */
$postMsg = $db->query("select * from messages");

/*
 * requête pour les 8 produit propres au transit
 */
$rprodTr = $db->query("select * from produits where idOffre='9' order by id DESC limit 8");
/*
 * requête pour les 8 produit propres à l'immobilier
 */
$rprodIm = $db->query("select * from produits where idOffre='8' order by id DESC limit 8");

/*
 * transit
 */

$produitsT = $rprodTr->fetchAll();

/*
 * immobilier
 */
$produitsI = $rprodIm->fetchAll();

$msgs = $postMsg->fetchAll();
$Cv = $cv->fetchAll();
$Ets = $ets->fetch();

$slid = $db->query($sli1)->fetch();
//die(print_r($slid));
$slides = $slide->fetchAll();
$services = $service->fetchAll();
$posts = $post->fetchAll();
$users = $user->fetchAll();

