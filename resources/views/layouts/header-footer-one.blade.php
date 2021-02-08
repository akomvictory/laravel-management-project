<!doctype html>
<html class="no-js" lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Home-1 | Marcho</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/logo/favicon.png') }}">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/owl.transitions.css') }}">

		<!-- font-awesome css -->
		<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/icon.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/flaticon.css') }}">
        <!-- magnific css -->
        <link rel="stylesheet" href="{{ asset('/css/zebra_datepicker.css') }}">
		<!-- magnific css -->
        <link rel="stylesheet" href="{{ asset('/css/magnific.min.css') }}">
		<!-- venobox css -->
		<link rel="stylesheet" href="{{ asset('/css/venobox.css') }}">
		<!-- style css -->
		<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
		<!-- responsive css -->
		<link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">

		<!-- modernizr css -->
		<script src="{{ asset('/js/marco/modernizr-2.8.3.min.js') }}"></script>
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
        <!-- header -->
        <header class="header">
            <div class="container clearfix">
                <div class="header-right-info">
                    <ul>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <div class="text-box">
                                    <p>Tech Avenue, <br> Abuja, Nigeria</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <div class="text-box">
                                    <p>+ 234 72 2705345 <br>jenx.com</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-clock-o"></i></div>
                                <div class="text-box">
                                    <p>Mon - Sat 9.00 - 19.00 <br>Sunday Closed</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-left-info">
                    <div class="link">
                        <a href="/reservation" class="thm-btn-inverse">Dashboard</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- Main menu -->
        <section class="main-menu-one finance-navbar">
            <nav id="main-navigation-wrapper" class="navbar navbar-default Marcho-navbar">
                <div class="container">
                    <div class="float-left">
                        <div class="logo pull-left"><a href="index.html">
                     <!--   <img src="img/logo/logo.png" alt="Awesome Image"> --></a></div>
                    </div>
                    <div class="float-right">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div>
                        <div id="main-navigation" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown"><a href="/">Home</a>
                                    
                                  
                                </li>
                               <!-- <li class="dropdown"><a href="about.html">about us</a> -->

                                </li>
                                <li class="dropdown"><a href="#">reservation</a>
                                <ul class="dropdown-submenu">
                                    <li><a href="/accomodation/regular/category">Regular</a></li>
                                    <li><a href="/accomodation/executive/category">Executive</a></li>
                                    <li><a href="/accomodation/business/category">Business class</a></li>
                                    <li><a href="/accomodation/suite/category">Suites</a></li>

                                   

                                 </ul>
                            </li>
                              
                            @guest
                            <li class="dropdown"><a href="{{ route('login') }}">Login</a>
                            <li class="dropdown"><a href="{{ route('register') }}">Register</a>
                            @endguest

                            @auth
                            <li class="dropdown"><a href="#">{{ Auth::user()->name }} </a>
                                <ul class="dropdown-submenu">
                                    <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                  </form>
                </li>
                @endauth
                                  

                                   

                                 </ul>
                            </li>
                              
                            
                                
                            </ul>

                        </div>
                    </div>

                </div>
            </nav>
        </section>
        <!-- MAin menu ends -->






        @yield('content')






        <!-- Start Footer bottom section -->
     <!--   <footer class="footer sec-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-widget about-widget"><a class="logo" href="index.html"><img src="img/logo/logo2.png" alt="Awesome Image"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada fringilla sem, at dictum lectus ultricies quis. Etiam eu bibendum orci. Aliquam erat volutpat.</p>
                        <div class="link"><a href="#">MORE ABOUT US</a> </div>
          
                      </div>
                    </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget links-widget-pac">
                          <div class="title">
                            <h4>Services</h4>
                    
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <ul>
                                <li><a href="#">Hotel Growth</a></li>
                                <li><a href="#">Hotel Loan</a></li>
                                <li><a href="#">Financial Planning</a></li>
                                <li><a href="#">Insurance Consulting</a></li>
                                <li><a href="#">Retirenment Planing</a></li>
                                <li><a href="#">Tax Planing</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
          
                    </div>
          
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                     
                    </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget subscribe-widget">
                          <div class="title">
                            <h4>Contact Us</h4>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="text">
                              <p>Tech Avenue St, Abuja, Nigeria</p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                              <p>( +234) 65 524 8503  /  (+234) 954 7854</p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <div class="text">
                              <p><a href="#">jenx@hotel.com</a></p>
                            </div>
                          </div>
          
                          <ul class="social list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
          
                  </div>
                </div>
              </footer> -->
        <!-- End Footer bottom section -->
        <section class="footer-bottom">
                    <div class="container clearfix">
                      <div class="pull-left">
                        <p>Copyright © Jenx {{date("Y")}}. All rights reserved. </p>
                      </div>
                      <div class="pull-right">
                        <p>Created by: Jenx.io</p>
                      </div>
                    </div>
                  </section>
		
		<!-- all js files -->

		<!-- jquery latest version -->
		<script src="{{ asset('/js/marco/jquery-1.12.4.min.js') }}"></script>
		<!-- bootstrap js -->
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<!-- owl.carousel js -->
		<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
		<!-- Counter js -->
		<script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
		<!-- waypoint js -->
		<script src="{{ asset('/js/waypoints.js') }}"></script>
		<!-- isotope js -->
        <script src="{{ asset('/js/isotope.pkgd.min.js') }}"></script>
        <!-- stellar js -->
        <script src="{{ asset('/js/jquery.stellar.min.js') }}"></script>
        <!-- stellar js -->
        <script src="{{ asset('/js/imagelightbox.min.js') }}"></script>
		<!-- magnific js -->
        <script src="{{ asset('/js/magnific.min.js') }}"></script>
		<!-- venobox js -->
		<script src="{{ asset('/js/venobox.min.js') }}"></script>
        <!-- meanmenu js -->
        <script src="{{ asset('/js/jquery.meanmenu.js') }}"></script>
        <!-- tabs js -->
        <script src="{{ asset('/js/tabs.js') }}"></script>
		<!-- Form validator js -->
		<script src="{{ asset('/js/form-validator.min.js') }}"></script>
		<!-- plugins js -->
		<script src="{{ asset('/js/plugins.js') }}"></script>
        <!-- datapicker js -->
        <script src="{{ asset('/js/zebra_datepicker.min.js') }}"></script>
		<!-- main js -->
		<script src="{{ asset('/js/main.js') }}"></script>
	</body>

</html>