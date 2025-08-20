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

<style>
      /* CSS pour navbar fixe - priorité élevée */
      .header-nav {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        z-index: 9999 !important;
        background: white !important;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1) !important;
        width: 100% !important;
        transition: none !important;
      }
      
      /* Empêcher toute classe ou script de modifier la position du navbar */
      .header-nav.navbar-scrolltofixed,
      .header-nav.stricky,
      .header-nav.menu_style_home_one {
        position: fixed !important;
        top: 0 !important;
        transform: none !important;
      }
      
      /* Compensation pour le navbar fixe */
      body {
        padding-top: 80px !important;
      }
      
      /* S'assurer que le contenu principal ne se chevauche pas */
      .our-agent-single {
        padding-top: 20px;
      }
      
      /* Forcer la visibilité immédiate de tous les éléments du menu et logo */
      .header-nav .container-fluid,
      .header-nav nav,
      .navbar_brand,
      .nav_logo_img,
      .logo,
      .logo-blue,
      .logo-light,
      .ace-responsive-menu,
      .ace-responsive-menu li,
      .ace-responsive-menu li a,
      .ace-responsive-menu li a .title {
        visibility: visible !important;
        opacity: 1 !important;
        display: block !important;
      }
      
      /* Spécifiquement pour les liens du menu */
      .ace-responsive-menu li {
        display: inline-block !important;
      }
      
      /* Spécifiquement pour les images du logo */
      .navbar_brand img,
      .nav_logo_img,
      .logo img,
      .logo-blue,
      .logo-light {
        visibility: visible !important;
        opacity: 1 !important;
        display: inline-block !important;
        max-height: 60px;
        width: auto;
      }
</style>

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
    
      <!-- Main Header Nav For Mobile -->
      @include("components.menu")
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
					<!-- Bloc agent version mobile déplacé avant listing_single_description -->
					<div class="sidebar_listing_list d-block d-lg-none mt-3">
						@if($property->agent)
						<div class="sidebar_advanced_search_widget">
							<div class="sl_creator">
								<div class="media flex-column align-items-center justify-content-center">
									<img class="rounded-circle mb-2" src="{{ asset('storage/' . $property->agent->photo) }}" alt="{{ $property->agent->name }}" style="width:70px;height:70px;object-fit:cover;display:block;margin:auto;" />
									<div class="media-body align-self-center mt-2 text-center">
										<span class="text-primary fw-bold" style="font-size:15px;">Contact Agent</span>
										<div class="mt-1 mb-1" style="font-size:16px; color:#222; font-weight:500;">{{ $property->agent->full_name }}</div>
										@if(!empty($property->agent->coordinates))
											<small class="text-muted d-block mt-1"><i class="fa fa-map-marker mr-1"></i> {{ $property->agent->coordinates }}</small>
										@endif
									</div>
								</div>
							</div>
							<ul class="contact-icons prop_details mb0 d-flex justify-content-center">
								@if($property->agent->email)
								<li class="list-inline-item">
									<a href="mailto:{{ $property->agent->email }}" class="icon-rect"><img src="{{ asset('icon_mail.png') }}" alt="mail Icon" class="icon"></a>
								</li>
								@endif
								@if($property->agent->phone)
								<li class="list-inline-item">
									<a href="tel:{{ $property->agent->phone }}" class="icon-rect"><img src="{{ asset('icon_call.png') }}" alt="call Icon" class="icon"></a>
								</li>
								@endif
								@if($property->agent->whatsapp)
								<li class="list-inline-item">
									<a href="https://wa.me/{{ $property->agent->whatsapp }}" target="_blank" class="icon-rect"><img src="{{ asset('whatsapp.png') }}" alt="whatsup Icon" class="icon"></a>
								</li>
								@endif
							</ul>
						</div>
						@endif
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
											{{--<li><p>Property Category :</p></li>--}}
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
											{{-- <li><p><span>{{ $property->property_main_type }}</span></p></li> --}}
											
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
											<li><p>Total Parking Spaces :</p></li>
											
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$property->bedrooms}} </span></p></li>
											<li><p><span>{{$property->bathrooms}} </span></p></li>
											<li><p><span>{{ $property->building_parking_spaces }} </span></p></li>
											
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
											<li><p><span>{{$property->property_parking_space}} </span></p></li>
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
											
											<li><p>Built up Area :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$property->developer}}</span></p></li>
											
											<li><p><span>{{$property->property_built_up_area}}</span></p></li>
										</ul>
									</div>
									<div class="col-md-6 col-lg-6">
										<ul class="list-inline-item">
											
											<li><p>Parking Availabilty :</p></li>
											
										</ul>
										<ul class="list-inline-item">
											
											<li><p><span>{{$property->property_parking_availability}}</span></p></li>
											
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
																					<li><p>Total Building Area (sqft) :</p></li>
																					<li><p>Elevators :</p></li>
																					
											
											
										</ul>
										<ul class="list-inline-item">
																					<li><p><span>{{$property->building_name}}</span></p></li>
																					<li><p><span>{{$property->building_area ?? 0}}</span></p></li>
																					<li><p><span>{{$property->number_elevators ?? 0}}</span></p></li>
																					
											
											
										</ul>
									</div>
									<div class="col-md-6 col-lg-6">
										<ul class="list-inline-item">
											<li><p>Total Floors : </p></li>
										</ul>
										<ul class="list-inline-item">
										<li><p><span>{{$property->total_floors ?? 0}}</span></p></li>
										</ul>
									</div>

								</div>
							</div>
						</div>

						<!-- Insert this section after Building Information and before Property Attachments -->
