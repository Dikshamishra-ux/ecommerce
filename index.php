<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,600;1,700&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel themeMin.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .item img{
    	height: 280px;
    }
    </style>
  

	<title>E-commerce</title>
</head>
<body>
	<!-- start nav-bar -->
	<nav class="navbar navbar-expand-lg navbar-light py-4 fixed-top">
		<div class="container">
			<a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.php">
				<i class="fa-solid fa-bag-shopping text-success"></i>
				<span class="text-uppercase fa-lighter ms-2 text-danger">E-Online Shop</span>
		    </a>

			<div class="order-lg-2 nav-btns">
				<button type="button" class="btn position-relative">
					<a href="https://www.flipkart.com/" class="text-decoration-none"><i class="fa fa-shopping-cart text-warning"></i></a>
					<span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
				</button>

				<button type="button" class="btn position-relative">
					<a href="https://www.flipkart.com/" class="text-decoration-none"><i class="fa fa-heart text-danger"></i></a>
					<span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
				</button>

				<button type="button" class="btn position-relative">
					<a href="https://www.google.com/search" class="text-decoration-none"><i class="fa fa-search text-dark"></i></a>
					<span class="position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
				</button>
				
		</div>
		<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
			<span class="navbar-toggler-icon text-light"></span>
		</button>
		<div class="collapse navbar-collapse order-lg-1" id="navMenu">
			<ul class="navbar-nav mx-auto text-center">
				<li class="nav-item px-2 py-2">
				    	<a class="nav-link text-uppercase text-info" href="#header">HOME</a>
                 </li>
                 <li class="nav-item px-2 py-2">
					    <a class="nav-link text-uppercase text-info" href="#collection">Collection</a>
                 </li>
                 <li class="nav-item px-2 py-2">
					  <a class="nav-link text-uppercase text-info" href="#specials">Specials</a>
                 </li>
                 <li class="nav-item px-2 py-2">
					  <a class="nav-link text-uppercase text-info" href="#blogs">blogs</a>
                 </li>
                 <li class="nav-item px-2 py-2">
					   <a class="nav-link text-uppercase text-info" href="#about">About us</a>
                 </li>
                 <li class="nav-item dropdown px-2 py-2" id="mydropdown">
                 <a class="nav-link text-uppercase  text-info dropdown-toggle" href="#shops"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Shop By Categries
                 </a>
              <ul class="dropdown-menu px-2 py-2">
            <li><a class="dropdown-item" href="#shops">Ecommerce Product</a></li>
            <li><a class="dropdown-item" href="#online">Online Storing</a></li>
            <li><a class="dropdown-item" href="#Woocommerce">WooCommerce</a></li>
          </ul>
        </li>
 
                 <li class="nav-item px-2 py-2">
					<a class="nav-link text-uppercase text-info" href="#popular">Popular</a>
                 </li>
				
			</ul>
		</div>
	</div>
		</nav>  
		<script type="text/javascript" src="jquery-3.6.4.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#mydropdown').click(function(){
					$('.dropdown-menu').toggle();
				});
			});
		</script>
		<!-- end of nav-bar -->

		<!-- hrader -->
		<header id="header" class="vh-100 carousel slide" data-bs-ride="carousel" style="padding-top: 104px;">

			<div class="container h-100 d-flex align-items-center carousel-inner">
				<div class="text-center carousel-item active">
					<h2 class="text-capitalize text-white">Best Collection</h2>
					<h1 class="text-uppercase py-2 text-white">New <span class="text-danger">Arrivals</span></h1>
					<a href="contact.php" class="btn mt-3 text-uppercase">Shop Now
					</a>
				</div>

				<div class="text-center carousel-item">
					<h2 class="text-capitalize text-white">Best Price & Offer</h2>
					<h1 class="text-uppercase py-2 text-white">New <span class="text-danger">Season</span></h1>
					<a href="contact.php" class="btn mt-3 text-uppercase">Buy Now</a>
				</div>

				<div class="text-center carousel-item">
					<h2 class="text-capitalize text-white">Best Disscount & Offer </h2>
					<h1 class="text-uppercase py-2 text-white">New <span class="text-danger">Collection</span></h1>
					<a href="contact.php" class="btn mt-3 text-uppercase">Get Started</a>
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev"
			>
				<span class="carousel-control-prev-icon"></span>
			</button>

			<button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next"
			>
				<span class="carousel-control-next-icon"></span>
			</button>
			
		</header>
      <!-- end of header -->

      <!-- collection -->
      <section id="collection" class="py-5">
      	<div class="container">
      		<div class="title text-center">
      			<h2 class="position-relative d-inline-block">New Collection</h2>

      		</div>
      		<div class="row g-0">
      			<div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
      				<button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*">All</button>
      				<button type="button" class="btn m-2 text-dark" data-filter=".best">Best Sellers</button>
      				<button type="button" class="btn m-2 text-dark" data-filter=".feat">Features</button>
      				<button type="button" class="btn m-2 text-dark" data-filter=".new">New Arrivals</button>
      	         </div>
      	         <div class="collection-list mt-4 row gx-0 gy-3">
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
      	         		<div class="collection-img">
      	         			
      	         			<img src="img/to-1.jpg" class="w-100">
      	         	</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">White Top</p>
      	         			<span class="fw-bold">$45.60</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
      	         		<div class="collection-img">
      	         			<img src="img/to-14.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Full Sleeve</p>
      	         			<span class="fw-bold">$68.78</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
      	         		<div class="collection-img">
      	         			<img src="img/to-3.jpg" class="w-100">
      	         	
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">White Top</p>
      	         			<span class="fw-bold">$45.65</span>

      	         			
      	         		</div>
      	         	</div>
      	         </div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
      	         		<div class="collection-img">
      	         			<img src="img/to-4.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">T-Shirt</p>
      	         			<span class="fw-bold">$70.52</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
      	         		<div class="collection-img">
      	         			<img src="img/to-5.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				
      	         			</div>
      	         			<p class="text-capitalize my-1">Orange-T-shirt</p>
      	         			<span class="fw-bold">$78.65</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
      	         		<div class="collection-img">
      	         			<img src="img/top-6.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Orange shirt</p>
      	         			<span class="fw-bold">$90.49</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
      	         		<div class="collection-img">
      	         			<img src="img/top-7.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">magenta-top</p>
      	         			<span class="fw-bold">$60.80</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
      	         		<div class="collection-img">
      	         			<img src="img/to-6.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Green-Top</p>
      	         			<span class="fw-bold">$90.85</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
      	         		<div class="collection-img">
      	         			<img src="img/top-9.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Black full-sleeve</p>
      	         			<span class="fw-bold">$95.50</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
      	         		<div class="collection-img">
      	         			<img src="img/top10.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Red-Dress</p>
      	         			<span class="fw-bold">$80.70</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
      	         		<div class="collection-img">
      	         			<img src="img/to-11.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Top</p>
      	         			<span class="fw-bold">$95.60</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
      	         		<div class="collection-img">
      	         			<img src="img/to-12.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Top</p>
      	         			<span class="fw-bold">$45.60</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
      	         		<div class="collection-img">
      	         			<img src="img/to-13.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Top</p>
      	         			<span class="fw-bold">$45.60</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
      	         		<div class="collection-img">
      	         			<img src="img/to-15.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Top</p>
      	         			<span class="fw-bold">$45.60</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
      	         		<div class="collection-img">
      	         			<img src="img/top-15.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Top</p>
      	         			<span class="fw-bold">$45.60</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
      	         		<div class="collection-img">
      	         			<img src="img/to-16.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Top</p>
      	         			<span class="fw-bold">$45.60</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
      	         		<div class="collection-img">
      	         			<img src="img/top-17.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Top</p>
      	         			<span class="fw-bold">$45.60</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
      	         		<div class="collection-img">
      	         			<img src="img/top-18.jpeg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Top</p>
      	         			<span class="fw-bold">$45.60</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
      	         		<div class="collection-img">
      	         			<div class="trans">
      	         			<img src="img/to-9.jpg" class="w-100">
      	         		</div>
      	         	</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Top</p>
      	         			<span class="fw-bold">$45.60</span>

      	         			
      	         		</div>
      	         	</div>
      	         	<div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
      	         		<div class="collection-img">
      	         			<img src="img/to-10.jpg" class="w-100">
      	         		</div>
      	         		<div class="text-center">
      	         			<div class="rating mt-3">
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         				<span class="text-warning"><i class="fa-solid fa-star"></i></span>
      	         			</div>
      	         			<p class="text-capitalize my-1">Top</p>
      	         			<span class="fw-bold">$45.60</span>

      	         			
      	         		</div>
      	         	</div>
      	         	
      	         </div>
      	     </div>
      	     </div>
      	
      </section>

      <!-- end of collection -->

      <!-- special sections -->
      <section id="specials">

      <div class="container">
      	<div class="title text-center py-5">
      		<h2 class="position-relative d-inline-block">special Selection</h2>
      	</div>
      	<div class="special-list row g-0">
      		<div class="col-md-5 col-lg-4 col-xl-3 p-2">
      			<div class="special-img position-relative overflow-hidden">
      				<img src="img/dress-1.jpg" class="w-100">
      				<span class="position-absolute d-flex align-items-center justify-content-center text-danger">
      			   <i class="fa-solid fa-heart"></i>
      				</span>
              </div>
              <div class="text-center">
              	<p class="text-capitalize mt-3 mb-1">White top</p>
              	<span class="fw-bold d-block">$67.45</span>
              	<a href="https://rechargepayments.com/glossary/add-to-cart/" class="btn btn-primary mt-3">Add to cart</a>
              </div>

            </div>
            <div class="col-md-5 col-lg-4 col-xl-3 p-2">
      			<div class="special-img position-relative overflow-hidden">
      				<img src="img/dress-2.jpg" class="w-100">
      				<span class="position-absolute d-flex align-items-center justify-content-center text-danger">
      			   <i class="fa-solid fa-heart"></i>
      				</span>
              </div>
              <div class="text-center">
              	<p class="text-capitalize mt-3 mb-1">White top</p>
              	<span class="fw-bold d-block">$67.45</span>
              	<a href="https://rechargepayments.com/glossary/add-to-cart/" class="btn btn-primary mt-3">Add to cart</a>
              </div>

            </div>
             <div class="col-md-5 col-lg-4 col-xl-3 p-2">
      			<div class="special-img position-relative overflow-hidden">
      				<img src="img/dress4.jpg" class="w-100">
      				<span class="position-absolute d-flex align-items-center justify-content-center text-danger">
      			   <i class="fa-solid fa-heart"></i>
      				</span>
              </div>
              <div class="text-center">
              	<p class="text-capitalize mt-3 mb-1">White top</p>
              	<span class="fw-bold d-block">$67.45</span>
              	<a href="https://rechargepayments.com/glossary/add-to-cart/" class="btn btn-primary mt-3">Add to cart</a>
              </div>

            </div>
             <div class="col-md-5 col-lg-4 col-xl-3 p-2">
      			<div class="special-img position-relative overflow-hidden">
      				<img src="img/dress6.png" class="w-100">
      				<span class="position-absolute d-flex align-items-center justify-content-center text-danger">
      			   <i class="fa-solid fa-heart"></i>
      				</span>
              </div>
              <div class="text-center">
              	<p class="text-capitalize mt-3 mb-1">White top</p>
              	<span class="fw-bold d-block">$67.45</span>
              	<a href="https://rechargepayments.com/glossary/add-to-cart/" class="btn btn-primary mt-3">Add to cart</a>
              </div>

            </div>
          </div>

        </div>
             
      </section>


      <!-- end of special sections -->

      <!-- offers -->
      <section id="offers" class="py-5 mt-2">
      	<div class="container">
      		<div class="row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
      			<div class="offers-content mt-5 mb-5">
      				<span class="text-white">Discount Up To 50%</span>
      				<h2 class="mt-2 mb-4 text-white">Grand Sale Offer!</h2>
      				<a href="https://www.shoppersstop.com/promotions/" class="btn">Buy Now</a>
      			</div>
      		</div>
      	</div>

      	
      </section>
      <!-- end of offers -->

        <!-- blogs -->

      <section  id="blogs" class="py-5">
      	<div class="container">
      		<div class="title text-center py-5">
      			<h2 class="position-relative d-inline-block">Our Latest Blog</h2>
      		</div>


      		<div class="row">
      			<div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
      				<img src="img/5.jpg">
      				<div class="card-body px-0">
      					<h4 class="title">
      					Ecommerce Online shopping
      					</h4>
      					<p class="card-text mt-3 text-muted">Online purchasing and selling of products and services is known as e-commerce. Affiliate marketing strategies are also a possible part of the definition of an ecommerce firm. To increase online sales, you can leverage ecommerce platforms like your own website, a well-known retailer like Amazon, or social media</p>
      					<p class="card-text">
      						<small class="text-muted">
      							<span class="fw-bold">Author:</span>Keny leon
      						</small>
      					</p>
      					<a href="#newesletter" class="btn">Read more</a>

      				</div>
      			</div>

      			<div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
      				<img src="img/1.jpg">
      				<div class="card-body px-0">
      					<h4 class="title">
      					 Shopping Mall
      					</h4>
      					<p class="card-text mt-3 text-muted">
      						Online purchasing and selling of products and services is known as e-commerce. Affiliate marketing strategies are also a possible part of the definition of an ecommerce firm. To increase online sales, you can leverage ecommerce platforms like your own website, a well-known retailer like Amazon, or social media
      					</p>
      					<p class="card-text">
      						<small class="text-muted">
      							<span class="fw-bold">Author:</span>John Dev
      						</small>
      					</p>
      					<a href="#newesletter" class="btn">Read more</a>

      				</div>
      			</div>

      				<div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
      				<img src="img/4 (1).jpg">
      				<div class="card-body px-0">
      					<h4 class="title">
      					Ecommerce Online shopping
      					</h4>
      					<p class="card-text mt-3 text-muted">Online purchasing and selling of products and services is known as e-commerce. Affiliate marketing strategies are also a possible part of the definition of an ecommerce firm. To increase online sales, you can leverage ecommerce platforms like your own website, a well-known retailer like Amazon, or social media</p>
      					<p class="card-text">
      						<small class="text-muted">
      							<span class="fw-bold">Author:</span>Keny leon
      						</small>
      					</p>
      					<a href="#newesletter" class="btn">Read more</a>

      				</div>
      			</div>

      			<div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
      				<img src="img/4 (2).jpg">
      				<div class="card-body px-0">
      					<h4 class="title">
      					Ecommerce Online shopping
      					</h4>
      					<p class="card-text mt-3 text-muted">Online purchasing and selling of products and services is known as e-commerce. Affiliate marketing strategies are also a possible part of the definition of an ecommerce firm. To increase online sales, you can leverage ecommerce platforms like your own website, a well-known retailer like Amazon, or social media</p>
      					<p class="card-text">
      						<small class="text-muted">
      							<span class="fw-bold">Author:</span>Keny leon
      						</small>
      					</p>
      					<a href="#newesletter" class="btn">Read more</a>

      				</div>
      			</div>

      			<div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
      				<img src="img/3.jpg">
      				<div class="card-body px-0">
      					<h4 class="title">
      					Ecommerce Online shopping
      					</h4>
      					<p class="card-text mt-3 text-muted">Online purchasing and selling of products and services is known as e-commerce. Affiliate marketing strategies are also a possible part of the definition of an ecommerce firm. To increase online sales, you can leverage ecommerce platforms like your own website, a well-known retailer like Amazon, or social media</p>
      					<p class="card-text">
      						<small class="text-muted">
      							<span class="fw-bold">Author:</span>Keny leon
      						</small>
      					</p>
      					<a href="#newesletter" class="btn">Read more</a>

      				</div>
      			</div>
      			<div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
      				<img src="img/img-1.jpg">
      				<div class="card-body px-0">
      					<h4 class="title">
      					Ecommerce Online shopping
      					</h4>
      					<p class="card-text mt-3 text-muted">Online purchasing and selling of products and services is known as e-commerce. Affiliate marketing strategies are also a possible part of the definition of an ecommerce firm. To increase online sales, you can leverage ecommerce platforms like your own website, a well-known retailer like Amazon, or social media</p>
      					<p class="card-text">
      						<small class="text-muted">
      							<span class="fw-bold">Author:</span>Keny leon
      						</small>
      					</p>
      					<a href="#newesletter" class="btn">Read more</a>

      				</div>
      			</div>
      	</div>
      </div>
    </section>

    <!-- end of blogs -->


      	<!--  about-->

      	<section id="about" class="py-5">
      		<div class="container">
      			<div class="row gy-lg-5 align-items-center">
      				<div class="col-lg-6 order-lg-1 text-center">
      					<div class="title pt-3 pb-5">
      						<h2 class="position-relative d-inline-block ms-4">About Us</h2>
      				</div>
      				<p class="lead text-muted">
      					Ecommerce is a method of buying and selling goods and services online. 
              </p>

              <p> 
              	Ecommerce business can also include tactics like affiliate marketing. You can use ecommerce channels such as your own website, an established selling website like Amazon, or social media to drive online sales.
              	
              </p>
      			</div>
      			<div class="col-lg-6 order-lg-0">
      				<img src="img/about1.jpg" alt="" class="img-fluid w-100">

      			</div>

      		</div>
      		
      	</section>

      	<!-- end of about -->

      	<!-- popular -->
      	<section id="popular" class="py-5">
      		<div class="container">
      			<div class="title text-center pt-3 pb-5">
      				<h2 class="position-relative d-inline-block ms-4">Popular Of This Year</h2>
      			</div>
      		
      		<div class="row">
      			<div class="col-md-6 col-lg-4 row g-3">
      				<h3 class="fs-5">Top Rated</h3>
      				<div class="d-flex align-items-start justify-content-start">
      					<img src="img/white.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">White-Top</p>
      				  <span>$480.6</span>
      				
      			</div>
      		</div>


      		<div class="d-flex align-items-start justify-content-start">
      					<img src="img/blue.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">Blue Shirt</p>
      				  <span>$570.6</span>
      				
      			</div>
      		</div>
      

      		<div class="d-flex align-items-start justify-content-start">
      					<img src="img/cushion.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">Cushion</p>
      				  <span>$560.00</span>
      				
      			</div>
      		</div>
      
      		<div class="d-flex align-items-start justify-content-start">
      					<img src="img/couchad.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">Couch</p>
      				  <span>$678.00</span>
      				
      			</div>
      		</div>
      	</div>
      	<!-- 2 -->

      	<div class="col-md-6 col-lg-4 row g-3">
      				<h3 class="fs-5">Best Selling</h3>
      				<div class="d-flex align-items-start justify-content-start">
      					<img src="img/bottle.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">Bottle</p>
      				  <span>$567.0</span>
      				
      			</div>
      		</div>


      		<div class="d-flex align-items-start justify-content-start">
      					<img src="img/jewllery.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">Jewllery</p>
      				  <span>$568.0</span>
      				
      			</div>
      		</div>
      

      		<div class="d-flex align-items-start justify-content-start">
      					<img src="img/makeup.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">Make-Up</p>
      				  <span>$679.00</span>
      				
      			</div>
      		</div>
      
      		<div class="d-flex align-items-start justify-content-start">
      					<img src="img/purse.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">Purse</p>
      				  <span>$568.00</span>
      				
      			</div>
      		</div>
      	</div>

      	<!-- 3 -->
      	<div class="col-md-6 col-lg-4 row g-3">
      				<h3 class="fs-5">On Sale</h3>
      				<div class="d-flex align-items-start justify-content-start">
      					<img src="img/bengle.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">Bengal</p>
      				  <span>$787.0</span>
      				
      			</div>
      		</div>


      		<div class="d-flex align-items-start justify-content-start">
      					<img src="img/shop3.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">Camera</p>
      				  <span>$473.0</span>
      				
      			</div>
      		</div>
      

      		<div class="d-flex align-items-start justify-content-start">
      					<img src="img/shop4.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">Watch</p>
      				  <span>$487.00</span>
      				
      			</div>
      		</div>
      
      		<div class="d-flex align-items-start justify-content-start">
      					<img src="img/shop5.jpg" alt="" class="img-fluid pe-3 w-25">
      					<div>
      			    <p class="mb-0">Alaram-Clock</p>
      				  <span>$890.6</span>
      				
      			</div>
      		</div>
      	</div>
      </div>
    </div>
  </section>
  <!-- end of popular -->

  <!-- shop by categries -->

 

  <section id="shops" class="py-5">
  		<div class="container-fluid my-5">
       <div class="title text-center pt-3 pb-5">
  			<h2 class="position-relative d-inline-block ms-4">Ecommerce <span class="text-danger">Products</span></h2>
  	    </div>
         <div class="row mt-5">
  	     <div class="owl-carousel owl-theme">
  	    		<div class="item mb-4">
  	    		<div class="card border-0 shadow">
  	    			<img src="img/slide-1.jpg" alt="image" class="card-img-top">
  	    			<div class="card-body">
  	    				<h5>Online-Shopping</h5>
  	    			</div>
  	    		</div>
  	    	</div>
  	    	<!-- items end -->
  	    	<div class="item mb-4">
  	    		<div class="card border-0 shadow">
  	    			<img src="img/slide-2.jpg" alt="image" class="card-img-top">
  	    			<div class="card-body">
  	    				<h5>Smart-Phone</h5>
  	    			</div>
  	    		</div>
  	    	</div>
  	    	<!-- items end -->
  	    	<div class="item mb-4">
  	    		<div class="card border-0 shadow">
  	    			<img src="img/slide-3.jpg" alt="image" class="card-img-top">
  	    			<div class="card-body">
  	    				<h5>Marketing</h5>
  	    			</div>
  	    		</div>
  	    	</div>
  	    		<!-- items end -->

           <div class="item mb-4">
  	    		<div class="card border-0 shadow">
  	    			<img src="img/slide-4.jpg" alt="image" class="card-img-top">
  	    			<div class="card-body">
  	    				<h5>Shopping Mall</h5>
  	    			</div>
  	    		</div>
  	    	</div>
  	    		<!-- items end -->
  	    		<div class="item mb-4">
  	    		<div class="card border-0 shadow">
  	    			<img src="img/slide-5.jpg" alt="image" class="card-img-top">
  	    			<div class="card-body">
  	    				<h5>Social-Marketing</h5>
  	    			</div>
  	    		</div>
  	    	</div>
  	    		<!-- items end -->
  	    		<div class="item mb-4">
  	    		<div class="card border-0 shadow">
  	    			<img src="img/slide-6.jpg" alt="image" class="card-img-top">
  	    			<div class="card-body">
  	    				<h5>By Any Cart & Case</h5>
  	    			</div>
  	    		</div>
  	    	</div>
  	    		<!-- items end -->
  	    		<div class="item mb-4">
  	    		<div class="card border-0 shadow">
  	    			<img src="img/slide-7.jpg" alt="image" class="card-img-top">
  	    			<div class="card-body">
  	    				<h5>Customs</h5>
  	    			</div>
  	    		</div>
  	    	</div>
  	    		<!-- items end -->
  	    		<div class="item mb-4">
  	    		<div class="card border-0 shadow">
  	    			<img src="img/slide-8.jpg" alt="image" class="card-img-top">
  	    			<div class="card-body">
  	    				<h5>Showing the Dress</h5>
  	    			</div>
  	    		</div>
  	    	</div>
  	    		<!-- items end -->
  	    </div>
  	  </div>
  	</div>
  </section>

