<?php
	include 'module/header.php';
	include 'module/archive-block.php';
	include 'module/featured-project.php';
?>
	<div class="container">
		<div class="new-project">
			<h5>PROJECT :</h5>
			<ul id="new-projects" class="thumbnails">
				<?php
					$i = 0;
					while ( $i <= 1) {
						include 'module/content-project.php';
						$i ++;
					}
				?>
			</ul>
			<button class="btn btn-success right" type="button">Lihat semua project</button>
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
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>