						<!-- Slider -->
                        <div class="row">
                                <div class="span9" id="slider">
                                        <!-- Top part of the slider -->
                                        <div class="row">
                                                <div class="span9" id="carousel-bounding-box">
                                                        <div id="myCarousel" class="carousel slide">
                                                                <!-- Carousel items -->
                                                                <div class="carousel-inner">
                                                                        <div class="active item" data-slide-number="0"><img src="http://placehold.it/770x300&text=one" /></div>
                                                                        <div class="item" data-slide-number="1"><img src="http://placehold.it/770x300&text=two" /></div>
                                                                        <div class="item" data-slide-number="2"><img src="http://placehold.it/770x300&text=three" /></div>
                                                                        <div class="item" data-slide-number="3"><img src="http://placehold.it/770x300&text=four" /></div>
                                                                        <div class="item" data-slide-number="4"><img src="http://placehold.it/770x300&text=five" /></div>
                                                                        <div class="item" data-slide-number="5"><img src="http://placehold.it/770x300&text=six" /></div>
                                                                </div>
                                                                 <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                                                                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
																  
                                                        </div>
                                                </div>  
                                        </div>
 
                                </div>
                        </div> <!--/Slider-->
 
                        <div class="row hidden-phone" id="slider-thumbs">
                                <div class="span9">
                                        <!-- Bottom switcher of slider -->
                                        <ul class="thumbnails">
                                                <li class="span3">
                                                        <a class="thumbnail" id="carousel-selector-0">
                                                                <img src="http://placehold.it/170x100&text=one" />
                                                        </a>
                                                </li>
                                                <li class="span3">
                                                        <a class="thumbnail" id="carousel-selector-1">
                                                                <img src="http://placehold.it/170x100&text=two" />
                                                        </a>
                                                </li>
                                                <li class="span3">
                                                        <a class="thumbnail" id="carousel-selector-2">
                                                                <img src="http://placehold.it/170x100&text=three" />
                                                        </a>
                                                </li>
                                                <li class="span3">
                                                        <a class="thumbnail" id="carousel-selector-3">
                                                                <img src="http://placehold.it/170x100&text=four" />
                                                        </a>
                                                </li>
                                                <li class="span3">
                                                        <a class="thumbnail" id="carousel-selector-4">
                                                                <img src="http://placehold.it/170x100&text=five" />
                                                        </a>
                                                </li>
                                                <li class="span3">
                                                        <a class="thumbnail" id="carousel-selector-5">
                                                                <img src="http://placehold.it/170x100&text=six" />
                                                        </a>
                                                </li>
                                        </ul>
                                </div>
                        </div>
						
						
						
						<script>
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