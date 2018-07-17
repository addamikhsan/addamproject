	<!--  -->
		<footer>
			<div id="footer" class="fh5co-border-line">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>Copyright 2018
						</div>
						<div class="col-md-6 social-text-align">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter-with-circle"></i></a>
								<a href="#"><i class="icon-facebook-with-circle"></i></a>
								<a href="#"><i class="icon-instagram-with-circle"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

	<script src="<?php echo base_url('assets/gallery/js/jquery.min.js'); ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assets/gallery/js/jquery.easing.1.3.js'); ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/gallery/js/bootstrap.min.js'); ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assets/gallery/js/jquery.waypoints.min.js'); ?>"></script>
	<!-- Portfolio Filter Mixitup -->
	<script type="text/javascript" src="<?php echo base_url('assets/gallery/js/jquery.mixitup.min.js'); ?>"></script>

	<!-- Main JS (Do not remove) -->
	<script src="<?php echo base_url('assets/gallery/js/main.js'); ?>"></script>
	<!-- Main JS (Do not remove) -->
	<script src="<?php echo base_url('assets/js/rating.js'); ?>"></script>

	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.all'  
      		}     
				});								
			
			}

		};
		
		// Run the show!
		filterList.init();

		
		
	});	
	</script>

	</body>
</html>