<?php require("core/init.php"); 
require("core/getData.php");
?>
    <!doctype html>
    <html lang="en" dir="ltr">

    <head>
        <?php	require("include/headTags.php"); ?>
    </head>

    <body class="">
        <div id="global-loader"></div>
        <div class="page">
            <div class="page-main">
                <?php	require("include/header.php"); ?>
                    <!-- End Of header -->

                    <!-- Begining of sidebar -->

                    <div class="wrapper" style="height: 82vh;">
                        <!-- Sidebar Holder -->
                        <?php	require("include/SideNav.php"); ?>

                            <div class=" content-area">
                                <div class="page-header">
                                    <h4 class="page-title">Buy plan</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Buy plan</li>
                                    </ol>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
                                        <div class="panel price  panel-color">
											<div class="panel-body text-center">
                                                <p class="lead"><strong>$15 /</strong> month</p>
                                            </div>
                                            <ul class="list-group list-group-flush text-center">
                                                <li class="list-group-item"><strong> 2 Free</strong> Domain Name</li>
                                                <li class="list-group-item"><strong>3 </strong> One-Click Apps</li>
                                                <li class="list-group-item"><strong> 1 </strong> Databases</li>
                                                <li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
                                                <li class="list-group-item"><strong> 24/7</strong> support</li>
                                            </ul>
                                            <div class="panel-footer text-center">
                                                <a class="btn btn-lg btn-primary btn-block" href="#">Purchase Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
                                        <div class="panel price  panel-color">
											<div class="panel-body text-center">
                                                <p class="lead"><strong>$25 /</strong> month</p>
                                            </div>
                                            <ul class="list-group list-group-flush text-center">
                                                <li class="list-group-item"><strong> 3 Free</strong> Domain Name</li>
                                                <li class="list-group-item"><strong>4 </strong> One-Click Apps</li>
                                                <li class="list-group-item"><strong> 2 </strong> Databases</li>
                                                <li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
                                                <li class="list-group-item"><strong> 24/7</strong> support</li>
                                            </ul>
                                            <div class="panel-footer text-center">
                                                <a class="btn btn-lg btn-warning btn-block" href="#">Purchase Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
                                        <div class="panel price  panel-color">
											<div class="panel-body text-center">
                                                <p class="lead"><strong>$35 /</strong> month</p>
                                            </div>
                                            <ul class="list-group list-group-flush text-center">
                                                <li class="list-group-item"><strong> 4 Free</strong> Domain Name</li>
                                                <li class="list-group-item"><strong>6 </strong> One-Click Apps</li>
                                                <li class="list-group-item"><strong> 2 </strong> Databases</li>
                                                <li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
                                                <li class="list-group-item"><strong> 24/7</strong> support</li>
                                            </ul>
                                            <div class="panel-footer text-center">
                                                <a class="btn btn-lg btn-info btn-block" href="#">Purchase Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
                                        <div class="panel price  panel-color"> 
											<div class="panel-body text-center">
                                                <p class="lead"><strong>$99 /</strong> month</p>
                                            </div>
                                            <ul class="list-group list-group-flush text-center">
                                                <li class="list-group-item"><strong> 5 Free</strong> Domain Name</li>
                                                <li class="list-group-item"><strong>8 </strong> One-Click Apps</li>
                                                <li class="list-group-item"><strong> 2 </strong> Databases</li>
                                                <li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
                                                <li class="list-group-item"><strong> 24/7</strong> support</li>
                                            </ul>
                                            <div class="panel-footer text-center">
                                                <a class="btn btn-lg btn-danger btn-block" href="#">Purchase Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>
            </div>

            <!--footer-->
            <?php	require("include/footer.php"); ?>
                <!-- End Footer-->
        </div>

        <?php	require("include/scripts.php"); ?>
    </body>

    </html>