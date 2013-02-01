<?php
	include 'module/header2.php';
?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>DAFTAR USER</h2>
				<button class="btn btn-success btn-small" type="button"> Semua</button> <button class="btn btn-success btn-small" type="button"> Investor</button> <button class="btn btn-success btn-small" type="button"> Relawan</button> <button class="btn btn-success btn-small" type="button"> Petani</button> <button class="btn btn-success btn-small" type="button"> Pemilik lahan</button>
				
				<ul id="list-user" class="thumbnails">
					<?php
						$i = 0;
						while ( $i <= 30) {
							include 'module/content-user.php';
							$i ++;
						}
					?>
				</ul>
				
				<?php include 'module/pagination.php'; ?>
			</div>
		
	</div>
	
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>