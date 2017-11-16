
<!DOCTYPE html>
<html lang="en">

<head>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css"
	href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="style.css">

<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>@yield('title')</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
<link
	href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
	rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top"
		id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">C.D.M.I.S</a>
			<button class="navbar-toggler navbar-toggler-right" type="button"
				data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#about">About</a></li>

					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#Partners">Partners</a></li>

					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#contact">Contact</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#feedback">Feedback</a></li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto text-center">
					<h2 class="section-heading">Let's Get In Touch!</h2>
					<hr class="my-4">
					<p class="mb-5">Ready to start your next project with us?
						That's great! Give us a call or send us an email and we will get
						back to you as soon as possible!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 ml-auto text-center">
					<i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
					<p>123-456-6789</p>
				</div>
				<div class="col-lg-4 mr-auto text-center">
					<i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
					<p>
						<a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section id="feedback" class="bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-faded mb-5">Give Your Feedback</h2>
					<hr class="my-4">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 ">
					<div class="service-box mt-12 ">
						<form method="post">
							<div class="control-group">
								<label>Email:</label><input type="email" class="form-control" />

								<label>Token:</label><input type="text" class="form-control" />
								<br>
								<button type="button" class="btn btn-dafault"
									data-toggle="modal" data-target="#feedbackModal">Proceed</button>
							</div>
							<br>
						</form>

						<!-- line modal -->
						<div class="modal fade" id="feedbackModal" tabindex="-1"
							role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">
											<span aria-hidden="true">×</span><span class="sr-only">Close</span>
										</button>
										<h3 class="modal-title" id="lineModalLabel">Feedback</h3>
									</div>
									<div class="modal-body">


										<div class="service-box mt-12 feedbacked">

											<label>Feedback:</label>
											<textarea class="form-control"></textarea>
											Colleges:<select class='form-control'>
												<option>DAICT</option>
												<option>Somlalit</option>
											</select> <br>
										</div>
									</div>
									<div class="modal-footer">
										<div class="btn-group btn-group-justified" role="group"
											aria-label="group button">
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-default"
													data-dismiss="modal" role="button">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">

				<div class="panel panel-white post panel-shadow">
					<div class="post-heading">
						<div class="pull-left image">
							<img src="http://bootdey.com/img/Content/user_1.jpg"
								class="img-circle avatar" alt="user profile image">
						</div>
						<div class="pull-left meta">
							<div class="title h5">
								<a href="#"><b>Ryan Haywood</b></a> made a post.
							</div>
							<h6 class="text-muted time">1 minute ago</h6>
						</div>
					</div>
					<div class="post-description">
						<p>Bootdey is a gallery of free snippets resources templates
							and utilities for bootstrap css hmtl js framework. Codes for
							developers and web designers</p>
						<div class="stats">
							<a href="#" class="btn btn-default stat-item"> <i
								class="fa fa-thumbs-up icon"></i>2
							</a> <a href="#" class="btn btn-default stat-item"> <i
								class="fa fa-thumbs-down icon"></i>12
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Plugin JavaScript -->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<!-- Custom scripts for this template -->
	<script src="js/creative.min.js"></script>
</body>

</html>