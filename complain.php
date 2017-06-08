<?php
        $con=mysqli_connect('localhost','id1045959_gayan','aberathna');
        mysqli_select_db($con,'id1045959_fleeto');
        echo mysqli_error($con);
        $sql = "SELECT * FROM tbl_complain";
        $records = mysqli_query($con,$sql);

?>



<!DOCTYPE html>
<html class="english">
<head>
    <meta charset="UTF-8"/>
    <title>Fleet Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="stylesheet" type="text/css" href="css/all.css"/>
    <script src="js/all.js" type="text/javascript" charset="UTF-8"></script>
    <script src="new/iframeResizer.contentWindow.min.js"></script>
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="style/bootstraps.css"/>
    <link type="text/css" rel="stylesheet" href="style/styless.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
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
                 <i class="fa fa-envelope-open fa-3x" aria-hidden="true"></i></div>
        </div>
        <ul class="list-unstyled menu-parent" id="mainMenu">

            <li>
                <a tabindex="-1" href="home.php"
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
            <li class="active">
                <a tabindex="-1" href="complain.html"
                   class="waves-effect waves-light">
                    <i class="fa fa-envelope-open" aria-hidden="true"></i>
                    <span class="text">Complains</span>
                </a>
            </li>
            <li>
                <a href=""
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
                    <a tabindex="-1" href=""><h3>Fleet Managment</h3></a></div>
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
                                   class="logout_button" tabindex="-1"><i class="ion-power"></i><span class="text">Logout</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="big_wrapper">
            <header id="top_header">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/business.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="images/angri.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="images/egg.jpg" alt="Flower">
                        </div>

                        <div class="item">
                            <img src="images/sol.jpg" alt="Flower">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next </span>
                    </a>
                </div>
            </header>

            <table id="table">
                <thead>
                <tr class="heder">
                    <th>Complain Number</th>
                    <th>Customer Name</th>
                    <th>Phone Number</th>
                    <th>E-mail</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Delete</th>
                    </tr>
                </thead>
            <?php
                while($complain= mysqli_fetch_assoc($records)){
                    echo "<tr>";
                    echo "<td>".$complain['c_id']."</td>";
                    echo "<td>".$complain['name']."</td>";
                    echo "<td>".$complain['phone_number']."</td>";
                    echo "<td>".$complain['E-mail']."</td>";
                    echo "<td>".$complain['date']."</td>";
                    echo "<td>".$complain['description']."</td>";
                    echo "<td><a class='btn btn-danger' href='delete2.php?cid=".$complain['c_id']."'>Delete</a> </td>";
                    echo '<td><input type="reset" name="deleteItem" value="Delete '.$complain['c_id'].'" /></td>"';
                    echo "</tr>";
                }

            ?>
            </table>
             <style>
                 #table,.header,.coloumn
                 {
                     width: 90%;
                     border:1px solid black;
                     margin: 5vw;
                     background-color :rgba(0, 0, 0, 0.5);
                     color:#000000;

                 }
                 th,td
                 {
                     padding:2vw;
                     border:1px solid #000000;
                 }

             </style>
            <!--=======================Header==================================================-->

            <div class="slider_wrapper ">
                <div id="camera_wrap" class="">
                    <div src="images/slide.jpg"></div>
                    <div src="images/slide1.jpg"></div>
                    <div src="images/slide2.jpg"></div>
                </div>
            </div>



            <!--===================================fotter====================================================-->



        <div id="footers" class="col-md-12 hidden-print text-center">
            <div class="socials" align="right">
                <a href="https://www.twitter.com"><img src="images/twitter.png" width="60" height="60"></a>
                <a href="https://www.facebook.com"><img src="images/fb.png" width="60" height="60"></a>
                <a href="https://www.gmail.com"><img src="images/images (7).png" width="60" height="60"></a>

            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="js/my/jquery-3.1.1.min.js"></script>
    </div>
</body>
</html>