<?php require("includes/php_included_files.php");?> 
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TransEaze- transaction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
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
                        <div class="main-menu">
                        <div class="menu-inner">
                            <?php require('includes/navigations.php') ?>
                        </div>
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
                                    <h4 class="page-title pull-left">Transaction</h4>
                                    <ul class="breadcrumbs pull-left">
                                        <li><a href="index.html">Home</a></li>
                                        <li><span>Transaction field</span></li>
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
                            <!-- Dark table start -->
                    <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Transaction Table</h4>
                                    <div class="data-tables datatable-dark">
                                        <table id="dataTable3" class="text-center" style="overflow-x:auto;">
                                            <thead class="text-capitalize">
                                                <tr>
                                                    <th>ID</th>
                                                    <!-- <th>Interface User</th> -->
                                                    <th>Name of User</th>
                                                    <th>Amount</th> 
                                                    <th>Status</th>
                                                    <th>Start Date</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i=0; $i<count($Transactions) ; $i++) { ?>
                                                   
                                                    
                                               
                                                <tr>
                                                    <td><?php echo $i+1 ?></td>
                                                    <td><?php echo $Transactions[$i]['name'] ?></td>
                                                    <td><span>&#8358;</span><?php echo $Transactions[$i]['amount'] ?></td>
                                                    <?php  $retVal = ($Transactions[$i]['status'] == 'processed' ) ? 'status-p bg-success' : 'status-p bg-danger' ;   ?>
                                                    <td><span class="<?php echo $retVal ?>"><?php echo $Transactions[$i]['status'] ?></span></td>
                                                    <td><?php echo $Transactions[$i]['date/time'] ?></td>
                                                    <?php } ?>
                                                </tr>
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dark table end -->
                        </div>
                    </div>
                </div>
                <!-- main content area end -->
                <!-- footer area start-->
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
                                        <h5>Enable User-view</h5>
                                        <div class="s-swtich">
                                            <input type="checkbox" id="switch1" />
                                            <label for="switch1">Toggle</label>
                                        </div>
                                    </div>
                                    <p>The user can operate there transaction from main screen</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
