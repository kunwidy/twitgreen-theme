<?php
/**
 * The template for displaying the footer.
 */
?>

 <!-- footer -->
	<div class="container">
		<div id="footer">
			<div class="row">
				<div id="" class="span12">
					<p>&copy; Twitgreen.com 2013</p>
				</div>
			</div>
		</div>
	</div>
	 <!-- /footer -->
	
	 <!-- Le javascript
    ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
	 <script type="text/javascript" src="js/less-1.3.0.min.js"></script>
	 
	 <script type="text/javascript">
  $(document).ready(function () {
    $("[rel=tooltip]").tooltip();
  });
  
	jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
 
 
});
	</script>


	
</body></html>