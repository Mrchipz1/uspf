<?php require("core/init.php"); 
require("core/getData.php");
?>
<!doctype html>
<html lang="en" dir="ltr">
	<head>
	<?php	require("include/headTags.php"); ?>
	</head>
	
	<body class="" >
		<div id="global-loader" ></div>
			<div class="page">
				<div class="page-main">
				<?php	require("include/header.php"); ?>
					<!-- End Of header -->

					<!-- Begining of sidebar -->
					

					<div class="wrapper"style="height: 82vh;">
						<!-- Sidebar Holder -->
						<?php	require("include/SideNav.php"); ?>
						
					<div class=" content-area" >
						<div class="page-header">
									<h4 class="page-title">Buy plan</h4>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Buy plan</li>
									</ol>
								</div>

						<div class="row" >
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#9f78ff" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Personal</text>
										</svg>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$15 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 2 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>3 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 1 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center">
										<!-- <a class="btn btn-lg btn-primary btn-block btn-loading" href="#">Purchase Now!</a> -->
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#fdb901" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Premium</text>
										</svg>
									</div>
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
										<!-- <a class="btn btn-lg btn-warning btn-block" href="#">Purchase Now!</a> -->
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#28afd0" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Corporate</text>
										</svg>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$35 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 4 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>6 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center">
										<!-- <a class="btn btn-lg btn-info btn-block" href="#">Purchase Now!</a> -->
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#fa626b" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Business</text>
										</svg>
									</div>
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
										<!-- <a class="btn btn-lg btn-danger btn-block" href="#">Purchase Now!</a> -->
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