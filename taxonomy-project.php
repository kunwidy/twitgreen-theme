<?php
	include 'module/header2a.php';
	include 'module/infographic-global.php';
?>
<div class="container">
	<div class="row">
		<div id="big-content" class="span9">
			<div class="featured-project">
				<div id="text-featured">
					<h1 class="large center">Menabung 100.000.000 Pohon Pertamina Sobat Bumi</h1>
					<hr/>	
				</div>
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
			<div id="">
				<p>PT. Pertamina (Persero) bercita-cita menanam dan merawat 100 juta pohon di seluruh Indonesia hingga tahun 2015. Program ini salah satu upaya yang dilakukan oleh PT Pertamina (Persero) untuk ikut andil dalam  mengurangi dampak efek rumah kaca akibat emisi gas karbon.  Program ini diharapkan juga dapat meningkatkan kesejahteraan masyarakat di kawasan tabung pohon, melalui pemanfaatan hasil pohon yang berkelanjutan. Program Menabung 100 Juta Pohon ini sudah terealisasi sejak awal tahun 2012 dengan penanaman sekitar 4 juta pohon. Program ini dilakukan oleh PT. Pertamina tidak hanya sekedar menanam pohon, tetapi juga memonitor perkembangan pohon-pohon tersebut sesuai dengan lingkungannya.</p>
			</div>
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