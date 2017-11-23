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
		<style>
			.center {
			margin-top:50px;   
			}
			.modal-header {
			padding-bottom: 5px;
			}
			.modal-footer {
			padding: 0;
			}
			.modal-footer .btn-group button {
			height:40px;
			border-top-left-radius : 0;
			border-top-right-radius : 0;
			border: none;
			border-right: 1px solid #ddd;
			}
			.modal-footer .btn-group:last-child > button {
			border-right: 0;
			}
			.panel-shadow {
			box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
			}
			.panel-white {
			border: 1px solid #dddddd;
			}
			.panel-white  .panel-heading {
			color: #333;
			background-color: #fff;
			border-color: #ddd;
			}
			.panel-white  .panel-footer {
			background-color: #fff;
			border-color: #ddd;
			}
			.post .post-heading {
			height: 95px;
			padding: 20px 15px;
			}
			.post .post-heading .avatar {
			width: 60px;
			height: 60px;
			display: block;
			margin-right: 15px;
			}
			.post .post-heading .meta .title {
			margin-bottom: 0;
			}
			.post .post-heading .meta .title a {
			color: black;
			}
			.post .post-heading .meta .title a:hover {
			color: #aaaaaa;
			}
			.post .post-heading .meta .time {
			margin-top: 8px;
			color: #999;
			}
			.post .post-image .image {
			width: 100%;
			height: auto;
			}
			.post .post-description {
			padding: 15px;
			}
			.post .post-description p {
			font-size: 14px;
			}
			.post .post-description .stats {
			margin-top: 20px;
			}
			.post .post-description .stats .stat-item {
			display: inline-block;
			margin-right: 15px;
			}
			.post .post-description .stats .stat-item .icon {
			margin-right: 8px;
			}
			.post .post-footer {
			border-top: 1px solid #ddd;
			padding: 15px;
			}
			.post .post-footer .input-group-addon a {
			color: #454545;
			}
			.post .post-footer .comments-list {
			padding: 0;
			margin-top: 20px;
			list-style-type: none;
			}
			.post .post-footer .comments-list .comment {
			display: block;
			width: 100%;
			margin: 20px 0;
			}
			.post .post-footer .comments-list .comment .avatar {
			width: 35px;
			height: 35px;
			}
			.post .post-footer .comments-list .comment .comment-heading {
			display: block;
			width: 100%;
			}
			.post .post-footer .comments-list .comment .comment-heading .user {
			font-size: 14px;
			font-weight: bold;
			display: inline;
			margin-top: 0;
			margin-right: 10px;
			}
			.post .post-footer .comments-list .comment .comment-heading .time {
			font-size: 12px;
			color: #aaa;
			margin-top: 0;
			display: inline;
			}
			.post .post-footer .comments-list .comment .comment-body {
			margin-left: 50px;
			}
			.post .post-footer .comments-list .comment > .comments-list {
			margin-left: 50px;
			}
			.thumbnail {
			padding:0px;
			}
			.panel {
			position:relative;
			}
			.panel>.panel-heading:after,.panel>.panel-heading:before{
			position:absolute;
			top:11px;left:-16px;
			right:100%;
			width:0;
			height:0;
			display:block;
			content:" ";
			border-color:transparent;
			border-style:solid solid outset;
			pointer-events:none;
			}
			.panel>.panel-heading:after{
			border-width:7px;
			border-right-color:#f7f7f7;
			margin-top:1px;
			margin-left:2px;
			}
			.panel>.panel-heading:before{
			border-right-color:#ddd;
			border-width:8px;
			}
		</style>
		<title>Arise Career Advisor</title>
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
				<a class="navbar-brand js-scroll-trigger" href="#page-top"><b>Arise Career Advisor</b></a>
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
							href="#contact">Contact</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger"
							href="#feedback">Feedback</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger"
							href="/login">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<header class="masthead text-center text-white d-flex">
			<div class="container my-auto">
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<p >
							<font size="200px" color="white">
							<b>Enhance Your Knowledge For A Brighter Career</b>
							</font>
						</p>
						<hr>
					</div>
				</div>
			</div>
		</header>
		<section class="bg-primary" id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<h2 class="section-heading text-white">We've got what you
							need!
						</h2>
						<hr class="light my-4">
						<p class="text-faded mb-4"><b>Worried about how will you figure out which institue to choose that can match up to your desires!</b><br><br>
							Here we are to help you.
							Just talk to our consultant and tell them what are you looking for they will get back you with the best results helping you to decide where you want to go and which institue you want to choose in order to shape your future the best way as we understand your worries and know how important it is to select a right institute in order to have a brighter career
						</p>
					</div>
				</div>
			</div>
		</section>
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<h2 class="section-heading" style="color: black;">Let's Get In Touch!</h2>
						<hr class="my-4">
						<p class="mb-5" style="color: black;" ><b>Ready to join our family?</b><br><br>
							This is where you need to call and we would be delighted to help you<br><br> 
							<font size="5px" color="green"><b>9876543210</b></font>
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
					<div class="col-sm-6">
						<div class="service-box mt-12 ">
							<form method="post" action="/clientdata/search">
								{{ csrf_field() }}
								<div class="control-group">
									<label>Email:</label><input type="email" placeholder="Email address given at the time of visit" name="clientEmail" class="form-control" />
									<label>Token:</label><input type="text" class="form-control" placeholder='Mailed with title "C.D.M.I.S. Feedback Token"' name="clientPassword" />
									<br>
									<button type="button" id="proceed" class="btn btn-success">Proceed</button>
								</div>
								<br>
							</form>
						</div>
					</div>
					<div class="col-sm-6">
						<div id="instituteChoiceDiv" style="display:none">
							<form method="POST" action="/instituteSuggestion/upvote">
								{{ csrf_field() }}
								<input type="hidden" name="clientId" value="" />
								<table id="instituteChoiceTable" style="background-color:#ffffff;" class="table table-bordered">
									<tr>
										<th>Institute Name</th>
										<th>Choose</th>
									</tr>
								</table>
								<button type="submit" class="btn btn-success">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
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
		<script type="text/javascript">
			$(document).ready(function(){
				$('#proceed').click(function(){
					$.ajax({
						url : '/clientdata/search',
						type : 'POST',
						data : {'clientEmail' : $('[name=clientEmail]').val(), 'clientPassword' : $('[name=clientPassword]').val(), '_token' : $('[name=_token]').val() },
						success : function(data) {
							if(!data) {
								alert("Could not find any record. You can send feedback only once. Also make sure that credential you entered are correct.");
							} else {
								console.log(data);
								$('#instituteChoiceDiv').show();
								data = JSON.parse(data);
								data.forEach(row => {
									$('#instituteChoiceTable tr:last').after('<tr><td>'+row.instituteName+'</td><td><input type="radio" name="instituteId" value="'+row.instituteId+'" /></td></tr>');
									$("[name='clientId']").prop('value', row.clientId);
								});
							}
						}
					});
				});
			});
		</script>
	</body>
</html>