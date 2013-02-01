<?php
	include 'module/header2.php';
	//include 'module/infographic-global.php';
?>
	<div class="container">
		<div class="row">
			<div class="span12">
			<h2>DAFTAR PROJECT :</h2>
			</div>
			
			<div id="big-content" class="span9">
				
				<ul id="new-projects" class="thumbnails">
					<?php
						$i = 0;
						while ( $i <= 8) {
							include 'module/content-project.php';
							$i ++;
						}
					?>
				</ul>
				<?php include 'module/pagination.php'; ?>
			</div>
			<div id="sidebar" class="span3">
				<?php
					// include 'module/widget-sponsor-banner.php';
					include 'module/widget-list-project.php'; // jadi list project
					include 'module/widget-featured-relawan.php';
					include 'module/widget-filter-by-status.php';
				?>
			</div>
		</div>
	</div>
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>