<div class="col-lg-12">
  <div class="additional_details">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="mb15">Amenities</h4>
      </div>
      <div class="col-md-6 col-lg-6">
				<ul class="list-unstyled">
											@php
												$amenities = [];
												if (!empty($property->amenities)) {
													$amenities = explode(',', $property->amenities);
												}
											@endphp
											@forelse($amenities as $amenity)
												<li><span><i class="fa fa-check text-success mr-2" aria-hidden="true"></i>{{ trim($amenity) }}</span></li>
											@empty
												<li>Aucune amenity renseignée</li>
											@endforelse
				</ul>
      </div>
     
    </div>
  </div>
</div>


						<div class="col-lg-12">
							<div class="property_attachment_area text-center">
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

							<div class="col-lg-12">
								<div class="qr_code_area d-flex flex-column align-items-center justify-content-center text-center py-4">
									<h4 class="mb30">Code QR</h4>
									@if($property->dld_permit_qr)
										<div class="iba_container style2 d-flex flex-column align-items-center">
											<img src="{{ asset('storage/' . $property->dld_permit_qr) }}" alt="QR Code DLD" style="max-width:180px;max-height:180px; margin-bottom: 10px;">
											<div class="details mt-2">
												<h5>Scannez ce code QR pour vérifier le permis DLD</h5>
											</div>
										</div>
									@else
										<p>Aucun code QR disponible.</p>
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
											<li class="list-inline-item"><a href="#">For Buy</a></li>
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
						@if($property->agent)
						<div class="sidebar_advanced_search_widget">
							<div class="sl_creator">
								<div class="media">
									<img class="mr-3 rounded-circle" src="{{ asset('storage/' . $property->agent->photo) }}" alt="{{ $property->agent->name }}" style="width:70px;height:70px;object-fit:cover;" />
									<div class="media-body align-self-center">
										<span class="text-primary fw-bold" style="font-size:15px;">Contact Agent</span>
										<div class="mt-1 mb-1" style="font-size:16px; color:#222; font-weight:500;">{{ $property->agent->full_name }}</div>
										@if(!empty($property->agent->coordinates))
											<small class="text-muted d-block mt-1"><i class="fa fa-map-marker mr-1"></i> {{ $property->agent->coordinates }}</small>
										@endif
									</div>
								</div>
							</div>
							<ul class="contact-icons prop_details mb0">
								@if($property->agent->email)
								<li class="list-inline-item">
									<a href="mailto:{{ $property->agent->email }}" class="icon-rect"><img src="{{ asset('icon_mail.png') }}" alt="mail Icon" class="icon"></a>
								</li>
								@endif
								@if($property->agent->phone)
								<li class="list-inline-item">
									<a href="tel:{{ $property->agent->phone }}" class="icon-rect"><img src="{{ asset('icon_call.png') }}" alt="call Icon" class="icon"></a>
								</li>
								@endif
								<li class="list-inline-item">
									<a href="https://wa.me/{{ $property->agent->phone }}" class="icon-rect"><img src="{{ asset('whatsapp.png') }}" alt="whatsup Icon" class="icon"></a>
								</li>
							</ul>
						</div>
						@endif
					</div>
					<!-- Bloc agent version mobile supprimé après le code QR -->
					
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
	 @include('components.footer')
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
{{-- Désactiver scrolltofixed pour éviter les conflits avec notre menu fixe --}}
{{-- <script type="text/javascript" src="{{asset('js/jquery-scrolltofixed-min.js')}}"></script> --}}
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
  // Script pour forcer la visibilité du menu dès le chargement
  $(document).ready(function() {
    let navbar = $('.header-nav');
    
    // FORCER IMMÉDIATEMENT la visibilité de tous les éléments du menu et logo
    $('.header-nav .container-fluid, .header-nav nav').css({
      'visibility': 'visible',
      'opacity': '1',
      'display': 'block'
    });
    
    $('.navbar_brand, .nav_logo_img, .logo, .logo-blue, .logo-light').css({
      'visibility': 'visible',
      'opacity': '1',
      'display': 'block'
    });
    
    $('.navbar_brand img, .nav_logo_img, .logo img').css({
      'visibility': 'visible',
      'opacity': '1',
      'display': 'inline-block'
    });
    
    $('.ace-responsive-menu').css({
      'visibility': 'visible',
      'opacity': '1',
      'display': 'block'
    });
    
    $('.ace-responsive-menu li').css({
      'visibility': 'visible',
      'opacity': '1',
      'display': 'inline-block'
    });
    
    $('.ace-responsive-menu li a, .ace-responsive-menu li a .title').css({
      'visibility': 'visible',
      'opacity': '1',
      'color': '#333'
    });
    
    // Forcer le menu à rester fixe en haut
    navbar.css({
      'position': 'fixed',
      'top': '0',
      'left': '0',
      'right': '0',
      'z-index': '9999',
      'background': 'white',
      'box-shadow': '0 2px 10px rgba(0,0,0,0.1)',
      'width': '100%'
    });
    
    // Ajouter du padding au body pour compenser le navbar fixe
    $('body').css('padding-top', navbar.outerHeight() + 'px');
    
    // S'assurer que tous les éléments du header sont visibles après un petit délai
    setTimeout(function() {
      $('.header-nav *').css('visibility', 'visible');
      $('.navbar_brand, .nav_logo_img').css({
        'visibility': 'visible',
        'opacity': '1',
        'display': 'block'
      });
    }, 100);
  });
</script>
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