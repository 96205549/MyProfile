<?php 
$page= $_SERVER['REQUEST_URI'];
$cible=  explode("/", $page)[2];
$cibleTrue=  explode("?", $cible)[0];
?>
<nav class="navbar navbar nav-color">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php?home-group"><font color="#ccc"><b>T - Installation</b></font><!--font color="#ccc"> Technologie</font--></a>
        </div>
        <ul class="nav navbar-nav">
            <li  class="nav-color-li <?= ($cibleTrue=="index.php")? "active" : " "?>"><a href="index.php?accueil">Accueil</a></li>
            <li class="nav-color-li <?= ($cibleTrue=="membre.php")? "active" : " "?>"><a href="membre.php?membre-du-groupe">Membres du groupe</a></li> 
            <!--li class="nav-color-li <?php // ($cibleTrue=="prestation.php")? "active" : " "?>"><a href="prestation.php?nos-prestations-de-service">Prestations de services</a></li--> 
            <li class="nav-color-li <?= ($cibleTrue=="prestation.php")? "active" : " "?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                                    Prestations de services
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu sous-menu" role="menu">
                                    <li>
                                        <a href="prestation.php?nos-service-informatiques">
                                            <i class="fa fa-caret-right"></i>
                                            &nbsp;&nbsp;Informatique
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank">
                                            <i class="fa fa-caret-right"></i> 
                                            &nbsp;M&eacute;canique-auto
                                        </a>
                                    </li>    
                                    <li>
                                        <a href="" target="_blank">
                                            <i class="fa fa-caret-right"></i> 
                                            &nbsp;V&eacute;hicule d&apos;occasion
                                        </a>
                                    </li>    
                                    <li>
                                        <a href="renthouse.com" target="_blank">
                                            <i class="fa fa-caret-right"></i> 
                                            &nbsp;Immobilier
                                        </a>
                                    </li>    

                                </ul></li>
            <li class="nav-color-li <?= ($cibleTrue=="blog.php")? "active" : " "?>"><a href="blog.php?notre-blog">Blog</a></li> 
            <li class="nav-color-li <?= ($cibleTrue=="contact.php")? "active" : " "?>"><a href="contact.php?contactez-de-la-banlieue">Contact</a></li> 
        </ul>
        
    </div>
</nav>

<div class="navbar navbar-inverse navbar-fixed-top col-md-12">
    <div class="container-fluid">
        <div class="container" style="padding-top: 15px;">
            <font color="#ccc"><p>Intervention rapide pour un travail &eacute;fficace et bien fait.Pour tout besoin, n&apos;hésiter pas à nous contacter au  (+229) 96205549 / 97656612 / 96122400 <a class="text-danger"><b>bouraimajoezer@mail.com</b></a></p></font>
        </div>
    </div>
</div>
