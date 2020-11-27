<?php
include 'inc/head.inc.php'
?>
	<!--HEADER-->
	<header>
		<div class='container-fluid'>
			<div class='jumbotron text-center'>
				<h1>Shawpify</h1>
				<?php
				if(isset($_SESSION['username'])){
					echo "<p>Welcome back ".$_SESSION['username']. "!</p>";
				}
				else{
				echo "<p>Offering a wide range of products from consumer electronics to cars</p>";
				}
				?>
			</div>
		</div>
	</header>
	
	<!--MAIN-->
	<main class='container'>
		<div class='row'>
			<div class="col-md-3"><!--SECONDARY NAV MENU - COULD ANOTHER TAG BE USED INSTEAD OF DIV HERE? -->
				<p class="lead">Product Range</p>
				<p>Computers</p>
				<div class='list-group'>
					<a href="#" class="list-group-item">Category 1</a>
					<a href="#" class="list-group-item">Category 2</a>
					<a href="#" class="list-group-item">Category 3</a>
				</div>
				<p>Cars</p>
				<div class='list-group'>
					<a href="#" class="list-group-item">Category 4</a>
					<a href="#" class="list-group-item">Category 5</a>
					<a href="#" class="list-group-item">Category 6</a>
				</div>
			</div>
			<div class="col-md-9"><!--PRIMARY INFORMATION ON PAGE - UPGRADE TO HTML5 -->
				<div class="row carousel-holder">
					<div class="col-md-12">	  <!--FIX: NOT class='carousel-slide'-->
						<div id="carousel" class='carousel slide' data-ride='carousel'>
							<ol class='carousel-indicators'>
								<li data-target='#carousel' data-slide-to='0' class='active'></li>
								<li data-target='#carousel' data-slide-to='1'></li>
								<li data-target='#carousel' data-slide-to='2'></li>
							</ol>

							<div class='carousel-inner'><!-- IMG SOURCE FOR SLIDER -->
								<div class='item active'>
									<img class='slide-image' src='img/car1.jpg' alt=''>
								</div>
								<div class='item'>
									<img class='slide-image' src='img/car2.jpg' alt=''>
								</div>
								<div class='item'>
									<img class='slide-image' src='img/car3.jpg' alt=''>
								</div>
							</div><!--ACTION FOR SLIDER -->
							<a class='left carousel-control' href='#carousel' data-slide='prev'>
								<span class='glyphicon glyphicon-chevron-left'></span>
							</a>

							<a class='right carousel-control' href='#carousel' data-slide='next'>
								<span class='glyphicon glyphicon-chevron-right'></span>
							</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">R24.99</h4>
								<h4><a href="inc/productimages.php">First Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">15 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">R64.99</h4>
								<h4><a href="inc/productimages.php">Second Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">12 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">


							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">R74.99</h4>
								<h4><a href="inc/productimages.php">Third Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">31 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">R84.99</h4>
								<h4><a href="inc/productimages.php">Fourth Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">6 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">R94.99</h4>
								<h4><a href="inc/productimages.php">Fifth Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">18 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">R74.99</h4>
								<h4><a href="inc/productimages.php">Sixth Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">31 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>
					<div class="text-center">
						<nav aria-label="Page navigation">
							<ul class="pagination">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>	
	</main>
	<!--FOOTER-->
<?php
include 'inc/foot.inc.php'
?>