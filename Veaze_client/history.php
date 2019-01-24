<?php require("core/init.php"); 
require("core/getData.php");
?>
<!doctype html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from www.spruko.com/demo/plight/empty.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Oct 2018 13:19:36 GMT -->
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

					<div class="wrapper"style="">
						<!-- Sidebar Holder -->
						<?php	require("include/sideNav.php"); ?>

						
					<div class=" content-area" style="height: 82vh;">
						<div class="page-header">
									<h4 class="page-title">History</h4>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">History</li>
									</ol>
								</div>
							<div class="row mg-t-20">
							<div class="col-12">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title ">History</h3>
									</div>
									<!-- <div class="table-responsive">
										<div id="toolbar">
												<select class="form-control">
														<option value="">Export Basic</option>
														<option value="all">Export All</option>
														<option value="selected">Export Selected</option>
												</select>
										</div> -->
										<table class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap"
												 data-toggle="table"
												 data-search="true"
												 data-filter-control="true" 
												 data-show-export="true"
												 data-click-to-select="true"
												 data-toolbar="#toolbar">
											<thead>
											  <tr>
												<th data-field="ID" data-sortable="true">ID</th>
												<th data-field="Transaction ID" data-filter-control="input" data-sortable="true">Parameters</th>
												<th data-field= "Status" data-filter-control="select" data-sortable ="true"> Status </th>
												<th data-field="Date" data-filter-control="select" data-sortable="true">Data/Time</th>
				
											  </tr>
											</thead>
											<tbody>
											<?php for ($i=0; $i<count($Transactions) ; $i++) {  ?>
												<tr>
												<td data-field="ID"><?php echo $i+1; ?></td>
												<td><a href="<?php echo $Transactions[$i]['image_parameter'] ?>"class="btn btn-sm btn-info">Image</a><span>,</span><?php echo  $Transactions[$i]['bvn_parameter']; ?>  </td>
												<td class="" href="#"><?php echo $Transactions[$i]['status']; ?></td>
												<td><?php echo $Transactions[$i]['date/time'] ?></td>
											
											  </tr>
											<?php  }  ?>
												<!-- <td data-field="ID">1</td>
												<td>INC0001020</td>
												<td class="btn btn-sm btn-info" href="#">Image url</td>
												<td>15/11/2018</td>
												<td>Approved</td>
											  </tr>
											  <tr>
												<td>2</td>
												<td>INC0001001</td>
												<td class="btn btn-sm btn-info" href="#" >Image url</td>
												<td>25/11/2018</td>
												<td>Approved</td>
												
											  </tr>
											  <tr>
												<td>3</td>
												<td >INC0002431</td>
												<td class="btn btn-sm btn-info" href="#">Image url</td>
												<td >5/12/2018</td>
												<td>Declined</td>
												
											  </tr>
											  <tr>
												<td>4</td>
												<td >INC0005611</td>
												<td class="btn btn-sm btn-info" href="#">Image url</td>
												<td >14/12/2018</td>
												<td>Approved</td>
											  </tr> -->
											  
											</tbody>
										  </table>
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

			<!--filter-->
			<?php	require("include/scripts.php"); ?>

 	
 
 
 <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js'></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js'></script>
 <script src='http://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js'></script>
 <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js'></script> -->
  <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js'></script> -->
 <script  src="js/index.js"></script>
</body>
</html>