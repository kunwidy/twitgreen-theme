<?php
	include 'module/header2.php';
?>
	<div class="container">
	<div class="featured-project">
	
		<div class="row">
			
			<div class="span9">
				<iframe width="710" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=bandung&amp;aq=&amp;sll=33.760882,-97.075195&amp;sspn=20.141053,43.286133&amp;ie=UTF8&amp;hq=&amp;hnear=Bandung,+West+Java,+Indonesia&amp;ll=-6.914744,107.609811&amp;spn=0.01178,0.021136&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=bandung&amp;aq=&amp;sll=33.760882,-97.075195&amp;sspn=20.141053,43.286133&amp;ie=UTF8&amp;hq=&amp;hnear=Bandung,+West+Java,+Indonesia&amp;ll=-6.914744,107.609811&amp;spn=0.01178,0.021136&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			</div>
			
			<div class="span3">
				<?php
					include 'module/widget-lot-statistic.php';
				?>
			</div>
			
		</div>
		
		<div class="row">
			<div class="span12">
			<h2 class="center">Daftar lot lainnya :</h2>
				
				<ul id="new-projects" class="thumbnails">
					<?php
						$i = 0;
						while ( $i <= 7) {
							include 'module/content-lot.php';
							$i ++;
						}
					?>
				</ul>
				
			</div>
		</div>
		
	</div>
	</div>
	
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>