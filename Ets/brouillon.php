<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Case</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <h3>Collapsible Navbar</h3>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>


            div class=" pull-right">
            <!-- START User Info-->
            <div class="visible-lg visible-md m-t-10">
                <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                    <span class="semi-bold">David</span> <span class="text-master">Nest</span>
                </div>
                <div class="dropdown pull-right">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="thumbnail-wrapper d32 circular inline m-t-5">
                            <img src="../public/img/aaron.jpg" alt="" data-src="../public/img/aaron.jpg" data-src-retina="../public/img/aaron.jpg" width="32" height="32">
                        </span>
                    </button>
                    <ul class="dropdown-menu profile-dropdown" role="menu">
                        <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                        </li>
                        <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
                        </li>
                        <li><a href="#"><i class="pg-signals"></i> Help</a>
                        </li>
                        <li class="bg-master-lighter">
                            <a href="#" class="clearfix">
                                <span class="pull-left">Logout</span>
                                <span class="pull-right"><i class="pg-power"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>

    </div>

</body>
</html>
