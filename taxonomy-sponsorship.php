<?php
	include 'module/header2.php';
?>
	<div class="container">
		<div class="row">
				<div id="big-content" class="span9">
		
					<div id="featured-project">
						<div id="text-featured">
							<h1 class="large center">
								<a href="#"><img src="upload/sponsorship.jpg" alt=""/></a>
							</h1>
						</div>
						<hr/>
						<div class="row">
							<div class="span5">
								<div class="social-plugin">
									<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://twitgreen.com" data-via="kunw" data-related="kunw" data-hashtags="twitgreen" data-dnt="true">Tweet</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
									<div class="fb-like" data-href="http://twitgreen.com" data-send="false" data-layout="button_count" data-width="250" data-show-faces="false"></div>
								</div>
							</div>
							<div class="span2">
								<div class="btn-inset">
									<button class="btn btn-block btn-success" type="button" data-toggle="collapse" data-target="#infografik-project"><i class="icon-fire"></i> Status</button>
								</div>
							</div>
							<div class="span2">
								<div class="btn-inset">
									<button class="btn btn-block btn-warning" type="button"><i class="icon-money"></i> DONATE</button>
								</div>
							</div>
						</div>
						<?php include 'module/infographic-status.php'; ?>
					</div>
					
					<h2>DAFTAR PROJECT :</h2>
					<ul id="new-projects" class="thumbnails">
						<?php
							$i = 0;
							while ( $i <= 5) {
								include 'module/content-project.php';
								$i ++;
							}
						?>
					</ul>
					
					<h2>DAFTAR LOT :</h2>
					<ul id="new-projects" class="thumbnails">
						<?php
							$i = 0;
							while ( $i <= 5) {
								include 'module/content-lot.php';
								$i ++;
							}
						?>
					</ul>
					
					<?php include 'module/pagination.php'; ?>
					
					
				</div>
				<!-- /big content -->
				
				<!-- sidebar content -->
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

	<?php include 'module/search-mobile.php'; ?>
	
<!-- footer -->
<?php include 'module/footer.php'; ?>
