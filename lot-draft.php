<!-- header -->
<?php include 'header.php'; ?>

	<?php include 'archive-block.php'; ?>
	
	<!-- middle content -->
	<div class="container">
		<div class="row">
		
				<!-- big content -->
				<div id="big-content" class="span9">
					
					<?php include 'archive-block-perproject.php'; ?>
					
					<h2>DAFTAR LOT DRAFT :</h2>
					<?php include 'archive-lot2.php'; ?>
					
					<?php include 'pagination.php'; ?>
					
					
				</div>
				<!-- /big content -->
				
				<!-- sidebar content -->
				<div id="sidebar" class="span3">
					
					<!-- sponsor -->
					<div class="sponsor-banner center side-content">
						<h4 id="sidebar-title">Sponsor</h4>
						<a href="lot-sponsorship.php"><img src="upload/banner-sponsor.jpg" alt="#"></a>
					</div>
					<!-- /sponsor -->
					
					<!-- other project -->
					<div id="list-project" class="side-content">
						<h4 id="sidebar-title">Project terkait</h4>
						<ul id="data-lot">
							<li><a class="active" href="#">Menabung 100 juta pohon pertamina sobat bumi</a></li>
							<li><a href="#">Bojongsoan Green movement 2013</a></li>
							<li><a href="#">Nusantara Hijau</a></li>
							<li><a href="#">Gerakan 1 rumah 1 pohon</a></li>
						</ul>
					</div>
					<!-- /other project -->
					
					<?php include 'featured-relawan.php'; ?>
					<div class="clearfix"></div><br/>
					
					<?php include 'side-search-by-stats.php'; ?>
					
				</div>
				<!-- sidebar content -->
		</div>
	</div>
	
		<!-- if on mobile -->
	<?php include 'search-mobile.php'; ?>
	
<!-- footer -->
<?php include 'footer.php'; ?>