<!-- header -->
<?php include 'header.php'; ?>

	<?php include 'archive-block.php'; ?>
	
	 <!-- featured project -->
	<div class="container">
		<div id="featured-project">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span6">
							<div id="img-featured">
								<a href="#"><img src="upload/featured-project2.jpg" alt="twitgreen"></a>
							</div>
						</div>
						<div class="span6">
							<div id="text-featured">
							<h1 class="large">
								<a href="page-single-project.php">Menabung 100.000.000 Pohon Pertamina Sobat Bumi</a>
							</h1>
							<p class="big">
								PT. Pertamina (Persero) bercita-cita menanam dan merawat 100 juta pohon di seluruh Indonesia hingga tahun 2015.
								Program ini salah satu upaya yang dilakukan oleh PT Pertamina (Persero)  [...]
							</p>
							</div>
							<div class="total">
								<p class="big">
									Saat ini sudah Menabung <a href="#">26.000.000</a> Pohon
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /featured project -->
	
	
	<!-- middle content -->
	<div class="container">
		<div id="new-project">
			<div class="row">
				<div class="span12">
					
					<!-- New Project -->
					<?php include 'archive-newproject.php'; ?>
					<!-- New Project -->
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div id="middle-deep">
			<div class="row">
				<!-- social media -->
				<div class="span3 hidden-phone twit">
					<a class="twitter-timeline" data-dnt=true href="https://twitter.com/kunw" data-widget-id="284468336509718528">Tweets by @kunw</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<!-- social media -->
				<div class="span9" id="how-twitgreen">
					<h4 class="center" id="title">How TwitGreen</h4>
					<br/>
					<div class="row">
						<div class="span3 center">
							<a href="#"><img src="img/lot-icon2.png" alt="lot"></a>
							<h5 id="low-title"><a href="#">Lot</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam [...] </p>
						</div>
						<div class="span3 center">
							<a href="#"><img src="img/project-icon2.png" alt="lot"></a>
							<h5 id="low-title"><a href="#">Project</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam [...] </p>
						</div>
						<div class="span3 center">
							<a href="#"><img src="img/fundrise-icon2.png" alt="lot"></a>
							<h5 id="low-title"><a href="#">Fundrising</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam [...] </p>
						</div>
					</div>
					<div id="join">
						<button class="btn btn-large btn-block btn-success" type="button">JOIN NOW</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- if on mobile -->
	<?php include 'search-mobile.php'; ?>
	
<!-- footer -->
<?php include 'footer.php'; ?>