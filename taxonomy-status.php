<?php
	include 'module/header.php';
	include 'module/infographic-global.php';
?>
	<div class="container">
		<div class="row">
			<div id="big-content" class="span9">
				<h2>DAFTAR LOT DRAFT :</h2>
				<ul id="new-projects" class="thumbnails">
					<?php
						$i = 0;
						while ( $i <= 8) {
							include 'module/content-lot.php';
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