

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Your gift Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	<div class="container">
        <div class="row">
            <div class="col-md-7">
            <div class="row">

<?php

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql); 
while($row = mysqli_fetch_assoc($result)) {
// echo $row['id'] ." ". $row['name'] ." ". $row['image'] ." ". $row['price']."<br>";
?>
<div class="col-md-3 text-center mt-5">
    <img src="images/<?php echo $row['images']?>" alt="">
    <h3><?php echo $row['name']?></h3>
    <h6>Price: <?php echo $row['price']?></h6>
    <div class="form-group">
        <label>Select list:</label>
        <select class="form-control" id="quantity<?php echo $row['id']?>">
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
        </select>
        <input type="hidden" id="name<?php echo $row['id']?>" value='<?php echo $row['name']?>'>
        <input type="hidden" id="price<?php echo $row['id']?>" value='<?php echo $row['price']?>'>

        <button class='btn btn-danger add' data-id="<?php echo $row['id']?>">Add to Cart</button>

    </div>

</div>






<?php

  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media mr-4">
			    		<p class="mb-0 d-flex">
			    			
			    			<a href="https://mobile.twitter.com/nx11f" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="https://instagram.com/nx1_44?utm_medium=copy_link" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    		
			    		</p>
		        </div>
		        <div class="reg">
		        	<p class="mb-0"><a href="register.php">Sign Up</a> <a href="index.php">Log In</a></p>
		        </div>
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Your gift<span> store</span></a>
	      <div class="order-lg-last btn-group">
          <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	<span class="flaticon-shopping-bag"></span>
              <div class="d-flex justify-content-center align-items-center"><small>1</small></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                      <div class="dropdown-item d-flex align-items-start" href="#">
                          <div class="img" style="background-image: url(https://sc02.alicdn.com/kf/HLB1pjt8UgHqK1RjSZFPq6AwapXaC/New-Design-Idea-Graduation-Confetti-Latex-Balloon.jpg);"></div>
                          <div class="text pl-3">
                              <h4></h4>
                              <p class="mb-0"><a href="#" class="price">30 RS</a><span class="quantity ml-3">Balloon</span></p>
                          </div>
                      </div>
                      <div class="dropdown-item d-flex align-items-start" href="#"> 	
                      </div>
                      <a class="dropdown-item text-center btn-link d-block w-100" href="cart.html">
                          View All
                          <span class="ion-ios-arrow-round-forward"></span>
                      </a>
                    </div>
          </div>
  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
            </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="home.html" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Occasions</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="Occasions.html">All</a>
                <a class="dropdown-item" href="Graduation.html">Graduation</a>
                <a class="dropdown-item" href="Eid.html">Eid Al-Adha/ALfitr</a>
                <a class="dropdown-item" href="Ramadan.html">Ramadan</a>
              </div>
            </li>
	         
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/nina-mercado-_qN6tmGjmtg-unsplash.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="home.html">Home <i class="fa fa-chevron-right"></i></a></span> <span><a href="product.html">Occasions <i class="fa fa-chevron-right"></i></a></span> <span>Graduation <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Graduation</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/prod-1.jpg" class="image-popup prod-img-bg"><img src="images/5.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>Balloon</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
							
						</div>
    				<p class="price"><span>30 RS</span></p>
    				
						<div class="row mt-4">
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="fa fa-minus"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="fa fa-plus"></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;"></p>
	          	</div>
          	</div>
			  
       
		

          	<p><a href="indexforcart.php" class="btn btn-primary py-3 px-5 mr-2">Add to Cart</a><a href="indexforcart.php" class="btn btn-primary py-3 px-5">Buy now</a></p>
		</div>
		?>
    			</div>
    		</div>
        	</div>
              </div>
            </div>
          </div>
        </div>
    	</div>
	</section>
	<section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/prod-1.jpg" class="image-popup prod-img-bg"><img src="images/6.jpg"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>Box</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
							
						</div>
    				<p class="price"><span>100 RS</span></p>
    				
						<div class="row mt-4">
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="fa fa-minus"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="fa fa-plus"></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;"></p>
	          	</div>
          	</div>
          	<p><a href="indexforcart.php" class="btn btn-primary py-3 px-5 mr-2">Add to Cart</a><a href="indexforcart.html" class="btn btn-primary py-3 px-5">Buy now</a></p>
    			</div>
    		</div>
        	</div>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>