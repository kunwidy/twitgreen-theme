<?php
	include 'module/header2.php';
	//include 'module/infographic-global.php';
?>
	<div class="container">
		<div class="row">
			
			<div class="span12">
			<h2>DAFTAR TREE YANG DIDUKUNG :</h2>
			</div>
			
			<div id="big-content" class="span9">
				
				<ul id="new-projects" class="thumbnails">
					<?php
						$i = 0;
						while ( $i <= 8) {
							include 'module/content-lot-as-user.php';
							$i ++;
						}
					?>
				</ul>
				<?php include 'module/pagination.php'; ?>
			</div>
			<div id="sidebar" class="span3">
				<?php
					include 'module/widget-sponsor-banner.php';
				?>
				<!-- stats content -->
					<div id="project-stats" class="side-content">
						<ul id="data-lot">
							<h1>356 lot</h1>
							<li>2.300.000 pohon</li>
							<li>976 hektar</li>
							<li>500 Petani</li>
							<li><a href="archive-lot-map-view.php">Lihat Peta</a></li>
						</ul>
					</div>
					<!-- /stats content -->
				<?php
				include 'module/widget-filter-by-status.php';
				?>
				
			</div>
		</div>
	</div>
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>