<!-- end of shop by categries -->
<!-- jQuery oowl caoursel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- js link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- init owl carousel -->
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
</script>

<!-- online storing -->

         <section id="online" class="py-5">
      		<div class="container">
      			<div class="row gy-lg-5 align-items-center">
      				<div class="col-lg-6 order-lg-0 text-center">
      					<div class="title pt-3 pb-5">
      						<h2 class="position-relative d-inline-block ms-4">Online <span class="text-danger">Storing</span></h2>
      				</div>
      				<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
       1.Which is the Ecommerce Online shop?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">An ecommerce website is your digital storefront on the internet. It facilitates the transaction between a buyer and seller. It is the virtual space where you showcase products, and online customers make selections. Your website acts as the product shelves, sales staff, and cash register of your online business channel.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      	2.What is an ecommerce business?
       
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">An ecommerce business is a company that generates revenue from selling products or services online. For example, an ecommerce company might sell software, apparel, housewares, or web design services. You can run an ecommerce business from a single website or through multiple online channels like social media and email.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        3.How does ecommerce work?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Ecommerce works by connecting buyers and sellers using various electronic channels. For example, you need a channel, such as a website or social media, so customers can find products and services to purchase. Then a payment processor enables the exchange of the goods or services. Once the transaction succeeds, the customer receives a confirmation email or SMS, and a printable receipt.</div>
    </div>
  </div>
