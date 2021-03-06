<?php
session_start();
 if (!$_SESSION["Logged"]){
	
	 $_SESSION["message"] = " you need to log in to enter admin panal ";
	  header("Location:login.html");
 }
?>
<!DOCTYPE html>
<html class="english">
<head>
    <meta charset="UTF-8"/>
    <title>Fleet Managment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="stylesheet" type="text/css" href="css/all.css"/>
    <script src="js/all.js" type="text/javascript" charset="UTF-8"></script>
    <script src="new/iframeResizer.contentWindow.min.js"></script>
      <link rel="stylesheet" href="font/css/font-awesome.min.css">
	 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maps.google.com/maps/api/js?v=3&sensor=false&libraries=adsense"></script>
    <script src="js/maps.js"></script>
    <script src="js/leaflet-0.7.5/leaflet.js"></script>
    <script src="js/leaflet-plugins/google.js"></script>
    <script src="js/leaflet-plugins/bing.js"></script>
    <link rel="stylesheet" href="js/leaflet-0.7.5/leaflet.css">    
    <!-- 
    
        to change themes, select a theme here:  http://www.bootstrapcdn.com/#bootswatch_tab 
        and then change the word after 3.2.0 in the following link to the new theme name
    -->    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
	
	
	 
</head>
<body>
<div class="modal fade hidden-print" id="myModal" tabindex="-1" role="dialog" aria-hidden="true"></div>
<div class="modal fade hidden-print" id="myModalDisableClose" tabindex="-1" role="dialog" aria-hidden="true"
     data-keyboard="false" data-backdrop="static"></div>
<div class="wrapper ">
    <!--Left Navigation bar-->
    <div class="left-bar hidden-print">
        <div class="admin-logo" style="">
            <div class="logo-holder pull-left">
                <img src="images/Icon.png" class="hidden-print logo"
                     id="halimage" alt=""/></div>
        </div>
        <ul class="list-unstyled menu-parent" id="mainMenu">
            
            <li class="active">
                <a tabindex="-1" href="home.html"
                   class="waves-effect waves-light">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="text">Home</span>
                </a>
            </li>
            <li>
                <a tabindex="-1" href="livestream.html"
                   class="waves-effect waves-light">
                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                    <span class="text">Live Stream</span>
                </a>
            </li>
            <li>
                <a tabindex="-1" href="Assign Driver.html"
                   class="waves-effect waves-light">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                    <span class="text">Assign Driver</span>
                </a>
            </li>
			
			
			 <li>
                <a tabindex="-1" href="AddNewDriver.html"
                   class="waves-effect waves-light">
                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                    <span class="text">Add New Driver</span>
                </a>
            </li>
			
			
            <li>
                <a tabindex="-1" href="complain.php"
                   class="waves-effect waves-light">
                    <i class="fa fa-envelope-open" aria-hidden="true"></i>
                    <span class="text">Complains</span>
                </a>
            </li>
            <li>
                <a href="logout.php"
                   tabindex="-1"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i><span class="text">Logout</span></a>
            </li>
        </ul>
    </div>
    <!--/Left Navigation Bar-->

    <div class="content" id="content">
        <div class="overlay hidden-print"></div>

        <!--Top Navigation bar-->
        <div class="top-bar hidden-print">

            <nav class="navbar navbar-default top-bar">
                <div class="menu-bar-mobile" id="open-left"><i class="ti-menu"></i></div>
                <div class="nav navbar-nav top-elements navbar-breadcrumb hidden-xs">
                    <a tabindex="-1" href="home.html"><h3>Fleet Managment System</h3></a></div>
                <ul class="nav navbar-nav navbar-right top-elements">
                    <li class="dropdown">
                        <a tabindex="-1" href="#" class="dropdown-toggle avatar_width" data-toggle="dropdown"
                           role="button" aria-expanded="false"><span class="avatar-holder">
<img src="images/ic_launcher.png" alt=""/></span>
                            <span class="avatar_info hidden-sm">Fleetio</span></a>
                        <ul class="dropdown-menu user-dropdown animated fadeInUp wow avatar_drop neat_drop"
                            data-wow-duration="1500ms" role="menu">
                            <li>
                                <a href=""
                                   class="logout_button" tabindex="-1"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i><span class="text">Logout</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--/Top Navigation bar-->
        <!-- Header -->
       
        <!--Content Box-->
         
		 
		  <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4" id="toplogo">
                <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>Google Map
            </div>
            <div class="col-sm-8" id="messages"></div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="mapdiv">
                <div id="map-canvas"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="selectdiv">
                <select id="routeSelect" tabindex="1"></select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 deletediv">
                <input type="button" id="delete" value="Delete" tabindex="2" class="btn btn-primary">
            </div>
            <div class="col-sm-3 autorefreshdiv">
                <input type="button" id="autorefresh" value="Auto Refresh Off" tabindex="3" class="btn btn-primary">
            </div>
            <div class="col-sm-3 refreshdiv">
                <input type="button" id="refresh" value="Refresh" tabindex="4" class="btn btn-primary">
            </div>
            <div class="col-sm-3 viewalldiv">
                <input type="button" id="viewall" value="View All" tabindex="5" class="btn btn-primary">
            </div>
        </div>
    </div>   
		 
		 
		 
        <!--/Content Box-->

        <div id="footers" class="col-md-12 hidden-print text-center">
           
        </div>
    </div>
</div>
<script type="text/javascript" src="js/my/jquery-3.1.1.min.js"></script>
</body>
</html>