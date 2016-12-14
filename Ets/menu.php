<?php
$page = $_SERVER['REQUEST_URI'];
$cible = explode("/", $page)[2];
$cibleTrue = explode("?", $cible)[0];

?>
<!--head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head-->
<!--div class="mainnav"-->
<nav class="navbar navbar nav-color">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-default">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example" aria-expanded="false" aria-controls="bs-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?home-group"><font color="#ccc"><b>Ti</b></font><!--font color="#ccc"> Technologie</font--></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example" role="navigation">
            <ul class="nav navbar-nav mainnav-menu">
                <li  class="nav-color-li <?= ($cibleTrue == "index.php") ? "active" : " " ?>"><a href="index.php?accueil">Accueil</a></li>
                <li class="nav-color-li <?= ($cibleTrue == "membre.php") ? "active" : " " ?>"><a href="membre.php?membre-du-groupe">Membres du groupe</a></li> 
                <li class="nav-color-li <?= ($cibleTrue == "prestation.php") ? "active" : " " ?>"><a href="prestation.php?nos-prestations-de-service">Prestations de services</a></li> 
                <li class="nav-color-li <?= ($cibleTrue == "business.php") ? "active" : " " ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        Nos Business
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu sous-menu" role="menu">

                        <?php foreach ($allBusiness as $key => $biz) : ?>
                            <li>
                                <a href="business.php?biz/<?= $biz[0] ?>">
                                    <i class="fa fa-caret-right"></i> 
                                    &nbsp;<?= $biz[1] ?>
                                </a>
                            </li> 
                        <?php endforeach; ?>
                    </ul></li>
                <li class="nav-color-li <?= ($cibleTrue == "blog.php") ? "active" : " " ?>"><a href="blog.php?notre-blog">Blog</a></li> 
                <li class="nav-color-li <?= ($cibleTrue == "contact.php") ? "active" : " " ?>"><a href="contact.php?contactez-de-la-banlieue">Contact</a></li> 
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>




<!--/div-->
<div class="navbar navbar-inverse navbar-fixed-top col-md-12">
    <div class="container-fluid">
        <div class="container" style="padding-top: 15px;">
            <font color="#ccc"><p>Intervention rapide pour un travail &eacute;fficace et bien fait.Pour tout besoin, n&apos;hésiter pas à nous contacter au  (+229) 96205549 / 97656612 / 96122400 <a class="text-danger"><b>bouraimajoezer@mail.com</b></a></p></font>
        </div>
    </div>
</div>
