<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Footable CSS -->
    <link href="../plugins/bower_components/footable/css/footable.core.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/css/colors/default.css" id="theme" rel="stylesheet">	
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="../plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
	
	<!-- CSS For dropdown-->
	<style>
	
	.styled-select {
	   background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
	   height: 29px;
	   overflow: hidden;
	   width: 240px;
	}

	.styled-select select {
	   background: transparent;
	   border: none;
	   font-size: 14px;
	   height: 29px;
	   padding: 5px;
	   width: 268px;
	}
	
	select#soflow, select#soflow-color {
	   -webkit-appearance: button;
	   -webkit-border-radius: 2px;
	   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
	   -webkit-padding-end: 20px;
	   -webkit-padding-start: 2px;
	   -webkit-user-select: none;
	   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
	   background-position: 97% center;
	   background-repeat: no-repeat;
	   border: 1px solid #AAA;
	   color: #555;
	   font-size: inherit;
	   margin: 20px;
	   overflow: hidden;
	   padding: 5px 10px;
	   text-overflow: ellipsis;
	   white-space: nowrap;
	   width: 300px;
	}

	select#soflow-color {
	   color: #fff;
	   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
	   background-color: #779126;
	   -webkit-border-radius: 20px;
	   -moz-border-radius: 20px;
	   border-radius: 20px;
	   padding-left: 15px;
	}
	
	</style>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	

<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">            
			<div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="../plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="../plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="../plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="../plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span></a>
                </div>
                <!-- /Logo -->
				<!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                     <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="../plugins/images/users/varun.jpg" alt="user" /></div>
                                    <div class="u-text">
                                        <h4>Steave Jobs</h4>
                                        <p class="text-muted">varun@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                             <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="login2.html"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>		
		<!-- Header End -->
        <!-- End Top Navigation -->
        
		<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i>Change Password</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
				
					<!-- Dashboard -->
						<li> <a href="ConsultancyIndex.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>
					<!-- End Dashboard -->
					
					<!-- Manage Feedback -->
					    <li> <a href="manageclient.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Client </span></a></li>
                    <!-- End Manage Feedback -->

					<!-- Manage Location -->

					<!-- End Manage Location -->
					
					<!--End Manage Activities  -->					 
                </ul>
            </div>
        </div>        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Location</h4> </div>                    
                </div>

                 @isset($result)
                    @foreach($result as $res)
                <div class="row">
                                       <!-- /.col-lg-4 -->
                    <div class="col-lg-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> {{ $res -> iname }}
                                
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
									<div class="row">
									<div class="col-sm-3">
										<div class="col-lg-6">
											<img src={{ $res -> ilogo }} height="100px" width="100px"></img>
										</div>
									</div>
									<div class="col-sm-9">
										<div class="col-lg-9">
											<label>City:</label>&nbsp;{{ $res -> icity}}
										</div>
										<div class="col-lg-9">
											<label>Contact Number</label>&nbsp;{{ $res -> inum}}
										</div>
										<div class="col-lg-9">
											<label>Website:</label>&nbsp;{{ $res -> isite}}
										</div>
									</div>
									
								<div class="row">
								<div class="col-sm-12">
										<div class="col-lg-6">
										
										</div>
										<div class="col-lg-6">
											<div class="col-lg-3">
											</div>
											<form method="get" action="/institute/{{ $res->iid }}">
												<input type="hidden" name="instaid" value="value">
											<div class="col-lg-3">
											<button type="submit" class="btn btn-primary btn-rounded" >View More</button>
											</div>
											</form>
											</div>
										</div>
								</div>
								</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
 
                </div>
                <!-- /row -->
                    @endforeach
                @endisset

            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
	<script>
		function deleteCheckFunction(id) {			
					if($("#deleteCheck:checked").length == 0) 
						{
							deleteButton.disabled = true;							
						}
						else
						{
							deleteButton.disabled = false;
						}
		}
		
		function deleteConfirmation(){
		
			
		
		}
		
	</script>
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/js/custom.min.js"></script>
    <!-- Footable -->
    <script src="../plugins/bower_components/footable/js/footable.all.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="/js/footable-init.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>	
</body>

</html>