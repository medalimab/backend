<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor" />
    <meta name="description" content="FindHouse - Real Estate HTML Template" />
    <meta name="CreativeLayers" content="ATFN" />
    
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <!-- Title -->
    <title>HOM Agency - About Us</title>
    
    <!-- Favicon -->
    <link href="{{ asset('images/home/icon_hom.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('images/home/icon_hom.png') }}" sizes="128x128" rel="shortcut icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
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

        <!-- Inner Page Breadcrumb -->
        <section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="breadcrumb_content">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                            <h1 class="breadcrumb_title">About HOM</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Text Content -->
        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h2 class="mt0">Our Mission at HOM Agency</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-xl-7">
                        <div class="about_content">
                            <p class="large">
                                Transforming Real Estate Experiences in Dubai Since 2015
                                Helping you find, sell, and rent properties with ease and confidence.
                            </p>
                            <p>
                                At HOM Agency, we believe real estate is more than just
                                transactions—it’s about building trust, creating lifestyles,
                                and helping people move into the future they envision. Since
                                2015, we’ve proudly served individuals and families across
                                Dubai, offering a seamless way to find properties they truly
                                love.
                            </p>
                            <p>
                                With our deep market knowledge, innovative tools, and
                                client-first approach, we make every step—from search to
                                sale—smooth and transparent. Whether you're buying your first
                                apartment, selling a villa, or investing in the future, HOM
                                Agency is your trusted partner at every turn.
                            </p>
                            <ul class="ab_counting">
                                <li class="list-inline-item">
                                    <div class="about_counting">
                                        <div class="icon">
                                            <span class="flaticon-user"></span>
                                        </div>
                                        <div class="details">
                                            <h3>469</h3>
                                            <p>Customers to date</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="about_counting">
                                        <div class="icon">
                                            <span class="flaticon-home"></span>
                                        </div>
                                        <div class="details">
                                            <h3>153M AED</h3>
                                            <p>In home sales</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="about_counting">
                                        <div class="icon">
                                            <span class="flaticon-transfer"></span>
                                        </div>
                                        <div class="details">
                                            <h3>32M AED</h3>
                                            <p>In Savings</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-5">
                        <div class="about_thumb">
                            <img class="img-fluid w100" src="{{ asset('images/about/about-us-section-banner.png') }}" alt="1.jpg" />
                        </div>
                    </div>
                </div>
                <div class="row mt50">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h2>Why Choose HOM Agency</h2>
                            <p>We provide full service at every step.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="why_chose_us style2">
                            <div class="icon">
                                <span class="flaticon-high-five"></span>
                            </div>
                            <div class="details">
                                <h4>Expert Guidance & Market Insights</h4>
                                <p>
                                    Get in-depth knowledge of Dubai’s real estate market and
                                    personalized investment advice.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="why_chose_us style2">
                            <div class="icon">
                                <span class="flaticon-home-1"></span>
                            </div>
                            <div class="details">
                                <h4>Handpicked Dubai Property Deals</h4>
                                <p>
                                    Access a curated portfolio of premium off-plan and ready
                                    properties across prime locations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="why_chose_us style2">
                            <div class="icon">
                                <span class="flaticon-profit"></span>
                            </div>
                            <div class="details">
                                <h4>Hassle-Free Investment & Financing</h4>
                                <p>
                                    Enjoy flexible payment plans and seamless transactions for a
                                    smooth property ownership experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Team -->
      <section class="our-team bgc-f7">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="main-title text-center">
                <h2>Our Team</h2>
                <p>Your trusted real estate experts in Dubai</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="team_slider">
                <div class="item">
                  <div class="team_member">
                    <div class="thumb">
                      <img
                        class="img-fluid"
                        src="images/team/1.png"
                        alt="team-member.png"
                      />
                      <div class="overylay">
                        <ul class="social_icon">
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-google"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="details">
                      <h4>Rahul Mehra</h4>
                      <p>HOM Broker</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team_member">
                    <div class="thumb">
                      <img
                        class="img-fluid"
                        src="images/team/2.png"
                        alt="team-member.png"
                      />
                      <div class="overylay">
                        <ul class="social_icon">
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-google"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="details">
                      <h4>Layla Al. Mansoori</h4>
                      <p>HOM Broker</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team_member">
                    <div class="thumb">
                      <img
                        class="img-fluid"
                        src="images/team/3.png"
                        alt="3.jpg"
                      />
                      <div class="overylay">
                        <ul class="social_icon">
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-google"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="details">
                      <h4>Hamdi Dhieb</h4>
                      <p>HOM Founder & Owner</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team_member">
                    <div class="thumb">
                      <img
                        class="img-fluid"
                        src="images/team/4.png"
                        alt="4.jpg"
                      />
                      <div class="overylay">
                        <ul class="social_icon">
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-google"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="details">
                      <h4>Natalia Romaninko</h4>
                      <p>HOM Broker</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team_member">
                    <div class="thumb">
                      <img
                        class="img-fluid"
                        src="images/team/5.png"
                        alt="team-member.png"
                      />
                      <div class="overylay">
                        <ul class="social_icon">
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-google"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="details">
                      <h4>Omar Farsi</h4>
                      <p>HOM Broker</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team_member">
                    <div class="thumb">
                      <img
                        class="img-fluid"
                        src="images/team/6.png"
                        alt="team-member.png"
                      />
                      <div class="overylay">
                        <ul class="social_icon">
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-google"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="details">
                      <h4>Jad Al Khouri</h4>
                      <p>Accountant</p>
                    </div>
                  </div>
                </div>

                <!-- <div class="item">
                  <div class="team_member">
                    <div class="thumb">
                      <img
                        class="img-fluid"
                        src="images/team/3.jpg"
                        alt="3.jpg"
                      />
                      <div class="overylay">
                        <ul class="social_icon">
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-google"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="details">
                      <h4>Mariusz Ciesla</h4>
                      <p>Broker</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team_member">
                    <div class="thumb">
                      <img
                        class="img-fluid"
                        src="images/team/4.jpg"
                        alt="4.jpg"
                      />
                      <div class="overylay">
                        <ul class="social_icon">
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-google"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="details">
                      <h4>Helene Powers</h4>
                      <p>Broker</p>
                    </div>
                  </div>
                </div>
			-->
              </div>
            </div>
          </div>
        </div>
      </section>

        <!-- Our Testimonials -->
        <section id="our-testimonials" class="our-testimonial">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="main-title text-center">
                <h2 class="color-white">What Our Clients Say</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="testimonial_grid_slider">
                <div class="item">
                  <div class="testimonial_grid">
                    <div class="thumb">
                      <img src="client-avatar-1.webp" alt="1.jpg" />
                    </div>
                    <div class="details">
                      <h4>Sarah Johnson</h4>
                      <p>Property Investor</p>
                      <p class="mt25">
                        "Closed my AED 12M penthouse purchase entirely through
                        the platform's digital contracting system. The future of
                        real estate transactions!"
                      </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial_grid">
                    <div class="thumb">
                      <img src="client-avatar-4.webp" alt="1.jpg" />
                    </div>
                    <div class="details">
                      <h4>David Wilson</h4>
                      <p>First-Time Buyers</p>
                      <p class="mt25">
                        Received keys 48 hours after landing in Dubai!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial_grid">
                    <div class="thumb">
                      <img src="client-avatar-3.webp" alt="1.jpg" />
                    </div>
                    <div class="details">
                      <h4>Augusta Silva</h4>
                      <p>Sales Manager</p>
                      <p class="mt25">
                        I was nervous about downsizing after 30 years in the
                        same house. The agents took time to understand my
                        lifestyle needs and handled every detail with care. They
                        even helped coordinate my move - above and beyond
                        expectations!"
                      </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial_grid">
                    <div class="thumb">
                      <img src="client-avatar-4.webp" alt="1.jpg" />
                    </div>
                    <div class="details">
                      <h4>Rajiv Kapoor</h4>
                      <p>International Investor</p>
                      <p class="mt25">
                        Local market knowledge that's second to none. Their
                        negotiation skills secured terms that made this
                        investment viable. Clear communication at every stage -
                        what every serious investor needs.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial_grid">
                    <div class="thumb">
                      <img src="client-avatar-5.webp" alt="1.jpg" />
                    </div>
                    <div class="details">
                      <h4>James Carter</h4>
                      <p>CEO - FinTech Startup</p>
                      <p class="mt25">
                        "The off-plan project comparison tool helped us identify
                        the best ROI opportunity in the current market cycle"
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

        <!-- Our Partners -->
       <section id="our-partners" class="our-partners">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="main-title text-center">
                <h2>Our Developer Partners</h2>
                <p>We only work with the best developers in the UAE</p>
              </div>
            </div>
          </div>
          <!-- Swiper Container with custom JSON configuration -->
          <div
            class="my-partners-slider swiper"
            data-config='{ "rtl": false, "autoplay": true, "loop": true, "speed": 4000, "slidesPerView": 6, "slidesPerGroup": 1, "spaceBetween": 10, "breakpoints": { "320": {"slidesPerView": 1, "slidesPerGroup": 1, "spaceBetween": 20}, "768": {"slidesPerView": 3, "slidesPerGroup": 1, "spaceBetween": 20}, "1024": {"slidesPerView": 6, "slidesPerGroup": 1, "spaceBetween": 20} } }'
          >
            <div class="swiper-wrapper">
              <!-- Slide 1 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"
                    src="./images/partners/EMAAR-logo.webp"
                    alt="Emaar"
                  />
                </div>
              </div>
              <!-- Slide 2 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"
                    src="./images/partners/damac-logo.webp"
                    alt="Damac"
                  />
                </div>
              </div>
              <!-- Slide 3 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"
                    src="./images/partners/azizi-logo.webp"
                    alt="Azizi"
                  />
                </div>
              </div>
              <!-- Slide 4 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"
                    src="./images/partners/sobha-logo.webp"
                    alt="Shoba"
                  />
                </div>
              </div>
              <!-- Slide 5 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"
                    src="./images/partners/samana-logo.webp"
                    alt="Meras"
                  />
                </div>
              </div>
              <!-- Slide 6 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"
                    src="./images/partners/danube-logo.webp"
                    alt="Meras"
                  />
                </div>
              </div>
              <!-- Slide 7 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"
                    src="./images/partners/meras-logo.webp"
                    alt="Meras"
                  />
                </div>
              </div>
              <!-- Slide 8 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"
                    src="./images/partners/binghati-logo.webp"
                    alt="Meras"
                  />
                </div>
              </div>
              <!-- Slide 9 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"
                    src="./images/partners/aldar-logo.webp"
                    alt="Meras"
                  />
                </div>
              </div>
              <!-- Slide 10 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"
                    src="./images/partners/arada-logo.webp"
                    alt="Meras"
                  />
                </div>
              </div>
            </div>
            <!-- Uncomment if you want navigation buttons -->
            <!-- <div class="swiper-button-prev"></div> <div class="swiper-button-next"></div> -->
            <!-- Uncomment if you want pagination dots -->
            <!-- <div class="swiper-pagination"></div> -->
          </div>
        </div>
      </section>
    
        <!-- Our Footer -->
       
     @include('components.footer')
        <!-- Our Footer Bottom Area -->
       
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
    <script type="text/javascript" src="{{ asset('js/isotop.js') }}"></script>
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
    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <!-- swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Include your custom swiper initialization script -->
    <script src="{{ asset('js/swiper-css.js') }}"></script>
</body>
</html>