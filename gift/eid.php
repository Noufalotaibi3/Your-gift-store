<?php 

session_start();
include 'config.php';
include 'addcart.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $website; ?> - Eid</title>
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
  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media mr-4">
			    		<p class="mb-0 d-flex">
			    			
			    			<a href="" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    		
			    		</p>
		        </div>
                <div class="reg">
                    <?php
                    if (isset($_SESSION['username']) && $_SESSION['username'] != "" ) {
                        ?>
		        	<p class="mb-0"><span class="welcome"> Welcome <?php echo $_SESSION['username']; ?></span> <a href="logout.php">Log Out</a></p>
                    <?php
                    }else{
                        ?>
                        <p class="mb-0"><a href="register.php">Sign Up</a> <a href="login.php">Log In</a></p>
                        <?php
                    }
                    
                    ?>
					
		        </div>
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Your gift<span> store</span></a>
	      <div class="order-lg-last btn-group">
          <a href="cart.php" class="btn-cart dropdown-toggle dropdown-toggle-split">
          	<span class="flaticon-shopping-bag"></span>
              <div class="d-flex justify-content-center align-items-center"><small>
              <?php
                            if(isset($_SESSION['cart'])){
                                $cartsum = 0;
                                foreach($_SESSION['cart'] as $key => $value){
                                  $cartsum += $value['quantity'];
                                }
                              
                                echo $cartsum;
                }else{
                    echo 0;
                }
            ?>
                </small></div>
            </a>
          </div>
  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
            </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Occasions</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <?php
                    $sql = "SELECT * FROM categories";
                    $result = $pdo->prepare($sql);
                    $result->execute();
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                ?>
				<a class="dropdown-item" href="<?php echo $row['url'] . $row['id'] ?>"><?php echo $row['cat_name']?></a>
                <?php } ?>


              </div>
            </li>
	         
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/nina-mercado-_qN6tmGjmtg-unsplash.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span><a href="#">Occasions <i class="fa fa-chevron-right"></i></a></span> EID <span> <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Eid</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- Start Item -->
            <?php
                $category = $_GET['id'];
                $sql = "SELECT * FROM items WHERE category=:category ORDER BY items.id DESC";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam('category', $category, PDO::PARAM_INT);
                $stmt->execute();
                
                while($row = $stmt->fetch()){?>
                <section class="ftco-section">
                <form action="eid.php?id=<?=$category?>&itemid=<?=$row['id']?>" method="post">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="<?php echo $row['image'] ?>" class="image-popup prod-img-bg"><img src="<?php echo $row['image'] ?>"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3><?php echo $row['name'] ?></h3>
                <div class="rating d-flex">
                        <p class="text-left mr-4">
                        
                    </div>
                <p class="price"><span><?php echo $row['price'] ?> SR</span></p>
                
                    <div class="row mt-4">
                        <div class="input-group col-md-6 d-flex mb-3">
                 <span class="input-group-btn mr-2">
                    </button>
                    </span>
                    <div class="">
                 <input type="number"  name="quantity" class="form-control input-number" value="1" min="1" max="100">
                 </div>
                 <input type="hidden" name="name" value="<?=$row['name']; ?>">
                 <input type="hidden" name="price" value="<?=$row['price']; ?>">
                 <input type="hidden" name="image" value="<?=$row['image']; ?>">
                 <span class="input-group-btn ml-2">
                 </button>
                 </span>
              </div>
              <div class="w-100"></div>
              <div class="col-md-12">
                  <p style="color: #000;"></p>
              </div>
          </div>
          <?php
          if (isset($_SESSION['username']) && $_SESSION['username'] != "" ) {
                        ?>
                        <button type="submit" name="add" class="btn btn-primary py-3 px-5 mr-2">Add To Card</button>
                        <a href="cart.php"><button herf="cart.php" class="btn btn-primary py-3 px-5 mr-2">Buy Now</button></a>
                        <?php
          }else{?>
                        <p><a href="login.php" class="btn btn-primary py-3 px-5 mr-2">Add to Cart</a>
          <a href="login.php" class="btn btn-primary py-3 px-5">Buy now</a></p>
          <?php

          }
                        ?>

        		</div>
        </div>
        </div>
          </div>
        </div>
      </div>
    </div>
    </div>
                </form>
</section>

                <?php
                }
                $pdo = null;
                ?>




    <!-- End Item -->
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

    
  </body>
</html>