</div>
	</div>
   <div class="col-lg-6 order-lg-1 mt-5 mb-3">
    <div class="card-img">
     <img src="img/works.jpg" alt="" class="img-fluid w-100 shadow p-3 mb-5 bg-body rounded">
   </div>
 </div>
</div>
</div>
</section>
 <!-- end of online storing -->

  <!-- woo-commerce -->
       <section id="Woocommerce" class="py-5">
      		<div class="container">
      			<div class="row gy-lg-5 align-items-center">
      				<div class="col-lg-6 order-lg-1 text-center">
      					<div class="title pt-3 pb-5">
      						<h2 class="position-relative d-inline-block ms-4">Woo-<span class="text-danger">Commerce</span></h2>
      				</div>
      		     <p class="lead text-muted">
      				
               WooCommerce is an open-source flexible software solution built for WordPress-based websites. 

              </p>

              <p> 
              	It's commonly used to create online e-commerce shops. With this software solution, anyone can turn their regular website into a fully functioning online store, complete with all the necessary e-commerce features.
              </p>
      			</div>
      			<div class="col-lg-6 order-lg-0">
      				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
              <div class="carousel-item active">
              <img src="img/off-1.jpg" class="d-block w-100" alt="...">
            </div>
          <div class="carousel-item">
         <img src="img/1.jpg" class="d-block w-100" alt="...">
        </div>
       <div class="carousel-item">
      <img src="img/ten.jpg" class="d-block w-100" alt="...">
    </div>
     <div class="carousel-item">
      <img src="img/5.jpg" class="d-block w-100" alt="...">
    </div>
     <div class="carousel-item">
      <img src="img/slide-3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slide-7.jpg" class="d-block w-100" alt="...">
    </div>

  </div>
