<html>

	<head>
		<title> HOTEL TOKLOBO | HT </title>
		<meta name="viewport" content="width=device-width, initial-scale=0.1" /> 
		<meta name="description" content="site web de l'hotel toklobo">
		<meta name="author" content="cedric akrou">
		<link rel="shortcut icon" href="images/alfresco.ico" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/index.css" rel="stylesheet" />
	</head>

	<body>

		<?php include('menu/menu.php') ?>

		<div class="container">

			<div class="row">
				<div id="carousel" class="carousel slide col-lg-12">

					<div class="carousel-inner">
						<div class="item"> <img src="images/image_carousel/carousel1.jpeg" /> </div>
						<div class="item  active"> <img src="images/image_carousel/carousel2.jpeg" /> </div>
						<div class="item"> <img src="images/image_carousel/carousel3.jpeg" /> </div>
					</div>


					<a class="left carousel-control" href="#carousel" data-slide="prev">
						<span class="icon-prev"></span>
					</a>

					<a class="right carousel-control" href="#carousel" data-slide="next">
						<span class="icon-next"></span>
					</a>


				</div>

			</div>
		</div>

		<?php include('menu/footer.php') ?>

		<script type="text/javascript" src="bootstrap/js/jquery.js" />
		<script type="text/javascript" src="bootstrap/js/carousel.js" />
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" />
	</body>

</html>
