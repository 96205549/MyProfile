<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../super-admin/conn.db';

session_start();

    $output = ["success" => false, "msg" => null];
if (isset($_POST['msg'])) {
    $text = $_POST['msg'];
    $date = time();
    $idpost = $_POST['idpost'];
    if (!empty($text)) {
        //die(print_r($idpost.",".$date.",".$text));
        $req = $db->query("INSERT INTO `messages`(`msg`, `date`, `id_post`, `idclient`, `parent`) VALUES ('$text','$date','$idpost','0','0')");

        if ($req == TRUE) {
            $output["msg"] = "merci pour votre commentaire";
            $output["success"] = true;
            $_SESSION['idp'] = $idpost;
            //header('Location: blog.php?notre-blog');
        }
    }
            return json_encode($output);
}

//function countMsg($idpost)
//{
include '../super-admin/conn.db';
// $idpost=NULL;

$dataM = $db->query("select * from messages where id_post=1");
$total = $dataM->fetchAll();
//die(print_r($total));
$taille = sizeof($total);
//echo $taille;
    
//}
