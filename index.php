x<?php get_header(); ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    	<div class="container-fluid wp_menu_kiko">
        <?php wp_nav_menu()?>	
        </div>
    </nav>


	<div id="carouselExampleIndicators" class="carousel slide car-main" data-bs-ride="carousel">

		<img class="img-responsive car-kiko-main" src="<?php echo get_template_directory_uri(); ?>/img/kiko-main.png" >
		<div class="car-typo-main">
			<div class="car-text-img-top col">
				<h2><span>Kiko</span> Dacillo</h2>
				<img class="img-responsive car-mw-logo" src="<?php echo get_template_directory_uri(); ?>/img/mw-cust-logo.png" >
				
			</div>
			<h3><span>Top notch</span> properties</h3>
		</div>
	    <ol class="carousel-indicators">
	    	<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
	    	<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
	    	<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
	    </ol>
	    <div class="ss">
	    	<div class="coverup" style="
			    width: 100%;
			    height: 100%;
			    display: block;
			    z-index: 1;
			    position: absolute;
			    background: #2272c3;
			    opacity: 0.5;
			">
				
			</div>
			<div class="carousel-inner car-inner">
			    <div class="carousel-item active">
			       <img src="<?php echo get_template_directory_uri(); ?>/img/banner_1.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			       <img src="<?php echo get_template_directory_uri(); ?>/img/banner_2.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			       <img src="<?php echo get_template_directory_uri(); ?>/img/banner_3.jpg" class="d-block w-100" alt="...">
			    </div>
			</div>
		</div>
	    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
	       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	       <span class="visually-hidden">Previous</span>
	    </a>
	    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
	       <span class="carousel-control-next-icon" aria-hidden="true"></span>
	       <span class="visually-hidden">Next</span>
	  	</a>
	</div>


	<!-- Modal Ask quote -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	   		<div class="modal-content">
		      	<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      	</div>
		        <div class="modal-body">
		        	...
		        </div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	        		<button type="button" class="btn btn-primary">Save changes</button>
		      	</div>
	    	</div>
	    </div>
	</div>
<div class="section fp-sec">
	<div class="container">
		<div class="row">
			<h3>Featured Properties</h3>
		</div>
		<div class="row">
			<div class="card fp-card bord-no bord-rad-no col-lg-4 col-md-12 col-sm-12 col-xs-12">
				<br>
			    <h5 class="fp-title text-cent">Makati</h5>
			    <div class="fp-hr"></div>
			    <div class="fp-img-cont">
			    	
		   			<img src="<?php echo get_template_directory_uri(); ?>/img/vion-bldg.png" class="fp-img card-img-top img-responsive" alt="...">
		   			<div class="fp-img-over">
		   				<img src="<?php echo get_template_directory_uri(); ?>/img/vionlogo.png" class="img-responsive fp-over-logo">
		   				<p class="fp-over-par">
			   				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
			   			</p>
		   				<button type="button" class="btn btn-warning fp-btn text-cent disp-inblock">Know More</button>
		   				<button type="button" class="btn btn-light fp-btn text-cent disp-inblock"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ask for quote</button>
		   				<!-- Modal Ask quote -->
					
		   			</div>	
			   	</div>	
			</div>
			<div class="card fp-card bord-no bord-rad-no col-lg-4 col-md-12 col-sm-12 col-xs-12">
				<br>
			    <h5 class="fp-title text-cent">Makati</h5>
			    <div class="fp-hr"></div>
			    <div class="fp-img-cont">
			    	
		   			<img src="<?php echo get_template_directory_uri(); ?>/img/vion-bldg.png" class="fp-img card-img-top img-responsive" alt="...">
		   			<div class="fp-img-over">
		   				<img src="<?php echo get_template_directory_uri(); ?>/img/vionlogo.png" class="img-responsive fp-over-logo">
		   				<p class="fp-over-par">
			   				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
			   			</p>
		   				<button type="button" class="btn btn-warning fp-btn text-cent disp-inblock">Know More</button>
		   				<button type="button" class="btn btn-warning fp-btn text-cent disp-inblock">Ask for quote</button>
	
				
		   			</div>	

			   		
			   	</div>	
			</div>
			<div class="card fp-card bord-no bord-rad-no col-lg-4 col-md-12 col-sm-12 col-xs-12">
				<br>
			    <h5 class="fp-title text-cent">Makati</h5>
			    <div class="fp-hr"></div>
			    <div class="fp-img-cont">
			    	
		   			<img src="<?php echo get_template_directory_uri(); ?>/img/vion-bldg.png" class="fp-img card-img-top img-responsive" alt="...">
		   			<div class="fp-img-over">
		   				<img src="<?php echo get_template_directory_uri(); ?>/img/vionlogo.png" class="img-responsive fp-over-logo">
		   				<p class="fp-over-par">
			   				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
			   			</p>
		   				<button type="button" class="btn btn-warning fp-btn text-cent disp-inblock">Know More</button>
		   				<button type="button" class="btn btn-warning fp-btn text-cent disp-inblock">Ask for quote</button>
		   			</div>	

			   		
			   	</div>	
			</div>
		</div>

		<div class="row">
			<h3>Real Estate News</h3>
		</div>

		<div class="row">
			<div class="card col-md-6" style="width: 18rem;">
			  <!-- <img src="https://via.placeholder.com/150" class="card-img-top" alt="..."> -->
			  <div class="card-body">
			    <h5 class="card-title">Pampanga</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>
			<div class="card col-md-6" style="width: 18rem;">
			  <!-- <img src="https://via.placeholder.com/150" class="card-img-top" alt="..."> -->
			  <div class="card-body">
			    <h5 class="card-title">Pampanga</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>
		</div
>
	</div>
</div>
<br>
<div class="section">
	<center><button type="button" class="btn btn-primary btn-lg">Contact us now</button></center>
</div>
<?php get_footer(); ?>