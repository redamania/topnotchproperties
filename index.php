<?php get_header(); ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    	<div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>


	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
	    <ol class="carousel-indicators">
	    	<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
	    	<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
	    	<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
	    </ol>
	<div class="carousel-inner">
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
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
	       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	       <span class="visually-hidden">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
	       <span class="carousel-control-next-icon" aria-hidden="true"></span>
	       <span class="visually-hidden">Next</span>
	  </a>
	</div>


<div class="sectiion feautred properties">
	<div class="container">
		<div class="row">
			<h3>Featured Properties</h3>
		</div>
		<div class="row">
			<div class="card fp-card bord-no bord-rad-no col-md">
				<br>
			    <h5 class="fp-title text-cent">Makati</h5>
			    <div class="fp-hr"></div>
			    <div class="fp-img-cont">
			    	
		   			<img src="https://via.placeholder.com/200" class="fp-img card-img-top img-responsive" alt="...">
		   			<div class="fp-img-over"></div>	
			   		
			   	</div>	
			</div>
			<div class="card col-md fp-card" style="width: 18rem;">
				<br>
			   <h5 class="card-title fp-title">Makati</h5>

			   <hr class="fp-hr">

			   <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">		
			</div>

			<div class="card col-md fp-card" style="width: 18rem;">
				<br>
			   <h5 class="card-title fp-title">Makati</h5>

			   <hr class="fp-hr">

			   <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">		
			</div>
		</div>

		<div class="row">
			<h3>Real Estate News</h3>
		</div>

		<div class="row">
			<div class="card col-md-6" style="width: 18rem;">
			  <img src="https://via.placeholder.com/150"" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Pampanga</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>
			<div class="card col-md-6" style="width: 18rem;">
			  <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Pampanga</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>
		</div>

	</div>
</div>
<br>
<div class="section">
	<center><button type="button" class="btn btn-primary btn-lg">Contact us now</button></center>
</div>
<?php get_footer(); ?>