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

                    <div class="wrapper" style="">
                        <!-- Sidebar Holder -->

                        <?php	require("include/SideNav.php"); ?>

                            <div class=" content-area " style="height:82vh;">
                                <div class="page-header">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </div>

                                <div class="row row-cards">
                                    <div class="col-sm-12 col-lg-6 col-xl-3">
                                        <div class="card card-img-holder">
                                            <div class="card-body list-icons">
                                                <div class="clearfix">
                                                    <div class="float-left  mt-2">
                                                        <span class="text-warning ">
															<img src="assets/images/brand/request.png" style="height: 60px;"/>
														</span>
                                                    </div>
                                                    <div class="float-right text-right">
                                                        <p class="card-text text-muted font-weight-semibold mb-1">Request</p>
                                                        <h2><?php echo $request; ?></h2>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <p class="text-muted mb-0 pt-4"><i class="si si-arrow-down-circle text-warning mr-1" aria-hidden="true"></i> Today Orders</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6 col-xl-3">
                                        <div class="card card-img-holder">
                                            <div class="card-body list-icons">
                                                <div class="clearfix">
                                                    <div class="float-left  mt-2">
                                                        <span class="text-success ">
															<img src="assets/images/brand/balance.png" style="height: 60px;"/>
														</span>
                                                    </div>
                                                    <div class="float-right text-right">
                                                        <p class="card-text text-muted font-weight-semibold mb-1">Balance</p>
                                                        <h2>$ 10,000</h2>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <p class="text-muted mb-0 pt-4"><i class="si si-arrow-up-circle text-success mr-1"></i>Today Sales</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6 col-xl-3">
                                        <div class="card card-img-holder">
                                            <div class="card-body list-icons">
                                                <div class="clearfix">
                                                    <div class="float-left  mt-2">
                                                        <span class="text-info ">
															<img src="assets/images/brand/profit.png" style="height: 60px;"/>
														</span>
                                                    </div>
                                                    <div class="float-right text-right">
                                                        <p class="card-text text-muted font-weight-semibold mb-1">Profit</p>
                                                        <h2>65%</h2>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <p class="text-muted mb-0 pt-4"><i class="si si-exclamation text-info mr-1"></i>Today profit</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6 col-xl-3">
                                        <div class="card card-img-holder">
                                            <div class="card-body list-icons">
                                                <div class="clearfix">
                                                    <div class="float-left  mt-2">
                                                        <span class="text-primary ">
														<img src="assets/images/brand/current-price.png" style="height: 60px;"/>
														</span>
                                                    </div>
                                                    <div class="float-right text-right">
                                                        <p class="card-text text-muted font-weight-semibold mb-1">Current Plan</p>
                                                        <h2>$99</h2>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <p class="text-muted mb-0 pt-4"><i class="si si-check mr-1 text-primary"></i> Recent Activities</p>
                                                </div>
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
        <!--  -->

        <!-- Back to top -->
        <a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

        <?php	require("include/scripts.php"); ?>
    </body>

    </html>