</div>
</div>
</div>
</div>
</section>

  <!--  end of woo commerce -->

   

  <!-- newes latter -->
  <section id="newesletter" class="py-5">
  	<div class="container">
  		<div class="d-flex flex-column align-items-center justify-content-center">
  			<div class="title text-center pt-3 pb-5">
  				<h2 class="position-relative d-inline-block ms-4">NewesLetter Subscription</h2>
  	    </div>
  	    <p class="text-center text-muted">
  	    	Ecommerce is a method of buying and selling goods and services online. The definition of ecommerce business can also includes.
       </p>
       <form name="project">
       <div class="input-group mb-3 mt-3">
       	<input type="text"  name="uname" class="form-control" placeholder="Enter Your Full Name" >
       	<button class="btn btn-primary" type="submit" value="" onclick="run()">Subscribe</button>
       </div>
     </form>

  </div>
</div>
</section>
<script type="text/javascript">
	function run(){
	alert("Thank you."+project.uname.value+".for joining the ecommerce websites, we will concern to you later!");
	}
	

</script>


<!-- end of newes -->

<!-- footer -->
<footer class="bg-dark py-5">
	<div class="container">
		<div class="row text-white g-4">
			<div class="col-md-6 col-lg-3">
				<a class="text-uppercase text-decoration-none brand text-white" href="header.php">Attire</a>
				<p class="text-white text-muted mt-3">
					On Snapdeal you can Shop Online for Men & Women Clothing, Shoes, Kid's fashion, Home Decor & Kitchen Appliances & Much More! Get Free Shipping with COD in ...
					
				</p>
			</div>

			<div class="col-md-6 col-lg-3">
				<h5 class="fw-light">Links</h5>
				<ul class="list-unstyled">
					<li class="my-3">
						<a href="#header" class="text-white text-decoration-none text-muted">
							<i class="fa-solid fa-chevron-right me-1"></i>Home
						</a>
					</li>
					<li class="my-3">
						<a href="#collection" class="text-white text-decoration-none text-muted">
							<i class="fa-solid fa-chevron-right me-1"></i>Collection
						</a>
					</li>
					<li class="my-3">
						<a href="#blogs" class="text-white text-decoration-none text-muted">
							<i class="fa-solid fa-chevron-right me-1"></i>Blogs
						</a>
					</li>
					<li class="my-3">
						<a href="#about" class="text-white text-decoration-none text-muted">
							<i class="fa-solid fa-chevron-right me-1"></i>About US
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-6 col-lg-3">
				<h5 class="fw-light mb-3">Contact Us</h5>
				<div class="d-flex justify-content-start align-items-start my-2 text-muted">
					<span class="me-3">
						<i class="fa-solid fa-map-location-dot"></i>
					</span>
					<span class="fw-light">
						Sector-2, Albert street in Noida,Uttar Pradesh.
					</span>
				</div>
				<div class="d-flex justify-content-start align-items-start my-2 text-muted">
					<span class="me-3">
						<i class="fa-solid fa-envelope"></i>
					</span>
					<span class="fw-light">
						attire.support@gmail.com
					</span>
				</div>
				<div class="d-flex justify-content-start align-items-start my-2 text-muted">
					<span class="me-3">
						<i class="fa-solid fa-phone"></i>
					</span>
					<span class="fw-light">
						+912 354 657 680
          </span>

				</div>
	     </div>

    <div class="col-md-6 col-lg-3">
    	<h5 class="fw-light mb-3">Follow Us</h5>
    	<div>
    		<ul class="list-unstyled d-flex">
    			<li>
    				<a href="https://facebook.com/" class="text-white text-decoration-none text-muted fs-4 me-4">
    					<i class="fa-brands fa-facebook"></i>
    				</a>
           </li>

    			<li>
    				<a href="https://twitter-square.com/" class="text-white text-decoration-none text-muted fs-4 me-4">
    					<i class="fa-brands fa-square-twitter"></i>
    				</a>
         </li>

         <li>
    				<a href="https://instagram.com/" class="text-white text-decoration-none text-muted fs-4 me-4">
    					<i class="fa-brands fa-square-instagram"></i>
    				</a>
         </li>

         <li>
    				<a href= "https://linkedin.com/" class="text-white text-decoration-none text-muted fs-4 me-4">
    					<i class="fa-brands fa-linkedin"></i>
    				</a>
         </li>

    			
    		</ul>
    	</div>
    </div>
  </div>
