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
<title>HOM Agency - Frequently Asked Questions</title>
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
	@include('components.menu')
	<!-- Modal -->
	<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
		      	<div class="modal-body container pb20">
		      		<div class="row">
		      			<div class="col-lg-12">
				    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
							  	<li class="nav-item">
							    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
							  	</li>
							  	<li class="nav-item">
							    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
							  	</li>
							</ul>
		      			</div>
		      		</div>
					<div class="tab-content container" id="myTabContent">
					  	<div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="login_thumb">
					  				<img class="img-fluid w100" src="images/resource/login.jpg" alt="login.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="login_form">
									<form action="#">
										<div class="heading">
											<h4>Login</h4>
										</div>
										<div class="row mt25">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-fb btn-block"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
											</div>
										</div>
										<hr>
										<div class="input-group mb-2 mr-sm-2">
										    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="User Name Or Email">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
										</div>
										<div class="input-group form-group">
									    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck1">
											<label class="custom-control-label" for="exampleCheck1">Remember me</label>
											<a class="btn-fpswd pull-right" href="#">Lost your password?</a>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Log In</button>
										<p class="text-center">Don't have an account? <a class="text-thm" href="#">Register</a></p>
									</form>
								</div>
					  		</div>
					  	</div>
					  	<div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="regstr_thumb">
					  				<img class="img-fluid w100" src="images/resource/regstr.jpg" alt="regstr.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="sign_up_form">
									<div class="heading">
										<h4>Register</h4>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
											</div>
										</div>
										<hr>
										<div class="form-group input-group">
										    <input type="text" class="form-control" id="exampleInputName" placeholder="User Name">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Re-enter password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group ui_kit_select_search mb0">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="SelectRole">Single User</option>
												<option data-tokens="Agent/Agency">Agent</option>
												<option data-tokens="SingleUser">Multi User</option>
											</select>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck2">
											<label class="custom-control-label" for="exampleCheck2">I have read and accept the Terms and Privacy Policy?</label>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
										<p class="text-center">Already have an account? <a class="text-thm" href="#">Log In</a></p>
									</form>
								</div>
					  		</div>
					  	</div>
					</div>
		      	</div>
		    </div>
		</div>
	</div>

	

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Faq</li>
						</ol>
						<h4 class="breadcrumb_title">Faq</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our FAQ -->
	<section class="our-faq bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2 class="mt0">Frequently Asked Questions</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="faq_content">
						<div class="faq_according">
							<div class="accordion" id="accordionExample">
							  	<div class="card">
								    <div class="card-header" id="headingOne">
								    	<h2 class="mb-0">
								        	<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How can I schedule a property viewing with HOM Agency?</button>
								   		</h2>
								    </div>
								    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
									    <div class="card-body">
							        		<p>You can schedule a viewing by contacting us directly via phone, WhatsApp, or by filling out a request form on our website. One of our agents will follow up promptly to arrange a convenient time for you.</p>
									    </div>
								    </div>
							    </div>
							    <div class="card">
							    	<div class="card-header active" id="headingTwo">
							    		<h2 class="mb-0">
							        		<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Do you help with property management after purchase?</button>
							    		</h2>
							    	</div>
							    	<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
							      		<div class="card-body">
							        		<p>Yes, HOM Agency offers property management services, including tenant coordination, maintenance handling, and rent collection, to ensure your investment is taken care of while maximizing returns.</p>
							     		 </div>
							    	</div>
							    </div>
							    <div class="card">
								    <div class="card-header" id="headingThree">
								    	<h2 class="mb-0">
								        	<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How do I know if a property is a good investment?</button>
								    	</h2>
								    </div>
								    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
								    	<div class="card-body">
							        		<p>Our experts will guide you through ROI analysis, market trends, neighborhood development, and expected rental yields. We also compare multiple options to help you choose the right property for your budget and goals.</p>
								    	</div>
								    </div>
								</div>
							    <div class="card">
								    <div class="card-header" id="headingFour">
								    	<h2 class="mb-0">
								        	<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Are off-plan properties a good option in Dubai?</button>
								    	</h2>
								    </div>
								    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample" style="">
								    	<div class="card-body">
							        		<p>Absolutely. Off-plan properties offer flexible payment plans and early entry prices. Our agents will help you assess the developer’s reputation, project status, and potential return on investment before committing.</p>
								    	</div>
								    </div>
								</div>
							    <div class="card">
								    <div class="card-header" id="headingFive">
								    	<h2 class="mb-0">
								        	<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Who is the founder of HOM Agency?</button>
								    	</h2>
								    </div>
								    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
								    	<div class="card-body">
							        		<p> HOM Agency was founded by Hamdi Dhieb, a seasoned real estate professional with over 10years of experience in the Dubai property market. Known for his deep market insight and client-first mindset, Hamdi has helped countless clients find, invest in, and manage properties across Dubai. His vision for HOM Agency is rooted in transparency, trust, and delivering long-term value for both local and international clients.</p>
								    	</div>
								    </div>
								</div>
							    <div class="card">
								    <div class="card-header" id="headingSix">
								    	<h2 class="mb-0">
								        	<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Can foreigners own property in the UAE?</button>
								    	</h2>
								    </div>
								    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
								    	<div class="card-body">
							        		<p>Yes, foreigners are allowed to buy, sell, and rent properties in designated freehold areas across Dubai. HOM Agency can help you explore the best locations that match your goals and eligibility.</p>
								    	</div>
								    </div>
								</div>
							    <div class="card">
								    <div class="card-header" id="headingSeven">
								    	<h2 class="mb-0">
								        	<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Can HOM Agency assist with mortgage or financing options?</button>
								    	</h2>
								    </div>
								    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
								    	<div class="card-body">
							        		<p> Yes. We work closely with leading banks and financial institutions in the UAE to help you secure mortgage pre-approvals and competitive interest rates based on your eligibility.</p>
								    	</div>
								    </div>
								</div>
							    <div class="card">
								    <div class="card-header" id="headingEight">
								    	<h2 class="mb-0">
								        	<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"> Do you offer virtual tours or video walkthroughs for listings?</button>
								    	</h2>
								    </div>
								    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
								    	<div class="card-body">
							        		<p>Yes! Many of our listings come with 360° virtual tours, video walkthroughs, and live video calls, allowing you to explore properties remotely before scheduling an in-person visit..</p>
								    	</div>
								    </div>
								</div>
							    <div class="card">
								    <div class="card-header" id="headingNine">
								    	<h2 class="mb-0">
								        	<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">What makes Dubai a great place to invest in real estate?</button>
								    	</h2>
								    </div>
								    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
								    	<div class="card-body">
							        		<p>Dubai offers a stable economy, high rental yields, zero property tax, and a strategic location that attracts global investors. With world-class infrastructure, safety, and growing demand in both residential and commercial sectors, the city provides excellent long-term returns for property investors.</p>
								    	</div>
								    </div>
								</div>
							    <div class="card">
								    <div class="card-header" id="headingTen">
								    	<h2 class="mb-0">
								        	<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">Are there any restrictions for non-residents buying property in Dubai?</button>
								    	</h2>
								    </div>
								    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
								    	<div class="card-body">
							        		<p>Non-residents can buy property in designated freehold areas in Dubai without needing a UAE residency visa. The process is transparent and supported by the Dubai Land Department. HOM Agency ensures a smooth experience by guiding clients through every legal and financial step.</p>
								    	</div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start Partners -->
	<!-- <section class="start-partners bgc-thm pt50 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="start_partner tac-smd">
						<h2>Become a Real Estate Agent</h2>
						<p>We only work with the best companies around the globe</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn btn-thm2" href="#">Register Now</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- Our Footer -->
	@include('components.footer')
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>