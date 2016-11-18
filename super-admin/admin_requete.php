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

$sqlEts = 'SELECT * FROM ets order by id desc limit 1';
$sli = 'SELECT * FROM slide order by id desc';
$post = 'SELECT * FROM post order by id desc';
$sqlService = 'SELECT * FROM offres order by id desc';
$sqlcv = "SELECT * FROM cv where id_users='$id' order by id desc limit 1";
$user = "SELECT * FROM users where id='$id' order by id desc limit 1";
$data = $db->query($sqlEts);
$data2 = $db->query($sqlService);
$datacv = $db->query($sqlcv)->fetch();
$slides = $db->query($sli)->fetchAll();
$Posts = $db->query($post)->fetchAll();
$profil = $db->query($user)->fetch();