</div>
</footer>

   


 <!--End of footer  -->

 <!-- modals -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-0" style="background-color:#454545">
        <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Welcome TO Our Ecommerce Websites</h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <form action="form.php" method="post">
       <div class="modal-body bg-light border-0">
        <input type="text" name="name" placeholder="Enter Your Full Name" class="form-control"><br>
        <input type="text" name="email" placeholder="Enter Your Email-Address" class="form-control"><br>
        <input type="number" name="phone_no" placeholder="Enter Your Phone-No" class="form-control"><br>
        <input type="password" name="pass" placeholder="Enter your password" class="form-control"><br>
        <div>
       <select class="form-select" id="validationCustom04" name="drop-down" required>
      <option selected disabled value="">Are you Interested?</option>
      <option>Yes</option>
      <option>No</option>
      </select>
    </div>
      <br>
        <textarea type="text" name="message" class="form-control" placeholder="Message" rows="5"></textarea><br>
       <button class="btn btn-outline-primary">Submit</button>
     </div>
   </form>
   </div>
 </div>
</div>

<script type="text/javascript" src="jquery-3.6.4.min.js"></script>
<script>
	 $(document).ready(function(){

    setTimeout(function(){
      $('#exampleModal').modal('show');
    },20000)

  });
    
</script>

<!-- end of modals -->

<!-- toasts -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">E-Online Shop</strong>
      <small>5 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello Users!! If you are joining this online shopping, fill The form.
    </div>
  </div>
</div>

<script type="text/javascript" src="jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function(){
     setTimeout(function(){
      $('#liveToast').toast('show');
    },30000)
   });
</script>



<!-- end of toasts -->
     
     
     
   


      		
    

      
     
      


</body>
</html>
  


<!-- jquery link -->

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<script>
	// init Isotope
var $grid = $('.collection-list').isotope({
  // options
});
// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  resetFilterbtns();
  $(this).addClass('active-filter-btn');
  $grid.isotope({ filter: filterValue });
});

var filterbtns = $('.filter-button-group').find('button');
function resetFilterbtns(){
	filterbtns.each(function(){

		$(this).removeClass('active-filter-btn');


	});

}

</script>

