<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../super-admin/conn.db';
//session_start();
$idpost= 1;
$slide = $db->query("select * from slide");
$service = $db->query("select * from offres");
$post = $db->query("select * from post");
$user = $db->query("select * from users");
$cv = $db->query("select * from cv ");
$ets = $db->query("select * from ets ");
$postMsg = $db->query("select * from messages");
$msgs = $postMsg->fetchAll();
$Cv = $cv->fetchAll();
$Ets = $ets->fetch();

$slides = $slide->fetchAll();
$services = $service->fetchAll();
$posts = $post->fetchAll();
$users = $user->fetchAll();

//function getcv($param)
//{
//    //include '../super-admin/conn.db';
//    //$db = new PDO('mysql:host=localhost;dbname=banlieu-tic', 'root', '');
//    $cv = $db->query("select * from cv where id_users='$param'");
//    $Cv = $cv->fetch();
//    $cvT = $Cv['cv_texte'];
//    echo $cvT;
//}
