<!-- header -->
<?php include 'module/header.php'; ?>

	<?php include 'module/archive-block.php'; ?>
	
	<!-- middle content -->
	<div class="container">
		<div class="row">
		
				<!-- big content -->
				<div id="big-content" class="span9">
					
					<?php include 'module/archive-block-perproject.php'; ?>
					
					<h2>DAFTAR LOT DRAFT :</h2>


				<!--daftar lots-->
				<div class="">
					<ul id="new-projects" class="thumbnails">
						<!--tampilan untuk lot-->

						<?php
							$i = 0;
							while ( $i <= 8) {
								include 'module/content-lot.php';
								$i ++;
							}
						?>
						
						<!--/tampilan untuk lot-->
					</ul>
						
				</div>
				<!--/daftar lot-->
				<br/><hr/>

					
					<?php include 'module/pagination.php'; ?>
					
					
				</div>
				<!-- /big content -->
				
				<!-- sidebar content -->
				<div id="sidebar" class="span3">
					
					<?php include 'module/widget-sponsor-banner.php'; ?>

					<?php include 'module/widget-list-project.php'; ?>
					
					<?php include 'module/widget-featured-relawan.php'; ?>

					<?php include 'module/widget-filter-by-status.php'; ?>
					
					<?php // include 'module/side-search-by-stats.php'; ?>
					
				</div>
				<!-- sidebar content -->
		</div>
	</div>
	
		<!-- if on mobile -->
	<?php include 'module/search-mobile.php'; ?>
	
<!-- footer -->
<?php include 'module/footer.php'; ?>