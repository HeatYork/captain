<!DOCTYPE html>
<html>
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>HypeNode</title>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <!-- BEGIN GLOBAL PLUGINS STYLES -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL PLUGINS STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS STYLES-->
        <!-- END PAGE LEVEL PLUGINS STYLES-->

        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="css/components.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="css/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN THEME PAGE LEVEL STYLES -->
        <!-- END THEME PAGE LEVEL STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">

                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">

                                <!-- BEGIN LOGO -->
                                <div class="page-logo" onclick="javascript:location.href='http://dev-hypenode.tw/design/index.php'">
                                    <h2 class="font-green" >
                                        HypeNode
                                    </h2>
                                </div>
                                <!-- END LOGO -->

                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->

                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ui class="nav nav navbar-nav pull-right">
                                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <span class="username username-hide-mobile">Nick</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="">
                                                        <i class="icon-user"></i>資訊
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="icon-envelope-open"></i>通知
                                                        <span class="badge badge-danger">3</span>
                                                    </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="">
                                                        <i class="icon-settings"></i>設定
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="icon-lock"></i>修改密碼
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                            <span class="sr-only"></span>
                                            <i class="icon-logout"></i>
                                        </li>
                                        <!-- END QUICK SIDEBAR TOGGLER -->
                                    </ui>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->

                            </div>
                        </div>
                        <!-- END HEADER TOP -->

                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                                <!-- BEGIN MEGA MENU -->
                                <div class="hor-menu">
                                    <ul class="nav navbar-nav">

                                        <li class="menu-dropdown classic-menu-dropdown">
                                            <a href="index.php?page=dashboard">
                                                <i class="fas fa-tachometer-alt"></i>
                                                儀表板
                                            </a>
                                        </li>

                                        <li class="menu-dropdown classic-menu-dropdown">
                                            <a>
                                                <i class="fas fa-clipboard-list"></i>
                                                推播紀錄
                                            </a>
                                        </li>

                                        <li class="menu-dropdown classic-menu-dropdown">
                                            <a href="index.php?page=push">
                                                <i class="fas fa-paper-plane"></i>
                                                建立推播活動
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="row page-title">
                                        <h1 class="col-xs-12">
                                            主標題
                                            <small>
                                                子標題
                                            </small>
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                    <!-- BEGIN PAGE TOOLBAR -->
                                    <div class="page-toolbar">
                                        <!-- TOOL BAR -->
                                    </div>
                                    <!-- END PAGE TOOLBAR -->
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content-inner">
                                <div class="container">
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content">
                                        <div class="mt-content-body">

                                        <?php if($_GET['page'])include_once $_GET['page'].".php"; ?>

                                        </div>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <!-- BEGIN FOOTER -->
                    <!-- BEGIN PRE-FOOTER -->
                    <div class="page-prefooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>關於我們</h2>
                                    <p> 所以說我們嘰哩呱啦嘰哩呱啦嘰哩呱啦嘰哩呱啦嘰哩呱啦嘰哩呱啦嘰哩呱啦嘰哩呱啦嘰哩呱啦. </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Follow Us On</h2>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>聯絡我們</h2>
                                    <address class="margin-bottom-40"> Phone: 800 123 3456
                                        <br> Email:
                                        <a href="mailto:info@metronic.com">info@metronic.com</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container">
                            <a target="_blank" href="http://keenthemes.com">
                                HypeNode
                            </a>
                            &copy; 2018
                        </div>
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>

        <!-- BEGIN GLOBAL PLUGINS PLUGINS -->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="js/fontawesome-all.min.js" type="text/javascript"></script>
        <!-- END GLOBAL PLUGINS PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="js/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <!-- END PAGE LEVEL SCRIPTS -->

        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

    </body>

</html>