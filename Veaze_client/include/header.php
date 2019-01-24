<div class="app-header1 header py-1 d-flex">
						<div class="container-fluid">
							<div class="d-flex">
								<a class="header-brand" href="index.html">
									<img src="assets/images/brand/logo-transeaze.png" class="header-brand-img" alt="Plight logo">
								</a>
								<div class="menu-toggle-button">
									<a class="nav-link wave-effect" href="#" id="sidebarCollapse">
										<span class="fa fa-bars"></span>
									</a>
								</div>
								<div class="mt-2">
									 <div class="searching mt-3 ml-2">

											<a href="javascript:void(0)" class="search-open mt-3">
												<i class="fa fa-search text-white"></i>
											</a>
										<div class="search-inline">
											<form>
												<input type="text" class="form-control" placeholder="Search here">
												<button type="submit">
													<i class="fa fa-search"></i>
												</button>
												<a href="javascript:void(0)" class="search-close">
													<i class="fa fa-times"></i>
												</a>
											</form>
										</div>
									</div>
								</div>
								<div class="d-flex order-lg-2 ml-auto">
									<div class="dropdown mt-1">
										<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
											<span class="avatar avatar-md brround" style="background-image: url(assets/images/Profile.jpg)"></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
											<div class="text-center">
												<a href="#" class="dropdown-item text-center font-weight-sembold user"><?php echo $data[0]['name']; ?></a>
												<div class="dropdown-divider"></div>
											</div>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon  mdi mdi-settings"></i> Settings
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
											</a>
											<a class="dropdown-item" href="login.html">
												<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
											</a>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>