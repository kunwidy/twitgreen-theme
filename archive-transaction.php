<?php
	include 'module/header2.php';
	//include 'module/infographic-global.php';
?>
	<div class="container">
		<div class="row">
			<div class="span12">
			<h2>DAFTAR TRANSAKSI :</h2>
			</div>
			
			<div id="big-content" class="span9">
				
				<ul class="new-transaction" class="thumbnails">
					<?php
						$i = 0;
						while ( $i <= 2) {
							include 'module/content-transaction.php';
							$i ++;
						}
					?>
				</ul>
				
				
				<?php include 'module/pagination.php'; ?>
			</div>
			
		
			
		</div>
	</div>
<?php
	include 'module/search-mobile.php';
	include 'module/footer.php';
?>