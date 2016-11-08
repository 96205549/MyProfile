<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include './conn.db';

if (isset($_POST['conn'])) {
    $login = $_POST['login'];
    $pass = sha1($_POST['password']);

    //die(print_r($login.",".$pass));
    $req = "select * from users where login='$login' and pass='$pass'";
    $data = $db->query($req)->fetch();
     //die(print_r($data));
    if ($data ==TRUE) {
        $_SESSION['user']=$data[0];
        header('Location: admin.php');
    } else {
        header('Location: index.php');
    }
}