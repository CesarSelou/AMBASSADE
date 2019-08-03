<!doctype html>
<html lang="en" dir="ltr">
<head>
	<?php
	 include("pages/head.php");
	?>
</head>

	<body class="">
		<div id="global-loader"></div>
		<div class="page">
			<div class="page-main" >


				<!-- breadcome -->
						<?php
					 include("pages/breadcome.php");
					?>
					<!-- End breadcome-->

        <!-- topbar -->
            <?php
	         include("pages/topbar.php");
	       ?>
	    <!-- End topbar--> 

        <!-- nav_mobile.php -->
        <?php
	         include("pages/nav_mobile.php");
	       ?>

	        <!--End nav_mobile.php -->
				
				<div class="wrapper">
					<!-- Sidebar Holder -->
					
					<!--  End Sidebar Holder -->

					<div class=" content-area">
						
    
                     <!-- content -->
						
                    <?php
					 include("pages/content.php");
					?>
					     <!-- End content-->
					</div>
				</div>
			</div>

			<!--footer-->
			<?php 
              include("pages/footer.php");
			?>
			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard Core -->
		<?php
           include("pages/js.php");
		?>
	</body>
</html>