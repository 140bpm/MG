<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>MG - @yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Search Button CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/search.css')}}">

    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="{{asset('assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="{{asset('assets/img/car-1.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/admin" class="simple-text">
                    MG Automotores
                </a>
            </div>

            <ul class="nav">
                <li class=" <?php if($page=='admin'){echo 'active';} ?> ">
                    <a href="/admin">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class=" <?php if($page=='cars'){echo 'active';} ?> ">
                    <a href="/admin/cars">
                        <i class="pe-7s-car"></i>
                        <p>Cars</p>
                    </a>
                </li>
                <li class=" <?php if($page=='motorcycles'){echo 'active';} ?> ">
                    <a href="/admin/motorcycles">
                        <i class="pe-7s-bicycle"></i>
                        <p>Motorcycles</p>
                    </a>
                </li>
                <li class=" <?php if($page=='plans'){echo 'active';} ?> ">
                    <a href="/admin/plans">
                        <i class="pe-7s-note2"></i>
                        <p>Plans</p>
                    </a>
                </li>
                <li class=" <?php if($page=='customers'){echo 'active';} ?> ">
                    <a href="/admin/customers">
                        <i class="pe-7s-user"></i>
                        <p>Customes</p>
                    </a>
                </li>
                <li class=" <?php if($page=='employeds'){echo 'active';} ?> ">
                    <a href="/admin/employeds">
                        <i class="pe-7s-id"></i>
                        <p>Employeds</p>
                    </a>
                </li>
                <li class=" <?php if($page=='bills'){echo 'active';} ?> ">
                    <a href="/admin/bills">
                        <i class="pe-7s-news-paper"></i>
                        <p>Bills</p>
                    </a>
                </li>
                <li class=" <?php if($page=='setings'){echo 'active';} ?> ">
                    <a href="/admin/settings">
                        <i class="pe-7s-config"></i>
                        <p>settings</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="https://mg-automotores.negocio.site">
                        <i class="pe-7s-rocket"></i>
                        <p>View Main Page</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">@yield('namepage')</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                    <i class="pe-7s-bell">
                                    </i>
                                    <span class="badge">5</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Notification 5</a></li>
                              </ul>
                        </li>
                        <li>
                           <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                        @yield('content-row1')
                </div>

                <div class="row">
                        @yield('content-row2')
                </div>

                <div class="row">
                        @yield('content-row3')
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="#">Company</a>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2018 - Guillén, Sebastian.
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('assets/js/demo.js')}}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	@yield('greeting')

    	});
	</script>

</html>