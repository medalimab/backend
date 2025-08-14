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
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<!-- Title -->
<title>HOM Agency - Property Details</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@php
    $firstFiveImages = $property->images->take(5);
@endphp
<div class="wrapper">
      <!-- Main Header Nav -->
      <header class="header-nav menu_style_home_one style2  main-menu  main-menu">
        <div class="container-fluid p0">
          <!-- Ace Responsive Menu -->
          <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
              <img
                class="nav_logo_img img-fluid"
                src="{{asset('images/header-logo.png')}}"
                alt="header-logo.png"
              />
              <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <a href="{{ route('properties.homepage') }}" class="navbar_brand float-left dn-smd">
              <img
                class="logo1 img-fluid"
                src="{{asset('images/header-logo2.png')}}"
                alt="header-logo.png"
              />
              <img
                class="logo2 img-fluid"
                src="{{asset('images/header-logo2.png')}}"
                alt="header-logo2.png"
              />
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul
              id="respMenu"
              class="ace-responsive-menu text-right"
              data-menu-style="horizontal"
            >
              <li>
                <a href="{{ route('properties.homepage') }}"><span class="title">Home</span></a>
              </li>
              <li>
                <a href="{{ route('properties.show_listing_page_client') }}"
                  ><span class="title">Listing</span></a>
              </li>
              <li>
                <a href="{{asset('page-service.html')}}">
                  <span class="title">Service</span>
                </a>
              </li>
              <li>
                <a href="{{asset('page-about.html')}}"><span class="title">About</span></a>
              </li>
              <li>
                <a href="#"><span class="title">Explore</span></a>
                <ul>
                  <li><a href="{{asset('page-faq.html')}}">Faq</a></li>
                  <li><a href="{{asset('page-blog-v1.html')}}">Blog</a></li>
                  <!-- <li><a href="page-blog-single.html">Single Post</a></li> -->
                </ul>
              </li>
              <li class="last">
                <a href="{{asset('page-contact.html')}}"><span class="title">Contact</span></a>
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
              <a class="mobile-menu-trigger" href="#menu">
                <img src="{{ asset('images/dark-nav-icon.svg') }}" alt="Dark menu icon">
            </a>
              <a class="nav_logo_img" href="{{ route('properties.homepage') }}"
                ><img
                  class="img-fluid mt20"
                  src="{{asset('images/header-logo2.png')}}"
                  alt="header-logo2.png"
              /></a>
              <a class="mobile-menu-reg-link" href="page-register.html"
                ><span class="flaticon-user"></span
              ></a>
            </div>
          </div>
        </div>
        <!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
          <ul>
            <li>
              <a href="{{ route('properties.homepage') }}"><span>Home</span></a>

            </li>
            <li>
              <span>Listing</span>
              <ul>
                <li>
                  <span>Listing Grid</span>
                  <ul>
                    <li><a href="page-listing-grid-v1.html">Grid v1</a></li>
                    <li><a href="page-listing-grid-v2.html">Grid v2</a></li>
                    <li><a href="page-listing-grid-v3.html">Grid v3</a></li>
                    <li><a href="page-listing-grid-v4.html">Grid v4</a></li>
                    <li><a href="page-listing-grid-v5.html">Grid v5</a></li>
                    <li>
                      <a href="page-listing-full-width-grid.html"
                        >Grid Fullwidth</a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <span>Listing Style</span>
                  <ul>
                    <li>
                      <a href="page-listing-parallax.html">Parallax Style</a>
                    </li>
                    <li><a href="page-listing-slider.html">Slider Style</a></li>
                    <li><a href="page-listing-map.html">Map Header</a></li>
                  </ul>
                </li>
                <li>
                  <span>Listing Half</span>
                  <ul>
                    <li><a href="page-listing-half-map-v1.html">Map V1</a></li>
                    <li><a href="page-listing-half-map-v2.html">Map V2</a></li>
                    <li><a href="page-listing-half-map-v3.html">Map V3</a></li>
                    <li><a href="page-listing-half-map-v4.html">Map V4</a></li>
                  </ul>
                </li>
                <li>
                  <span>Agent View</span>
                  <ul>
                    <li><a href="page-listing-agent-v1.html">Agent V1</a></li>
                    <li><a href="page-listing-agent-v2.html">Agent V2</a></li>
                    <li>
                      <a href="page-listing-agent-v3.html">Agent Details</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <span>Agencies View</span>
                  <ul>
                    <li>
                      <a href="page-agencies-list-v1.html">Agencies V1</a>
                    </li>
                    <li>
                      <a href="page-agencies-list-v2.html">Agencies V2</a>
                    </li>
                    <li>
                      <a href="page-agencies-list-v3.html">Agencies Details</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <span>Property</span>
              <ul>
                <li>
                  <span>Property</span>
                  <ul>
                    <li><a href="page-dashboard.html">Dashboard</a></li>
                    <li><a href="page-my-properties.html">My Properties</a></li>
                    <li>
                      <a href="page-add-new-property.html">Add New Property</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <span>Listing Single</span>
                  <ul>
                    <li><a href="page-listing-single-v1.html">Single V1</a></li>
                    <li><a href="page-listing-single-v2.html">Single V2</a></li>
                    <li><a href="page-listing-single-v3.html">Single V3</a></li>
                    <li><a href="page-listing-single-v4.html">Single V4</a></li>
                    <li><a href="page-listing-single-v5.html">Single V5</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <span>Blog</span>
              <ul>
                <li><a href="page-blog-v1.html">Blog List 1</a></li>
                <li><a href="page-blog-grid.html">Blog List 2</a></li>
                <li><a href="page-blog-single.html">Single Post</a></li>
              </ul>
            </li>
            <li>
              <span>Pages</span>
              <ul>
                <li>
                  <span>Shop</span>
                  <ul>
                    <li><a href="page-shop.html">Shop</a></li>
                    <li><a href="page-shop-single.html">Shop Single</a></li>
                    <li><a href="page-shop-cart.html">Cart</a></li>
                    <li><a href="page-shop-checkout.html">Checkout</a></li>
                    <li><a href="page-shop-order.html">Order</a></li>
                  </ul>
                </li>
                <li><a href="page-about.html">About Us</a></li>
                <li><a href="page-gallery.html">Gallery</a></li>
                <li><a href="page-faq.html">Faq</a></li>
                <li><a href="page-login.html">LogIn</a></li>
                <li><a href="page-compare.html">Membership</a></li>
                <li><a href="page-compare2.html">Membership 2</a></li>
                <li><a href="page-register.html">Register</a></li>
                <li><a href="page-service.html">Service</a></li>
                <li><a href="page-error.html">404 Page</a></li>
                <li><a href="page-terms.html">Terms and Conditions</a></li>
                <li><a href="page-ui-element.html">UI Elements</a></li>
              </ul>
            </li>
            <li><a href="page-contact.html">Contact</a></li>
            <li>
              <a href="page-login.html"
                ><span class="flaticon-user"></span> Login</a
              >
            </li>
            <li>
              <a href="page-register.html"
                ><span class="flaticon-edit"></span> Register</a
              >
            </li>
            <li class="cl_btn">
              <a class="btn btn-block btn-lg btn-thm circle" href="#"
                ><span class="flaticon-plus"></span> Create Listing</a
              >
            </li>
          </ul>
        </nav>
      </div>
	</header>
	<div class="single_page_listing_tab">
		<div class="container">
		
		{{-- <div class="tab-content" id="myTabContent">
			<div class="single_page_listing_style">
				<div class="container-fluid p0">
					<div class="row">
					  <div class="col-sm-6 col-lg-6 p0">
						@if ($images->first())
						  <div class="row m0">
							<div class="col-lg-12 p0">
							  <div class="spls_style_one pr1 1px">
								<a class="popup-img" href="{{ asset('storage/' . $firstFiveImages->first()->image_url) }}">
								  <img
									class="img-fluid w100"
									src="{{ asset('storage/' . $firstFiveImages->first()->image_url) }}"
									alt="Main Property Image"
									style="width: 959px; height: 600px; object-fit: cover;"
								  />
								</a>
							  </div>
							</div>
						  </div>
						@endif
					  </div>
					  <div class="col-sm-6 col-lg-6 p0">
						<div class="row m0">
						  @foreach ($images->slice(1, 4) as $image)
							<div class="col-sm-6 col-lg-6 p0">
							  <div class="spls_style_one">
								<a class="popup-img" href="{{ asset('storage/' . $image->image_url) }}">
								  <img
									class="img-fluid w100"
									src="{{ asset('storage/' . $image->image_url) }}"
									alt="Property Image"
									style="width: 480px; height: 300px; object-fit: cover;"
								  />
								</a>
							  </div>
							</div>
						  @endforeach
						</div>
					  </div>
					</div>
					
				  </div>
			  </div>
			<div class="tab-pane fade" id="map_tabs" role="tabpanel" aria-labelledby="map-tab">
			  	<div class="h600" id="map-canvas"></div>
		  	</div>
		  	<div class="tab-pane fade" id="street_view" role="tabpanel" aria-labelledby="street-view-tab">
		  		<iframe class="h600 w100" src="https://www.google.com/maps/embed?pb=!4v1553797194458!6m8!1m7!1sR4K_5Z2wRHTk9el8KLTh9Q!2m2!1d36.82551718071267!2d-76.34864590837246!3f305.15097!4f0!5f0.7820865974627469" frameborder="0" allowfullscreen></iframe>
		  	</div>
		</div> --}}
	</div>

	<!-- Agent Single Grid View -->
	<section class="our-agent-single bgc-f7 pb30-991">
		<div class="container">
			<div class="row ">
				<div class="col-12">
					<!-- Mobile Carousel -->
					<div class="agent-carousel owl-carousel d-block d-sm-none mb-3">
						@foreach ($firstFiveImages as $image)
							<div class="item">
								<a class="popup-img" href="{{ asset('storage/' . $image->image_url) }}">
									<img
										class="img-fluid w100"
										src="{{ asset('storage/' . $image->image_url) }}"
										alt="Property Image"
										style="width:100%;height:300px;object-fit:cover;"
									/>
								</a>
							</div>
						@endforeach
					</div>
					<!-- Desktop/Tablet Grid -->
					<div class="row d-none d-sm-flex">
						<div class="col-sm-6 col-lg-6 p0 imgs">
							@if ($images->first())
								<div class="row m0">
									<div class="col-lg-12 p0">
										<div class="spls_style_one pr1 1px">
											<a class="popup-img" href="{{ asset('storage/' . $firstFiveImages->first()->image_url) }}">
												<img
													class="img-fluid w100"
													src="{{ asset('storage/' . $firstFiveImages->first()->image_url) }}"
													alt="Main Property Image"
													style="width: 959px; height: 600px; object-fit: cover;"
												/>
											</a>
										</div>
									</div>
								</div>
							@endif
						</div>
						<div class="col-sm-6 col-lg-6 p0 imgs">
							<div class="row m0">
								@foreach ($images->slice(1, 4) as $image)
									<div class="col-sm-6 col-lg-6 p0">
										<div class="spls_style_one">
											<a class="popup-img" href="{{ asset('storage/' . $image->image_url) }}">
												<img
													class="img-fluid w100"
													src="{{ asset('storage/' . $image->image_url) }}"
													alt="Property Image"
													style="width: 480px; height: 300px; object-fit: cover;"
												/>
											</a>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ...rest of your section... -->
			<div class="row">
				<div class="col-lg-7 col-xl-8">
					<div class="single_property_title mt30-767 mb30-767">
						<h2>{{ $property->property_name }}</h2>
						<p>{{ $property->address }}</p>
					</div>
				</div>
				<div class="col-lg-5 col-xl-4">
					<div class="single_property_social_share">
						<div class="price float-left fn-400">
							<h2>{{ number_format($property->price, 0, '.', ',') }} AED </h2>
						</div>
						<div class="spss mt20 text-right tal-400">
							<ul class="mb0">
								<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								{{-- <li class="list-inline-item"><a href="#"><span class="flaticon-share"></span></a></li> --}}
								<li class="list-inline-item"><a href="#"><span class="flaticon-printer"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="d-block d-lg-none mt-3">
					<div class="sidebar_listing_list">
						<div class="sidebar_advanced_search_widget">
							<div class="sl_creator">
								<div class="media">
									<img class="mr-3" src="{{ asset('HOM_LOGO.png') }}" alt="HOM LOGO " />
								</div>
							</div>
							<ul class="contact-icons prop_details mb0">
								<li class="list-inline-item">
								<a href="#" class="icon-rect"><img src="{{ asset('icon_mail.png') }}" alt="mail Icon" class="icon"></a>
								</li>
								<li class="list-inline-item">
								<a href="#" class="icon-rect"><img src="{{ asset('icon_call.png') }}" alt="call Icon" class="icon"></a>
								</li>
								<li class="list-inline-item">
								<a href="#" class="icon-rect"><img src="{{ asset('whatsapp.png') }}" alt="whatsup Icon" class="icon"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-8 mt50">
					<div class="row">
						<div class="col-lg-12">
							<div class="listing_single_description">
								<div class="lsd_list">
									<ul class="mb0">
										<li class="list-inline-item"><a href="#"><span class="icon-home me-1" aria-hidden="true"></span> {{ $property->property_type }}</a></li>
										<li class="list-inline-item"><a href="#"><span class="icon-bed me-1" aria-hidden="true"></span> Beds: {{ $property->bedrooms }}</a></li>
										<li class="list-inline-item"><a href="#"> <span class="icon-bath me-1" aria-hidden="true"></span> Baths: {{ $property->bathrooms }}</a></li>
										<li class="list-inline-item"><a href="#"> <span class="icon-surface me-1" aria-hidden="true"></span> Sq Ft: {{ $property->property_size }}</a></li>
									</ul>
								</div>
								<h4 class="mb30">Description</h4>
							@php
								$shortDescription = Str::limit($property->description, 300, '...');
								$isLong = strlen($property->description) > 300;
							@endphp
							
							<p class="mb25">{{ $shortDescription }}</p>
							
							@if ($isLong)
								<div class="collapse" id="fullDescription">
									<div class="card card-body">
										<p class="mt10 mb10">{{ $property->description }}</p>
									</div>
								</div>
							
								<p class="overlay_close">
									<a class="text-thm fz14" data-toggle="collapse" href="#fullDescription" role="button" aria-expanded="false" aria-controls="fullDescription">
										Show More <span class="flaticon-download-1 fz12"></span>
									</a>
								</p>
							@endif
								{{-- <p class="overlay_close">
									<a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								   	 Show More <span class="flaticon-download-1 fz12"></span>
								  	</a>
								</p> --}}
							</div>
						</div>
						<div class="col-lg-12">
							<div class="additional_details">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb15">Property Details</h4>
									</div>
									<div class="col-md-6 col-lg-6 ">
										<ul class="list-inline-item">
											<li><p>Property ID :</p></li>
											<li><p>Price :</p></li>
											<li><p>Property Size :</p></li>
											<li><p>
												@if($property->handover_date)
													Handover Date :
												@else
													Year Built :
												@endif
											</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{ $property->property_id }}</span></p></li>
											<li><p><span>{{ $property->price }}</span></p></li>
											<li><p><span>{{ $property->property_size }} Sq Ft</span></p></li>
											<li><p>
												<span>
													@if($property->handover_date)
														{{ $property->handover_date }}
													@else
														{{ $property->year_built }}
													@endif
												</span>
											</p></li>
										
										</ul>
									</div>
									<div class="col-md-6 col-lg-6 ">
										<ul class="list-inline-item">
											<li><p>Bedrooms :</p></li>
											<li><p>Bathrooms :</p></li>
											<li><p>Garage :</p></li>
											<li><p>Garage Size :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$property->bedrooms}} </span></p></li>
											<li><p><span>{{$property->bathrooms}} </span></p></li>
											<li><p><span>{{$property->garage}} </span></p></li>
											<li><p><span>200 SqFt</span></p></li>
										</ul>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<li><p>Property Type :</p></li>
											<li><p>Property Status :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$property->property_type}} </span></p></li>
											<li><p><span>{{$property->property_status}} </span></p></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="additional_details">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb15">Validated Information</h4>
									</div>
									<div class="col-md-6 col-lg-6">
										<ul class="list-inline-item">
											<li><p>Developer :</p></li>
											<li><p>Ownership :</p></li>
											<li><p>Built up Area :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$property->developer}}</span></p></li>
											<li><p><span>{{$property->user->name}}</span></p></li>
											<li><p><span>{{$property->property_built_up_area}}</span></p></li>
										</ul>
									</div>
									<div class="col-md-6 col-lg-6">
										<ul class="list-inline-item">
											<li><p>Usage :</p></li>
											<li><p>Parking Availabilty :</p></li>
											<li><p>Equipment :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$property->property_usage}}</span></p></li>
											<li><p><span>{{$property->property_parking_availability}}</span></p></li>
											<li><p><span>Grill - Gas</span></p></li>
										</ul>
									</div>

								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="additional_details">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb15">Building Information</h4>
									</div>
									<div class="col-md-6 col-lg-6">
										<ul class="list-inline-item">
											<li><p>Building Name :</p></li>
											<li><p>total floors</p></li>
											<li><p>retail centers</p></li>
											<li><p>Swimming Pools</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$property->building_name}}</span></p></li>
											<li><p><span>{{$property->total_floors}}</span></p></li>
											<li><p><span>{{$property->retail_centers??0}} </span></p></li>
											<li><p><span>{{$property->swimming_pool??0}}</span></p></li>
										</ul>
									</div>
									<div class="col-md-6 col-lg-6">
										<ul class="list-inline-item">
											<li><p>Usage :</p></li>
											<li><p>Parking Availabilty :</p></li>
											<li><p>Equipment :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$property->property_usage}}</span></p></li>
											<li><p><span>{{$property->property_parking_availability}}</span></p></li>
											<li><p><span>Grill - Gas</span></p></li>
										</ul>
									</div>

								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="property_attachment_area">
								<h4 class="mb30">Property Attachments</h4>
								@if($property->pdf)
									<div class="iba_container style2">
										<a href="{{ asset('storage/' . $property->pdf) }}" target="_blank" class="icon_box_area style2 d-flex align-items-center text-decoration-none">
											<div class="score"><span class="flaticon-pdf text-thm fz30"></span></div>
											<div class="details">
												<h5><span class="flaticon-download text-thm pr10"></span> View Property PDF</h5>
											</div>
										</a>
									</div>
								@else
									<p>No attachments available.</p>
								@endif
							</div>
						</div>
						<!-- <div class="col-lg-12">
							<div class="application_statics mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb10">Features</h4>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4">
										<ul class="order_list list-inline-item">
											<li><a href="#"><span class="flaticon-tick"></span>Air Conditioning</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Barbeque</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Dryer</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Gym</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Laundry</a></li>
										</ul>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4">
										<ul class="order_list list-inline-item">
											<li><a href="#"><span class="flaticon-tick"></span>Lawn</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Microwave</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Outdoor Shower</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Refrigerator</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Sauna</a></li>
										</ul>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4">
										<ul class="order_list list-inline-item">
											<li><a href="#"><span class="flaticon-tick"></span>Swimming Pool</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>TV Cable</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Washer</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>WiFi</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Window Coverings</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-12">
							<div class="application_statics mt30">
								<h4 class="mb30">Location <small class="float-right">1421 San Pedro St, Los Angeles, CA 90015</small></h4>
								<div class="property_video p0">
									<div class="thumb">
										<div class="h400" id="map-canvas2"></div>
										<div class="overlay_icon">
											<a href="#"><img class="map_img_icon" src="{{asset('images/header-logo.png')}}" alt="header-logo.png"></a>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-12">
							<div class="application_statics mt30">
								<h4 class="mb30">Floor plans</h4>
								<div class="faq_according style2">
									<div class="accordion" id="accordionExample">
									  	<div class="card floor_plan">
										    <div class="card-header" id="headingOne">
										    	<h2 class="mb-0">
										        	<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										        		<ul class="mb0">
										        			<li class="list-inline-item">First Floor</li>
										        			<li class="list-inline-item"><p>Size:</p> <span>1267 Sqft</span></li>
										        			<li class="list-inline-item"><p>Rooms:</p> <span>670 Sqft</span></li>
										        			<li class="list-inline-item"><p>Baths:</p> <span>530 Sqft</span></li>
										        			<li class="list-inline-item"><p>Price:</p> <span>$1489</span></li>
										        		</ul>
										        	</button>
										   		</h2>
										    </div>
										    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
											    <div class="card-body text-center">
											    	<img class="img-fluid" src="images/resource/floor_plan.png" alt="floor_plan.png">
									        		<p>Plan description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
											    </div>
										    </div>
									    </div>
									    <div class="card floor_plan">
									    	<div class="card-header active" id="headingTwo">
									    		<h2 class="mb-0">
									        		<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										        		<ul class="mb0">
										        			<li class="list-inline-item">First Floor</li>
										        			<li class="list-inline-item"><p>Size:</p> <span>1267 Sqft</span></li>
										        			<li class="list-inline-item"><p>Rooms:</p> <span>670 Sqft</span></li>
										        			<li class="list-inline-item"><p>Baths:</p> <span>530 Sqft</span></li>
										        			<li class="list-inline-item"><p>Price:</p> <span>$1489</span></li>
										        		</ul>
										        	</button>
									    		</h2>
									    	</div>
									    	<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
									      		<div class="card-body text-center">
											    	<img class="img-fluid" src="images/resource/floor_plan.png" alt="floor_plan.png">
									        		<p>Plan description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
									     		 </div>
									    	</div>
									    </div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-12">
							<div class="shop_single_tab_content style2 mt30">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
									    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Property video</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent2">
									<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
										<div class="property_video">
											<div class="thumb">
												<img class="pro_img img-fluid w100" src="images/background/7.jpg" alt="7.jpg">
												<div class="overlay_icon">
													<a class="video_popup_btn popup-img red popup-youtube" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="flaticon-play"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="walkscore_area mt30">
								<h4 class="mb30">Walkscore <span class="float-right"><img src="images/resource/wscore.png" alt="wscore.png"></span></h4>
								<div class="iba_container">
									<div class="icon_box_area">
										<div class="score"><span>70</span></div>
										<div class="details">
											<h5>Walk Score</h5>
											<p>Somewhat Walkable</p>
										</div>
									</div>
									<div class="icon_box_area">
										<div class="score"><span>40</span></div>
										<div class="details">
											<h5>Bike Score</h5>
											<p>Bikeable</p>
										</div>
									</div>
								</div>
								<a class="more_info" href="#">More Details Here</a>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="whats_nearby mt30">
								<h4 class="mb10">What's Nearby</h4>
								<div class="education_distance mb15">
									<h5><span class="flaticon-college-graduation"></span> Education</h5>
									<div class="single_line">
										<p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
										<ul class="review">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
										</ul>
									</div>
									<div class="single_line">
										<p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
										<ul class="review">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
										</ul>
									</div>
									<div class="single_line">
										<p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
										<ul class="review">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
										</ul>
									</div>
								</div>
								<div class="education_distance mb15 style2">
									<h5><span class="flaticon-heartbeat"></span> Health & Medical</h5>
									<div class="single_line">
										<p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
										<ul class="review">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
										</ul>
									</div>
									<div class="single_line">
										<p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
										<ul class="review">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
										</ul>
									</div>
									<div class="single_line">
										<p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
										<ul class="review">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
										</ul>
									</div>
								</div>
								<div class="education_distance style3">
									<h5><span class="flaticon-front-of-bus"></span> Transportation</h5>
									<div class="single_line">
										<p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
										<ul class="review">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
										</ul>
									</div>
									<div class="single_line">
										<p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
										<ul class="review">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
										</ul>
									</div>
									<div class="single_line">
										<p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
										<ul class="review">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-12">
							<div class="application_statics">
								<div class="row">
									<div class="col-lg-12">
										<div class="chart_circle_doughnut mt30">
											<h4>Payment Calculator</h4>
											<canvas class="mt50 mb50" id="myChart"></canvas>
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input ui_kit_select_search form-group">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Terms">Terms</option>
												<option data-tokens="Terms2">Terms2</option>
												<option data-tokens="Terms3">Terms3</option>
												<option data-tokens="Terms4">Terms4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<input type="text" class="form-control" id="formGroupExampleWebsite" placeholder="Interest">
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<input type="text" class="form-control" id="formGroupExampleFaceBook" placeholder="Home Price">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<input type="text" class="form-control" id="formGroupExampleTwitter" placeholder="Down Payment">
										</div>
									</div>
									<div class="col-lg-6 col-xl-2">
										<div class="my_profile_setting_input form-group">
									    	<input type="text" class="form-control" id="formGroupExampleLinkedin" placeholder="10%">
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-12">
							<div class="application_statics shop_single_tab_content style3 mt30">
								<ul class="nav nav-tabs float-right fn-414" id="myTab" role="tablist">
									<li class="nav-item">
									    <a class="nav-link active" id="hourly-tab" data-toggle="tab" href="#hourly" role="tab" aria-controls="hourly" aria-selected="true">Hours</a>
									</li>
									<li class="nav-item">
									    <a class="nav-link" id="weekly-tab" data-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="false">Weekly</a>
									</li>
									<li class="nav-item">
									    <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent2">
									<div class="tab-pane fade show active" id="hourly" role="tabpanel" aria-labelledby="hourly-tab">
										<h4 class="mt10-414">Property Views</h4>
										<canvas id="myChartweave" width="100%" height="50"></canvas>
									</div>
									<div class="tab-pane fade" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
										<h4 class="mt10-414">Property Views</h4>
										<div class="c_container w100"></div>
									</div>
									<div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
										<h4 class="mt10-414">Property Views</h4>
										<canvas class="ls_barchart" id="chart"></canvas>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-12">
							<div class="product_single_content">
								<div class="mbp_pagination_comments mt30">
									<ul class="total_reivew_view">
										<li class="list-inline-item sub_titles">896 Reviews</li>
										<li class="list-inline-item">
											<ul class="star_list">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</li>
										<li class="list-inline-item avrg_review">( 4.5 out of 5 )</li>
										<li class="list-inline-item write_review">Write a Review</li>
									</ul>
									<div class="mbp_first media">
										<img src="images/testimonial/1.png" class="mr-3" alt="1.png">
										<div class="media-body">
									    	<h4 class="sub_title mt-0">Diana Cooper
												<div class="sspd_review dif">
													<ul class="ml10">
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"></li>
													</ul>
												</div>
									    	</h4>
									    	<a class="sspd_postdate fz14" href="#">December 28, 2020</a>
									    	<p class="mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
										</div>
									</div>
									<div class="custom_hr"></div>
									<div class="mbp_first media">
										<img src="images/testimonial/2.png" class="mr-3" alt="2.png">
										<div class="media-body">
									    	<h4 class="sub_title mt-0">Ali Tufan
												<div class="sspd_review dif">
													<ul class="ml10">
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"></li>
													</ul>
												</div>
									    	</h4>
									    	<a class="sspd_postdate fz14" href="#">December 28, 2020</a>
									    	<p class="mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-12">
							<div class="product_single_content">
								<div class="mbp_pagination_comments mt30">
									<div class="mbp_comment_form style2">
										<h4>Write a Review</h4>
										<ul class="sspd_review">
											<li class="list-inline-item">
												<ul class="mb0">
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</li>
											<li class="list-inline-item review_rating_para">Your Rating & Review</li>
										</ul>
										<form class="comments_form">
											<div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp" placeholder="Review Title">
											</div>
											<div class="form-group">
											    <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" placeholder="Your Review"></textarea>
											</div>
											<button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
										</form>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-12">
							<h4 class="mt30 mb30">Similar Properties</h4>
						</div>
						<div class="col-lg-6">
							<div class="feat_property">
							<div class="thumb">
								<span class="property-img-span">
									<img class="img-whp" src="{{ asset('images/property/fp1.jpg') }}" alt="fp1.jpg">
								</span>
								<div class="thmb_cntnt">
									<ul class="tag mb0">
										<li class="list-inline-item"><a href="#">For Rent</a></li>
										<li class="list-inline-item"><a href="#">Featured</a></li>
									</ul>
									<ul class="icon mb0">
										<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
									</ul>
									<a class="fp_price" href="#">$13,000<small>/mo</small></a>
								</div>
							</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Sale</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div> -->

					</div>
				</div>
				<div class="col-lg-4 col-xl-4 mt50 order-1 order-lg-2">
					<div class="sidebar_listing_list d-none d-lg-block">
						<div class="sidebar_advanced_search_widget">
							<div class="sl_creator">
								<div class="media">
									<img class="mr-3" src="{{ asset('HOM_LOGO.png') }}" alt="HOM LOGO " />
								</div>
							</div>
							<ul class="contact-icons prop_details mb0">
								<li class="list-inline-item">
								  <a href="#" class="icon-rect"><img src="{{ asset('icon_mail.png') }}" alt="mail Icon" class="icon"></a>
								</li>
								<li class="list-inline-item">
								  <a href="#" class="icon-rect"><img src="{{ asset('icon_call.png') }}" alt="call Icon" class="icon"></a>
								</li>
								<li class="list-inline-item">
								  <a href="#" class="icon-rect"><img src="{{ asset('whatsapp.png') }}" alt="whatsup Icon" class="icon"></a>
								</li>
							  </ul>
						</div>
					</div>
					<div class="sidebar_listing_list">
						<div class="sidebar_advanced_search_widget">
							<ul class="sasw_list mb0">
								<li class="search_area">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
								    	<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
								    </div>
								</li>
								<li class="search_area">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
								    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
								    </div>
								</li>
								<li>
									<div class="search_option_two">
										<div class="candidate_revew_select">
											<select class="selectpicker w100 show-tick">
												<option>Status</option>
												<option>Apartment</option>
												<option>Bungalow</option>
												<option>Condo</option>
												<option>House</option>
												<option>Land</option>
												<option>Single Family</option>
											</select>
										</div>
									</div>
								</li>
								<li>
									<div class="search_option_two">
										<div class="candidate_revew_select">
											<select class="selectpicker w100 show-tick">
												<option>Property Type</option>
												<option>Apartment</option>
												<option>Bungalow</option>
												<option>Condo</option>
												<option>House</option>
												<option>Land</option>
												<option>Single Family</option>
											</select>
										</div>
									</div>
								</li>
								<li>
									<div class="small_dropdown2">
									    <div id="prncgs2" class="btn dd_btn">
									    	<span>Price</span>
									    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
									    </div>
									  	<div class="dd_content2">
										    <div class="pricing_acontent">
										    	<span id="slider-range-value1"></span>
												<span class="mt0" id="slider-range-value2"></span>
											    <div id="slider"></div>
												<!-- <input type="text" class="amount" placeholder="$52,239"> 
												<input type="text" class="amount2" placeholder="$985,14">
												<div class="slider-range"></div> -->
										    </div>
									  	</div>
									</div>
								</li>
								<li>
									<div class="search_option_two">
										<div class="candidate_revew_select">
											<select class="selectpicker w100 show-tick">
												<option>Bathrooms</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
											</select>
										</div>
									</div>
								</li>
								<li>
									<div class="search_option_two">
										<div class="candidate_revew_select">
											<select class="selectpicker w100 show-tick">
												<option>Bedrooms</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
											</select>
										</div>
									</div>
								</li>
								<li>
									<div class="search_option_two">
										<div class="candidate_revew_select">
											<select class="selectpicker w100 show-tick">
												<option>Garages</option>
												<option>Yes</option>
												<option>No</option>
												<option>Others</option>
											</select>
										</div>
									</div>
								</li>
								<li>
									<div class="search_option_two">
										<div class="candidate_revew_select">
											<select class="selectpicker w100 show-tick">
												<option>Year built</option>
												<option>2013</option>
												<option>2014</option>
												<option>2015</option>
												<option>2016</option>
												<option>2017</option>
												<option>2018</option>
												<option>2019</option>
												<option>2020</option>
											</select>
										</div>
									</div>
								</li>
								<li class="min_area list-inline-item">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
								    </div>
								</li>
								<li class="max_area list-inline-item">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
								    </div>
								</li>
								<li>
								  	<div id="accordion" class="panel-group">
									    <div class="panel">
									      	<div class="panel-heading">
										      	<h4 class="panel-title">
										        	<a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
										        </h4>
									      	</div>
										    <div id="panelBodyRating" class="panel-collapse collapse">
										        <div class="panel-body row">
										      		<div class="col-lg-12">
										                <ul class="ui_kit_checkbox selectable-list float-left fn-400">
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck16">
																	<label class="custom-control-label" for="customCheck16">Air Conditioning</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck17">
																	<label class="custom-control-label" for="customCheck17">Barbeque</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck18">
																	<label class="custom-control-label" for="customCheck18">Gym</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck19">
																	<label class="custom-control-label" for="customCheck19">Microwave</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck20">
																	<label class="custom-control-label" for="customCheck20">TV Cable</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck21">
																	<label class="custom-control-label" for="customCheck21">Lawn</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck22">
																	<label class="custom-control-label" for="customCheck22">Refrigerator</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck23">
																	<label class="custom-control-label" for="customCheck23">Swimming Pool</label>
																</div>
										                	</li>
										                </ul>
										                <ul class="ui_kit_checkbox selectable-list float-right fn-400">
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck24">
																	<label class="custom-control-label" for="customCheck24">WiFi</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck25">
																	<label class="custom-control-label" for="customCheck25">Sauna</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck26">
																	<label class="custom-control-label" for="customCheck26">Dryer</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck27">
																	<label class="custom-control-label" for="customCheck27">Washer</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck28">
																	<label class="custom-control-label" for="customCheck28">Laundry</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck29">
																	<label class="custom-control-label" for="customCheck29">Outdoor Shower</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck30">
																	<label class="custom-control-label" for="customCheck30">Window Coverings</label>
																</div>
										                	</li>
											        </div>
										        </div>
										    </div>
									    </div>
									</div>
								</li>
								<li>
									<div class="search_option_button">
									    <button type="submit" class="btn btn-block btn-thm">Search</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- <div class="terms_condition_widget">
						<h4 class="title">Featured Properties</h4>
						<div class="sidebar_feature_property_slider">
							<div class="item">
								<div class="feat_property home7 agent">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><a href="#">For Rent</a></li>
												<li class="list-inline-item"><a href="#">Featured</a></li>
											</ul>
											<a class="fp_price" href="#">$13,000<small>/mo</small></a>
											<h4 class="posr color-white">Renovated Apartment</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feat_property home7 agent">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><a href="#">For Rent</a></li>
												<li class="list-inline-item"><a href="#">Featured</a></li>
											</ul>
											<a class="fp_price" href="#">$13,000<small>/mo</small></a>
											<h4 class="posr color-white">Renovated Apartment</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feat_property home7 agent">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><a href="#">For Rent</a></li>
												<li class="list-inline-item"><a href="#">Featured</a></li>
											</ul>
											<a class="fp_price" href="#">$13,000<small>/mo</small></a>
											<h4 class="posr color-white">Renovated Apartment</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feat_property home7 agent">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp4.jpg" alt="fp4.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><a href="#">For Rent</a></li>
												<li class="list-inline-item"><a href="#">Featured</a></li>
											</ul>
											<a class="fp_price" href="#">$13,000<small>/mo</small></a>
											<h4 class="posr color-white">Renovated Apartment</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feat_property home7 agent">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp5.jpg" alt="fp5.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><a href="#">For Rent</a></li>
												<li class="list-inline-item"><a href="#">Featured</a></li>
											</ul>
											<a class="fp_price" href="#">$13,000<small>/mo</small></a>
											<h4 class="posr color-white">Renovated Apartment</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="terms_condition_widget">
						<h4 class="title">Categories Property</h4>
						<div class="widget_list">
							<ul class="list_details">
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-right">6 properties</span></a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">12 properties</span></a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">8 properties</span></a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">26 properties</span></a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">89 properties</span></a></li>
							</ul>
						</div>
					</div>
					<div class="sidebar_feature_listing">
						<h4 class="title">Recently Viewed</h4>
						<div class="media">
							<img class="align-self-start mr-3" src="images/blog/fls1.jpg" alt="fls1.jpg">
							<div class="media-body">
						    	<h5 class="mt-0 post_title">Nice Room With View</h5>
						    	<a href="#">$13,000/<small>/mo</small></a>
						    	<ul class="mb0">
						    		<li class="list-inline-item">Beds: 4</li>
						    		<li class="list-inline-item">Baths: 2</li>
						    		<li class="list-inline-item">Sq Ft: 5280</li>
						    	</ul>
							</div>
						</div> -->
						<!-- <div class="media">
							<img class="align-self-start mr-3" src="images/blog/fls2.jpg" alt="fls2.jpg">
							<div class="media-body">
						    	<h5 class="mt-0 post_title">Villa called Archangel</h5>
						    	<a href="#">$13,000<small>/mo</small></a>
						    	<ul class="mb0">
						    		<li class="list-inline-item">Beds: 4</li>
						    		<li class="list-inline-item">Baths: 2</li>
						    		<li class="list-inline-item">Sq Ft: 5280</li>
						    	</ul>
							</div>
						</div> -->
						<!-- <div class="media">
							<img class="align-self-start mr-3" src="images/blog/fls3.jpg" alt="fls3.jpg">
							<div class="media-body">
						    	<h5 class="mt-0 post_title">Sunset Studio</h5>
						    	<a href="#">$13,000<small>/mo</small></a>
						    	<ul class="mb0">
						    		<li class="list-inline-item">Beds: 4</li>
						    		<li class="list-inline-item">Baths: 2</li>
						    		<li class="list-inline-item">Sq Ft: 5280</li>
						    	</ul>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
					<div class="footer_about_widget">
						<h4>About Site</h4>
						<p>We’re reimagining how you buy, sell and rent. It’s now easier to get into a place you love. So let’s do this, together.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_qlink_widget">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">User’s Guide</a></li>
							<li><a href="#">Support Center</a></li>
							<li><a href="#">Press Info</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_contact_widget">
						<h4>Contact Us</h4>
						<ul class="list-unstyled">
							<li><a href="#">info@findhouse.com</a></li>
							<li><a href="#">Collins Street West, Victoria</a></li>
							<li><a href="#">8007, Australia.</a></li>
							<li><a href="#">+1 246-345-0699</a></li>
							<li><a href="#">+1 246-345-0695</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_social_widget">
						<h4>Follow us</h4>
						<ul class="mb30">
							<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
						</ul>
						<h4>Subscribe</h4>
						<form class="footer_mailchimp_form">
						 	<div class="form-row align-items-center">
							    <div class="col-auto">
							    	<input type="email" class="form-control mb-2" id="inlineFormInput" placeholder="Your email">
							    </div>
							    <div class="col-auto">
							    	<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-angle-right"></i></button>
							    </div>
						  	</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_middle_area pt40 pb40">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="footer_menu_widget">
						<ul>
							<li class="list-inline-item"><a href="#">Home</a></li>
							<li class="list-inline-item"><a href="#">Listing</a></li>
							<li class="list-inline-item"><a href="#">Property</a></li>
							<li class="list-inline-item"><a href="#">Pages</a></li>
							<li class="list-inline-item"><a href="#">Blog</a></li>
							<li class="list-inline-item"><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget text-right">
						<p>© 2020 Find House. Made with love.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->

<script type="text/javascript" src="{{asset('js/jquery-3.3.1.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mmenu.all.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ace-responsive-menu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/chart-custome.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/isotop.js')}}"></script>
<script type="text/javascript" src="{{asset('js/snackbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/simplebar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scrollto.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.counterup.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/progressbar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pricing-slider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/timepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&callback=initMap"type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/googlemaps1.js')}}"></script>
<script type="text/javascript" src="{{asset('js/googlemaps2.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script>
$(document).ready(function(){
  if ($(window).width() < 767.98) {
    $('.agent-carousel').owlCarousel({
      items: 1,
      loop: true,
      margin: 10,
      nav: true,
      dots: true
    });
  }
});
$(document).ready(function(){
  $('.sidebar_feature_property_slider').owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    nav: true,
    dots: true
  });
});
</script>

</body>
</html>