<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Erin McKillip : User Resposive Designer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Erin McKillip">
	<meta name="description" content="Online portfolio hand-coded using Twitter Bootstrap">
	<link rel="icon" href="favicon.ico">

	<!--Inserted for debugging purposes -->
	<script src="js/ie-emulation-modes-warning.js"></script>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">

</head>

<body>
<!---Navigation-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a class="navbar-brand" href="#">Erin McKillip</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#">About</a></li>
						<li><a href="#features">Features</a></li>
						<li><a href="#">Skills</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>


<!---Carousel-->

	<div id="myCarousel" class="carousel slide" data-ride="carousel">

		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="first-slide" src="" alt="Web Development and Design Slide">
				<div class="container">
					<div class="carousel-caption">
						<h2>Web Development and Design</h2>
						<p>Any text goes here</p>
						<p><a class="btn btn-sm btn-primary" href="#" role="button">More information</a></p>
					</div>
				</div>
			</div>

			<div class="item">
				<img class="second-slide" src="" alt="UI/UX Design">
				<div class="container">
					<div class="carousel-caption">
						<h2>UI/UX Design</h2>
						<p>Text here</p>
						<p><a class="btn btn-sm btn-primary" href="#" role="button">More information</a></p>
					</div>
				</div>
			</div>

			<div class="item">
				<img class="third-slide" src="" alt="Content Management Systems">
				<div class="container">
					<div class="carousel-caption">
						<h2>Content Management Systems</h2>
						<p></p>
					</div>
				</div>
			</div>

			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

<!--- Features -->


	
	<div class="container marketing">

		<div class="row">
			<div class="col-lg-4">
				<img class="img-square" src="" alt="Education" width="150" height="150">
				<h3>Education</h3>
				<p>Junk about my schooling</p>
				<p><a class="btn btn-default" href="#" role="button">Details</a></p>
			</div>

			<div class="col-lg-4">
				<img class="img-square" src="" alt="Work" width="150" height="150">
				<h3>Work Experience</h3>
				<p>Junk about my history</p>
				<p><a class="btn btn-default" href="#" role="button">Details</a></p>
			</div>

			<div class="col-lg-4">
				<img class="img-square" src="" alt="Other Information" width="150" height="150">
				<h3>Other Information</h3>
				<p>Junk about my hobbies and stuff maybe?</p>
				<p><a class="btn btn-default" href="#" role="button">Details</a></p>
			</div>
		</div>
	</div>

<!--- Sections -->

	<hr class="featurette-divider">

	<div class="row featurette">
		<div class="col-md-7">
			<h3 class="featurette-heading">Skills</h3>
			<p class="lead">Junk about my skills</p>
		</div>
		<div class="col-md-5">
			<img class="featurette-image img-responsive center-block" alt="skills image">
		</div>
	</div>

	<div class="row featurette">
		<div class="col-md-7 col-md-push-5">
			<h3 class="featurette-heading">Portfolio</h3>
			<p class="lead">My projects</p>
		</div>
		<div class="col-md-5 col-md-pull-7">
			<img class="featurette-image img-responsive center-block" alt="skills image">
		</div>
	</div>

	<div class="row featurette">
		<div class="col-md-7">
			<h3 class="featurette-heading">Contact Me</h3>
			<p class="lead">Form to contact me with</p>
		</div>
		<div class="col-md-5">
			<img class="featurette-image img-responsive center-block" alt="skills image">
		</div>
	</div>





<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>