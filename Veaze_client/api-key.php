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

					<div class="wrapper"style="height: 82vh;">
						<!-- Sidebar Holder -->
						<?php	require("include/SideNav.php"); ?>

						
					<div class=" content-area">
						<div class="page-header">
									<h4 class="page-title">Api settings</h4>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Api settings</li>
									</ol>
						</div>
						<label class="form-label">Api key</label>
							<div class="form-group">
								<div class="input-group">
								<input type="text" class="form-control" id="apiKey" placeholder="Read Only Text area." value="<?php echo $data[0]['api_key'] ?>" readonly="">
											<button class="btn btn-primary" onclick="myFunction()">Copy</button>
								</div>
							</div>

						<script type="text/javascript">
							function myFunction() {
								var copyText = document.getElementById("apiKey");
								copyText.select();
								document.execCommand("copy");
							alert("Api Key copied:" + copyText.value);
							}

						</script>


					</div>
				</div>
			</div>

			<?php	require("include/footer.php"); ?>
		</div>

		<!-- Dashboard js -->
		<?php	require("include/scripts.php"); ?>
	</body>

<!-- Mirrored from www.spruko.com/demo/plight/empty.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Oct 2018 13:19:36 GMT -->
</html>