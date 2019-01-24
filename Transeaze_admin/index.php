
<?php require("includes/php_included_files.php");?> 



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transeaze- Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
            <div class="page-container">
                <!-- sidebar menu area start -->
                <div class="sidebar-menu">
                    <div class="sidebar-header">
                        <div class="logo">
                            <!-- <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a> -->
                        </div>
                    </div>
                    <div class="main-menu">
                        <div class="menu-inner">
                            <?php require('includes/navigations.php') ?>
                        </div>
                    </div>
                </div>
                <!-- sidebar menu area end -->
                <!-- main content area start -->
                <div class="main-content">
                    <!-- header area start -->
                    <div class="header-area">
                        <div class="row align-items-center">
                            <!-- nav and search button -->
                            <div class="col-md-6 col-sm-8 clearfix">
                                <div class="nav-btn pull-left">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="search-box pull-left">
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Search..." required>
                                        <i class="ti-search"></i>
                                    </form>
                                </div>
                            </div>
                            <!-- profile info & task notification -->
                            <div class="col-md-6 col-sm-4 clearfix">
                                <ul class="notification-area pull-right">
                                    <li class="settings-btn">
                                        <i class="ti-settings"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- header area end -->
                    <!-- page title area start -->
                    <div class="page-title-area">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="breadcrumbs-area clearfix">
                                    <h4 class="page-title pull-left">Dashboard</h4>
                                    <ul class="breadcrumbs pull-left">
                                        <li><a href="index.html">Home</a></li>
                                        <li><span>Dashboard</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 clearfix">
                            <?php require('includes/adminname.php') ?>
                            </div>
                        </div>
                    </div>
                    <!-- page title area end -->
                    <div class="main-content-inner">
                        <div class="row">
                            <!-- seo fact area start -->
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-4 mt-5 mb-3">
                                        <div class="card">
                                            <div class="seo-fact sbg1">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-statistic"></i> Total Transaction</div>
                                                    <h2><?php echo $totaltransaction ?></h2>
                                                </div>
                                                <canvas id="seolinechart1" height="50"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-md-5 mb-3">
                                        <div class="card">
                                            <div class="seo-fact sbg2">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-money"></i> Total Income</div>
                                                    <h2><span>&#8358;</span><?php echo $Totalincome[0]['amount'] ?></h2>
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-md-5 mb-3">
                                        <div class="card">
                                            <div class="seo-fact sbg3">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-user"></i>Total User</div>
                                                    <h2><?php echo $TotalUser ?></h2>
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </div> 
                                    </div>
                                </div>  
                        </div>
                    </div>
                </div>
                <!-- offset area start -->
            <div class="offset-area">
                <div class="offset-close"><i class="ti-close"></i></div>
                <ul class="nav offset-menu-tab">
                    <!-- <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li> -->
                    <li><a data-toggle="tab" href="#settings" style=" position: absolute; left: 120px;">Settings</a></li>
                </ul>
                <div class="offset-content tab-content">
                    <div id="settings" class="tab-pane fade in show active">
                        <div class="offset-settings">
                            <h4>General Settings</h4>
                            <div class="settings-list">
                                <div class="s-settings">
                                    <div class="s-sw-title">
                                        <h5>Notifications</h5>
                                        <div class="s-swtich">
                                            <input type="checkbox" id="switch1" />
                                            <label for="switch1">Toggle</label>
                                        </div>
                                    </div>
                                    <p>Keep it 'On' When you want to get all the notification.</p>
                                </div>
                                <div class="s-settings">
                                    <div class="s-sw-title">
                                        <h5>Show recent activity</h5>
                                        <div class="s-swtich">
                                            <input type="checkbox" id="switch2" />
                                            <label for="switch2">Toggle</label>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </div>
                                <div class="s-settings">
                                    <div class="s-sw-title">
                                        <h5>Show your emails</h5>
                                        <div class="s-swtich">
                                            <input type="checkbox" id="switch3" />
                                            <label for="switch3">Toggle</label>
                                        </div>
                                    </div>
                                    <p>Show email so that easily find you.</p>
                                </div>
                                <div class="s-settings">
                                    <div class="s-sw-title">
                                        <h5>Show Task statistics</h5>
                                        <div class="s-swtich">
                                            <input type="checkbox" id="switch4" />
                                            <label for="switch4">Toggle</label>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </div>
                                <div class="s-settings">
                                    <div class="s-sw-title">
                                        <h5>Notifications</h5>
                                        <div class="s-swtich">
                                            <input type="checkbox" id="switch5" />
                                            <label for="switch5">Toggle</label>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offset area end -->
                        <!--footer-->
                        <footer class="footer-area">
                            <div class="container">
                                <div class="row align-items-center flex-row-reverse">
                                    <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                                        Copyright © 2018 <a href="#"></a>. Designed by <a href="#">fsd</a> All rights reserved.
                                    </div>
                                </div>
                            </div>
                        </footer> 
                <!-- footer area end-->
            </div>
            <!-- page container area end -->
            <!-- offset area start -->
            
        
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
