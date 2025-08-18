<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
<meta name="description" content="FindHouse - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>HOM Agency - Contact Us</title>
<!-- Favicon -->
<link href="images/home/icon_hom.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/home/icon_hom.png" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    <header class="header-nav menu_style_home_one style2 navbar-scrolltofixed stricky main-menu">
        <div class="container-fluid p0">
            <!-- Ace Responsive Menu -->
            <nav>
                <!-- Menu Toggle btn-->
                <div class="menu-toggle">
                    <img class="nav_logo_img img-fluid" src="{{ asset('header-logo.png') }}" alt="header-logo.png">
                    <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="/" class="navbar_brand float-left dn-smd">
                    <img class="logo1 img-fluid" src="{{ asset('images/home/web-logo.png') }}" alt="header-logo.png" style="width: 120px; height: auto; max-width: 100%">
                    <img class="logo2 img-fluid" src="{{ asset('images/header-logo2.png') }}" alt="header-logo2.png">
                </a>
                <!-- Responsive Menu Structure-->
                <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                    <li>
                        <a href="/"><span class="title">Home</span></a>
                    </li>
                    <li>
                        <a href="/listing_page"><span class="title">Listing</span></a>
                    </li>
                    <li>
                        <a href="/about"><span class="title">About</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="title">Explore</span></a>
                        <ul>
                            <li><a href="/faq">Faq</a></li>
                           
                        </ul>
                    </li>
                    <li class="last">
                        <a href="/contact"><span class="title">Contact</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <div class="d-flex justify-content-between">
                    <a class="mobile-menu-trigger" href="#menu"><img src="{{ asset('images/dark-nav-icon.svg') }}" alt=""></a>
                    <a class="nav_logo_img" href="/"><img class="img-fluid mt20" src="{{ asset('images/header-logo2.png') }}" alt="header-logo2.png"></a>
                    <a class="mobile-menu-reg-link" href="page-register.html"><span class="flaticon-user"></span></a>
                </div>
            </div>
        </div><!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/listing_page">Listing</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="page-blog-v1.html">Blog</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
                <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
            </ul>
        </nav>
    </div>

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                        <h4 class="breadcrumb_title">Contact Us</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Contact -->
    <section class="our-contact pb0 bgc-f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="form_grid">
                        <h4 class="mb5">Book Your Property Consultation</h4>
                        <p>Whether you're buying, selling, or just exploring your options, we're here to help. Reach out to us with your questions, property needs, or business inquiries. Our team will get back to you shortly with expert advice tailored to your goals. Let's connect and make your real estate journey smooth and successful.</p>
                        <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" name="form_name" class="form-control" required="required" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" name="form_email" class="form-control required email" required="required" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_phone" name="form_phone" class="form-control required phone" required="required" type="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        
                                        <select id="form_role" name="form_role" class="form-control required" required>
                                            
                                            <option value="" selected disabled style="display:none;">I am a :</option>
                                            <option value="Agent">Agent</option>
                                            <option value="Investor">Investor</option>
                                            <option value="Buyer">Buyer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="form_message" class="form-control required" rows="8" required="required" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="form-group mb0">
                                        <button type="button" class="btn dbxshad btn-lg btn-thm rounded">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="contact_localtion">
                        <h4>Contact Us</h4>
                        <p>Have a question, need advice, or ready to take the next step? We're here to assist you with all your real estate needs in Dubai. Reach out today — our team is just a call or message away.</p>
                        <div class="content_list">
                            <h5>Address</h5>
                            <p>Barsha Heights, Dubai. <br>United Arab Emirates.</p>
                        </div>
                        <div class="content_list">
                            <h5>Phone</h5>
                            <p>+971 56 4777 7039</p>
                        </div>
                        <div class="content_list">
                            <h5>Mail</h5>
                            <p>info@homagency.ae</p>
                        </div>
                        <h5>Follow Us</h5>
                        <ul class="contact_form_social_area">
                            <li class="list-inline-item"><a href="https://www.facebook.com/people/HOM-Agency/61567611663846/#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/hom.uaeagency/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p0 mt50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h600" id="map-canvas"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Footer -->
   
 @include('components.footer')

    <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->

<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ace-responsive-menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/snackbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/simplebar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scrollto.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.counterup.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/progressbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/timepicker.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&callback=initMap" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/googlemaps1.js') }}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>