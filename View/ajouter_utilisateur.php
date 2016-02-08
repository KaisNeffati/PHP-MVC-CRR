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
    
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/fileinput.js" type="text/javascript"></script>
        <script src="js/fileinput_locale_fr.js" type="text/javascript"></script>
        <script src="js/fileinput_locale_es.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
    
    



</head>

<body role="document" >

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- TOPNAV -->
       <img alt="" class="navbar-right" id="logo-aisa" src="1.png">

    <div class="row">
<div class="col-lg-3">
            <ul class="nav navbar-nav navbar-left list-unstyled list-inline text-amber date-list">
                <li>
                </li>
                <li id="Date">Thu 25 Aug 2015</li>
            </ul>
            <ul class="nav navbar-nav navbar-left list-unstyled list-inline text-amber date-list">
                
                <li id="hours">14</li>
                <li class="point">:</li>
                <li id="min">33</li>
                <li class="point">:</li>
                <li id="sec">41</li>
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

                                <h3 class="box-title"><i class="fontello-doc"></i>
                                    <span>Ajouter utilisateur </span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body compose_mail">
                               
                                    <form role="form" method="POST">
                                    <label> Matricule :</label>
                                    <div class="form-group">

                                        <input type="number" name="matricule_textbox" placeholder="...." class="form-control">
                                    </div>
                                    <label> Nom :</label>
                                    <div class="form-group">

                                        <input type="text" name="nom_textbox" placeholder="...." class="form-control">
                                    </div>
                                    <label> Prenom :</label>
                                    <div class="form-group">

                                        <input type="text" name="prenom_textbox"  placeholder="...." class="form-control">
                                    </div>                                    
                                    <label> email :</label>
                                    <div class="form-group">

                                        <input type="email" name="email_textbox"  placeholder="....@...." class="form-control">
                                    </div>
                                    <label> Status :</label>
                                    <div class="form-group">

                                        <input type="text" name="status_textbox"  placeholder="...." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label> fonction :</label>
                                        <select class="form-control" name="fonction_liste_deroulant">
                                           <?php
                                         include '../controller/set_code_libelle_fonction.php';
                                         ?>
                                        </select>
                                    </div>
                                    <label> full_access :</label>
                                    <div class="form-group">

                                        <input type="text" name="full_access_textbox"  placeholder="...." class="form-control">
                                    </div>
                                    <label> Login :</label>
                                    <div class="form-group">

                                        <input type="text" name="login_textbox"  placeholder="...." class="form-control">
                                    </div>
                                    <label> Mots de passe :</label>
                                    <div class="form-group">

                                        <input type="text" name="mots_de_passe_textbox"  placeholder="...." class="form-control">
                                    </div>
                                            
            <hr>
            <form enctype="multipart/form-data">
                
                <div class="form-group">
                    <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#">
                </div>
            </form> 
            <hr>
        
                                    

                                    
                                    <button class="btn bg-aqua pull-right" type="submit">
                                        <span class="fontawesome-save"></span>Save in Database</button>
                                    
                                    <div style="clear:both;"></div>
                                    <br>
                                    <br>
                                    </form>
                                        <?php
                                        include '../controller/insert_user_controller.php';
                                        ?>
                            </div>
                            
                            


	
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>

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

    <!-- Editor -->
    <script src="js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
    $('#file-fr').fileinput({
        language: 'fr',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
	});
    /*
    $(".file").on('fileselect', function(event, n, l) {
        alert('File Selected. Name: ' + l + ', Num: ' + n);
    });
    */
	$("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
	$("#file-4").fileinput({
		uploadExtraData: {kvId: '10'}
	});
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });    
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    /*
    $('#file-4').on('fileselectnone', function() {
        alert('Huh! You selected no files.');
    });
    $('#file-4').on('filebrowse', function() {
        alert('File browse clicked for #file-4');
    });
    */
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
        });
        */
    });
	</script>
    <script>
    (function($) {
        "use strict";
        CKEDITOR.replace('editor1');

        $(".textarea").wysihtml5();
    })(jQuery);
    </script>






</body>

</html>
