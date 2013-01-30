<?php
  include 'module/header-inside.php';
?>
	<div class="container">
		<div class="row">
			<div class="span9">
				<h2>Daftar Lot Sigit Sedayu Sebagai</h2>
				<p>Lihat sebagai : <button class="btn btn-success btn-small" type="button"><i class="icon-globe"></i> Relawan</button> <button class="btn btn-primary btn-small" type="button"><i class="icon-lightbulb"></i> Investor</button>
				
				<ul id="new-projects" class="thumbnails">
					<?php
						$i = 0;
						while ( $i <= 5) {
							include 'module/content-lot-as-user.php';
							$i ++;
						}
					?>
				</ul>
				
				<?php include 'module/pagination.php'; ?>
			</div>
		
			<div class="span3">
				<?php include 'module/user-info.php'; ?>
			</div>
			<!-- sidebar widget -->
				<div id="sidebar" class="span3">
					<?php include 'module/widget-filter-by-status.php';?>
				</div>
			<!-- /sidebar widget -->
		</div>
	</div>
	
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>
