<!DOCTYPE html>
<?php session_start();?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--   <meta content="IE=edge" http-equiv="X-UA-Compatible"> -->
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="ico/favicon.ico" rel="shortcut icon">

    <title>My Web Site</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap theme -->
    <!--  <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dripicon.css">
    <link rel="stylesheet" href="css/typicons.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/mail.css">
    <link rel="stylesheet" href="js/tip/tooltipster.css">
    <link rel="stylesheet" type="text/css" href="js/vegas/jquery.vegas.css" />



</head>

<body role="document">

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- TOPNAV -->
    <img alt="" class="navbar-right" id="logo-aisa" src="1.png">
    <div class="row">
        <div class="col-lg-3">
            <ul class="nav navbar-nav navbar-left list-unstyled list-inline text-amber date-list">
                <li><i class="fontello-th text-amber"></i>
                </li>
                <li id="Date"></li>
            </ul>
            <ul class="nav navbar-nav navbar-left list-unstyled list-inline text-amber date-list">
                <li><i class="fontello-stopwatch text-amber"></i>
                </li>
                <li id="hours"></li>
                <li class="point">:</li>
                <li id="min"></li>
                <li class="point">:</li>
                <li id="sec"></li>
            </ul>


        </div>



    </div>
    <!-- END OF TOPNAV -->
    <!-- Comtainer -->
    <div class="container-fluid paper-wrap bevel tlbr">
        <div id="paper-top">
            <div class="row">
                <div class="col-sm-3 no-pad">

                    <a class="navbar-brand logo-text" href="#">CRR project</a>

                    <ul class="list-unstyled list-inline noft-btn">
                        <li data-toggle="tooltip" data-placement="bottom" title="Profile"><i class=" icon-user"></i>
                        </li>

                        <li data-toggle="tooltip" data-placement="bottom" title="Log Out"> <a href="../controller/log_out.php" class="text-white"><i class="icon-upload"></i></a>
                        </li>

                    </ul>
                </div>

                <div class="col-sm-6 no-pad">
                    <ul style="margin-top:8px;" class="nav navbar-nav navbar-left list-unstyled list-inline text-gray date-list news-list">
                        <!-- <li><i class="fontello-doc-text text-gray"></i>
                        </li> -->
                        <li>
                            <ul class="list-unstyled top-newsticker text-gray news-list">
                                <li>
                                    <strong>My Project,</strong>Made in AISA: Aviation IT Services Africa&nbsp;
                                </li>
                                <li>
                                    <strong>My Framer,</strong>is Tarik Akrout,php web trainer &nbsp;
                                </li>
                                <li>
                                    <strong>My Name,</strong>is Kais Neffati ,student in Computer Engineering &nbsp;
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>



            </div>
        </div>

       <!-- SIDE MENU -->
        <div class="wrap-sidebar-content">
            <div id="skin-select">
                <a id="toggle">
                    <span class="fa icon-menu"></span>
                </a>

                <div class="skin-part">
                    <div id="tree-wrap">
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav">
                                <li class="devider-title">
                                    <h3>
                                        <span>Menu</span>
                                    </h3>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="utilisateur">
                                        <i class=" fontello-mail-1"></i>
                                        <span>Utilisateurs</span>

                                    </a>
                                    <ul>
                                        <!--  <li class="hide-min-toggle">UI Element</li> -->
                                        <li>
                                            <!-- class="active" -->
                                            <a href="liste_utilisateurs.php" title="Liste">liste</a>
                                        </li>
                                        <li>
                                            <!-- class="active" -->
                                            <a href="ajouter_utilisateur.php" title="Ajouter">ajouter</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="Fonction">
                                        <i class=" fontello-mail-1"></i>
                                        <span>Fonction</span>

                                    </a>
                                    <ul>
                                        <!--  <li class="hide-min-toggle">UI Element</li> -->
                                        <li>
                                            <!-- class="active" -->
                                            <a href="liste_fonction.php" title="liste">Liste</a>
                                        </li>
                                        <li>
                                            <!-- class="active" -->
                                            <a href="ajouter_fonction.php" title="Ajouter">ajouter</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="UI">
                                        <i class="fontello-note"></i>
                                        <span>CRR</span>
                                    </a>
                                    <ul>
                                        <!--  <li class="hide-min-toggle">UI Element</li> -->
                                        <li>
                                            <!-- class="active" -->
                                            <a href="liste_crr.php" title="liste">liste</a>
                                        </li>
                                        <li><a href="ajouter_crr.php" title="ajouter">
                                            ajouter
                                        </a>
                                        </li>                               
                                    </ul>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="Projet">
                                        <i class=" fontello-mail-1"></i>
                                        <span>projet</span>

                                    </a>
                                    <ul>
                                        <!--  <li class="hide-min-toggle">UI Element</li> -->
                                        <li>
                                            <!-- class="active" -->
                                            <a href="liste_projet.php" title="liste">Liste</a>
                                        </li>
                                        <li>
                                            <!-- class="active" -->
                                            <a href="ajouter_projet.php" title="Ajouter">ajouter</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="side-dash">
                                
                                <ul class="side-dashh-list">
                                    
                                    <!-- end task item -->
                                    
                                    <!-- end task item -->
                                    
                                </ul>

                                
                                <div id="doughnutChart" class="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/skin-select -->
            <!-- END OF SIDE MENU -->

            <!-- Breadcrumb -->
            <div class="sub-board">
                <span class="header-icon"><i class="fontello-home"></i>
                </span>
                <ol class="breadcrumb newcrumb ng-scope">
                    <li>
                        <a href="#">
                            <span>
                            </span>Utilisateurs</a>
                    </li>
                    <li><a href="#">ajouter</a>
                    </li>
                </ol>
                <div class="dark" style="visibility: visible;">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control search rounded id_search" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of Breadcrumb -->




            <!-- CONTENT -->
            <div class="wrap-fluid" id="paper-bg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="fa fa-times"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="fontello-doc"></i> 
                                    <span>Data Table User</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <form action="../controller/show.php" method="post">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>matricule</th>
                                            <th>nom</th>
                                            <th>prenom</th>
                                            <th>email</th>
                                            <th>status</th>
                                            <th>fonction</th>
                                            <th>full_access</th>
                                            <th>login</th>
                                            <th>mots_pass</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                             include '../controller/show_user.php';                                 
                                        ?>                                                                                                                  
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>matricule</th>
                                            <th>nom</th>
                                            <th>prenom</th>
                                            <th>email</th>
                                            <th>status</th>
                                            <th>fonction</th>
                                            <th>full_access</th>
                                            <th>login</th>
                                            <th>mots_pass</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                </form>>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <br>



            </div>
            <!-- #/paper bg -->
        </div>
        <!-- ./wrap-sidebar-content -->

        <!-- / END OF CONTENT -->








        <!-- FOOTER -->
        <div id="footer">
            <div class="devider-footer-left"></div>
            <div class="time">
                <p id="spanDate"></p>
                <p id="clock"></p>
            </div>
 <div class="devider-footer"></div>
            <ul>
                <li><i class="fa fa-facebook-square"></i>
                </li>
                <li><i class="fa fa-twitter-square"></i>
                </li>
                <li><i class="fa fa-instagram"></i>
                </li>
            </ul>
        </div>
        <!-- / FOOTER -->
    </div>
    <!-- Container -->




    <!-- 
    ================================================== -->
    <!-- Main jQuery Plugins -->
    <script type='text/javascript' src="js/jquery.js"></script>

    <script type='text/javascript' src='js/bootstrap.js'></script>
    <script type='text/javascript' src='js/date.js'></script>
    <script type='text/javascript' src='js/slimscroll/jquery.slimscroll.js'></script>
    <script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
    <script type='text/javascript' src='js/sliding-menu.js'></script>
    <script type='text/javascript' src='js/scriptbreaker-multiple-accordion-1.js'></script>
    <script type='text/javascript' src='js/tip/jquery.tooltipster.min.js'></script>
    <script type='text/javascript' src="js/donut-chart/jquery.drawDoughnutChart.js"></script>
    <script type='text/javascript' src="js/tab/jquery.newsTicker.js"></script>
    <script type='text/javascript' src="js/tab/app.ticker.js"></script>
    <script type='text/javascript' src='js/app.js'></script>


 <script type='text/javascript' src='js/vegas/jquery.vegas.js'></script>
    <script type='text/javascript' src='js/image-background.js'></script>
    <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
    <script type="text/javascript" src="js/bg-changer.js"></script>






</body>

</html>

