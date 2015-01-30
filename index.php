<?php
	$link = 'home';
	include 'open_html.php';
	include 'navigation.php';
?>    
       
        <div class="content-body">
	        <!-- Homepage Header -->
	        <div class="">
	        	<div id="header">
				<ul class="header-canvas">
					<!-- Slide 1 -->
					<li class="">
						<!-- Slide Title -->
						<h2 class="title">NCR</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Experience a new world of interaction</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/slider.png" alt="NCR" />
					</li>
					
				</ul>
				</div>
	        </div>
	        <!-- End Homepage Header -->

			<!-- Thumbnails -->
	        <div class="section">
		        <div class="container">
		        	<div class="row">
		        		<div class="col-md-4 col-sm-6">
		        			<div class="service-wrapper">
			        			<img src="img/history.png" alt="History">
			        			<h3>History</h3>
			        			<p>NCR Laboratory was built in partnership with NCR Cebu and the Department of Computer Engineering, USC. The lab also features the Advanced Development Laboratory.</p>
			        			<a href="history.php" class="btn">Read more</a>
			        		</div>
		        		</div>
		        		<div class="col-md-4 col-sm-6">
		        			<div class="service-wrapper">
			        			<img src="img/services.png" alt="Services">
			        			<h3>Services</h3>
			        			<p>NCR Laboratory is a venue for some Computer Engineering subjects. The laboratory is also open for students who wished to use the room for project making.</p>
			        			<a href="services.php" class="btn">Read more</a>
			        		</div>
		        		</div>
		        		<div class="col-md-4 col-sm-6">
		        			<div class="service-wrapper">
			        			<img src="img/staff.png" alt="Staff">
			        			<h3>Staff</h3>
			        			<p>The NCR Laboratory hires working students and OJTs to assist classes and students that will be using the laboratory. There is also a laboratory head to supervise the staff.</p>
			        			<a href="staff.php" class="btn">Read more</a>
			        		</div>
		        		</div>
		        	</div>
		        </div>
		    </div>
		    <!-- End Thumbnails -->
		</div>
		<!-- End Content-Body -->

<?php
	include 'footer.php';
	include 'close_html.php';
?>
