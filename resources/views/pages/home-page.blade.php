<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="advanced custom search, agency, agent, business, clean, corporate, directory, google maps, homes, idx agent, listing properties, membership packages, property, real broker, real estate, real estate agent, real estate agency, realtor"
    />
    <meta name="description" content="FindHouse - Real Estate HTML Template" />
    <meta name="CreativeLayers" content="ATFN" />
    <!-- css file -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!--End CSS file-->

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PZBVZF8H');</script>
    <!-- End Google Tag Manager -->

    <!-- swiper CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <!--End swiper CSS-->

    <!-- Title -->
    <title>HOM Agency - Dubai's Most Exclusive Properties</title>
    <!-- Favicon -->
    <link href="{{ asset('images/home/icon_hom.png') }}" rel="icon" type="image/x-icon" />
  </head>
  <body>
  
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZBVZF8H"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

    <div class="wrapper">
      <div class="preloader"></div>

      <!-- Main Header Nav -->
      <header
        class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu video-bg"
      >
        <div class="container-fluid p0" >
          <!-- Ace Responsive Menu -->
          <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
              <img
                class="nav_logo_img img-fluid"
                src="images/home/hom-nb.png"
                alt="header-logo.png"
              />
              <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <a href="#" class="navbar_brand float-left dn-smd logo">
              <!-- Dual Logos: Blue and Light versions -->
              <img
                src="images/home/web-logo.png"
                alt="Logo HOM Blueee"
                class="logo-blue"
                style="width: 120px; height: auto; max-width: 100%"
              />
              <img
                src="images/home/hom-light-logo.png"
                alt="Logo HOM Light"
                class="logo-light"
                style="width: 120px; height: auto; max-width: 100%"
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
                <a href="#"><span class="title">Home</span></a>
              </li>
                <li>
                    <a href="{{ route('properties.show_listing_page_client') }}">
                        <span class="title">Listing</span>
                    </a>
                </li>
              <!-- <li>
                <a href="page-service.html"
                  ><span class="title">Service</span></a>
              </li> -->
              <li>
                <a href="page-about.html"><span class="title">About</span></a>
              </li>
              <li>
                <a href="#"><span class="title">Explore</span></a>
                <ul>
                  <li><a href="page-faq.html">Faq</a></li>
                  <!-- <li><a href="page-blog-v1.html">Blog</a></li> -->
                  <!-- <li><a href="page-blog-single.html">Single Post</a></li> -->
                </ul>
              </li>
              <li class="last">
                <a href="page-contact.html"
                  ><span class="title">Contact</span></a>
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
              <a class="mobile-menu-trigger" href="#menu"
                ><img src="images/dark-nav-icon.svg" alt=""
              /></a>
              <a class="nav_logo_img" href="{{ route('properties.homepage') }}"
                ><img
                  class="img-fluid mt20"
                  src="images/header-logo2.png"
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
              <span>Home</span>
              <ul>
                <li><a href="{{ route('properties.homepage') }}">Home 1</a></li>
              </ul>
            </li>
            <li>
            <a href="{{ route('properties.show_listing_page_client') }}"><span>Listing Grid</span></a>
              <!-- <ul>
              </ul> -->
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
          </ul>
        </nav>
      </div>

      <!-- Home Design -->
      <section class="home-one home1-overlay home1_bgi1">
        <video autoplay muted loop playsinline>
          <source
            src="images/background/homagency_video_banner.mp4"
            type="video/mp4"
          />
          Your browser does not support HTML5 video.
        </video>
        <div class="container">
          <div class="row posr">
            <div class="col-lg-12">
              <div class="home_content">
                <div class="home-text text-center">
                  <h2 class="fz55">Dubai’s Most Iconic Properties</h2>
                  <p class="fz18 color-white">
                    Own a Piece of Dubai’s Future – Explore Off-Plan & Ready
                    Homes
                  </p>
                </div>
                <div class="home_adv_srch_opt mt-4">
                  <div class="tab-content home1_adsrchfrm" id="pills-tabContent" style="margin-top: 150px;">
                    <div class="tab-pane fade show active" id="pills-buy" role="tabpanel" aria-labelledby="pills-buy-tab">
                      <div class="property-search-bar">
                        <form class="search-form d-flex flex-wrap align-items-center gap-2">
                          
                          <!-- Property Type -->
                          <select class="toggle-prop-type" name="listing_status">
                            <option value="All" {{ request('listing_status') == 'All' ? 'selected' : '' }}>All</option>
                            <option value="Buy" {{ request('listing_status') == 'Buy' ? 'selected' : '' }}>Buy</option>
                            <option value="Rent" {{ request('listing_status') == 'Rent' ? 'selected' : '' }}>Rent</option>
                          </select>
                
                          <!-- Location -->
                          <input type="text" class="form-control w-auto" placeholder="Enter location" />
                
                          <!-- Completion Status Toggle -->
                          <div class="filter-toggle-group">
                            <input type="hidden" name="property_completion" id="propertyCompletionInput" value="All">
                            <button class="toggle active" data-value="All">All</button>
                            <button class="toggle" data-value="Ready">Ready</button>
                            <button class="toggle" data-value="Off-plan">Off Plan</button>
                          </div>
                
                          <!-- Home Type -->
                          <select class="toggle-prop-type" name="home_type">
                            <option hidden value="" disabled selected>Home Type</option>
                            <option value="Residences">Residential</option>
                            <option value="Villas">Villas</option>
                            <option value="Bungalow">Bungalow</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Penthouse">Penthouse</option>
                          </select>
    
                
                          <div class="dropdown-wrapper">
                            <button class="toggle-prop-type" id="bedsBathsBtn" type="button">Beds & Baths</button>
                            <!-- Beds & Baths Dropdown -->
                            <div class="beds-baths-dropdown" id="bedsBathsDropdown">
                              <div class="filter-group">
                                <label><strong>Beds</strong></label>
                                <div class="pill-group" id="bedOptions">
                                  <input type="hidden" name="beds" id="bedsInput">
                                  <button class="pill">Studio</button>
                                  <button class="pill">1</button>
                                  <button class="pill">2</button>
                                  <button class="pill">3</button>
                                  <button class="pill">4</button>
                                  <button class="pill">5</button>
                                  <button class="pill">6</button>
                                  <button class="pill">7</button>
                                  <button class="pill">8+</button>
                                </div>
                              </div>
    
                              <div class="filter-group">
                                <label><strong>Baths</strong></label>
                                <div class="pill-group" id="bathOptions">
                                  <input type="hidden" name="baths" id="bathsInput">
                                  <button class="pill">1</button>
                                  <button class="pill">2</button>
                                  <button class="pill">3</button>
                                  <button class="pill">4</button>
                                  <button class="pill">5</button>
                                  <button class="pill">6+</button>
                                </div>
                              </div>
    
                              <div class="dropdown-actions">
                                <button class="btn-outline" type="button" onclick="resetPills()">Reset</button>
                                <button class="btn-filled" type="button" onclick="hideDropdown()">Done</button>
                              </div>
                            </div>
                          </div>
                          <!-- More Filters (Dropdown simulated) -->
                          <div class="dropdown-wrapper">
                            <button class="toggle-prop-type icon-btn" id="moreFiltersBtn" type="button">More Filters <span class="icon">&#9881;</span></button>
                            <div class="beds-baths-dropdown" id="moreFiltersDropdown">
                              <div class="filter-group">
                                <label><strong>Price AED</strong></label>
                                <div class="input-more-filter-group">
                                  <div class="input-more-filter-input">
                                    <label for="mini_price">Minimum</label>
                                    <input type="text" name="mini_price" class="input-more-filter" placeholder="0" />
                                  </div>
                                  <div class="input-more-filter-input">
                                    <label for="max_price">Maximum</label>
                                    <input type="text" name="max_price" class="input-more-filter" placeholder="0" />
                                  </div>
                                </div>
                              </div>
    
                              <div class="filter-group">
                                <label><strong>Area (sqft)</strong></label>
                                <div class="input-more-filter-group">
                                  <div class="input-more-filter-input">
                                    <label for="mini_area">Minimum</label>
                                    <input type="number" name="mini_area" class="input-more-filter" placeholder="0" />
                                  </div>
                                  <div class="input-more-filter-input">
                                    <label for="max_area">Maximum</label>
                                    <input type="number" name="max_area" class="input-more-filter" placeholder="0" />
                                  </div>
                                </div>
                              </div>
    
                              <div class="filter-group">
                                <label><strong>Keywords</strong></label>
                                <div class="input-more-filter-group">
                                  <div class="input-more-filter-input">
                                    <input type="text" name="keywords" class="input-more-filter-one-option" placeholder="Add relevant keywords" />
                                  </div>
                                </div>
                              </div>
    
                              <div class="filter-group">
                                <label><strong>Developer</strong></label>
                                <div class="input-more-filter-group">
                                  <div class="input-more-filter-input">
                                    <input type="text" name="developer" class="input-more-filter-one-option" placeholder="Select a developer" />
                                  </div>
                                </div>
                              </div>
    
                              <div class="dropdown-actions">
                                <button class="btn-outline" type="button" onclick="resetPills()">Reset</button>
                                <button class="btn-filled" type="button" onclick="hideDropdown()">Done</button>
                              </div>
                            </div>
                          </div>
                
                          <!-- Save Search -->
                          <a href="#" class="btn btn-link">Save Search</a>
                        </form>
                
                        <!-- Beds & Baths Dropdown -->
                        <div class="bg-light p-3 rounded shadow-sm mt-2 d-none" id="bedsBathsDropdown">
                          <div class="row">
                            <div class="col-md-6">
                              <strong>Beds</strong>
                              <div class="d-flex flex-wrap gap-1 mt-1" id="bedOptions">
                                <button class="btn btn-outline-secondary btn-sm pill">Studio</button>
                                <button class="btn btn-outline-secondary btn-sm pill">1</button>
                                <button class="btn btn-outline-secondary btn-sm pill">2</button>
                                <button class="btn btn-outline-secondary btn-sm pill">3</button>
                                <button class="btn btn-outline-secondary btn-sm pill">4</button>
                                <button class="btn btn-outline-secondary btn-sm pill">5+</button>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <strong>Baths</strong>
                              <div class="d-flex flex-wrap gap-1 mt-1" id="bathOptions">
                                <button class="btn btn-outline-secondary btn-sm pill">1</button>
                                <button class="btn btn-outline-secondary btn-sm pill">2</button>
                                <button class="btn btn-outline-secondary btn-sm pill">3</button>
                                <button class="btn btn-outline-secondary btn-sm pill">4+</button>
                              </div>
                            </div>
                          </div>
                        </div>
                
                        <!-- More Filters Dropdown -->
                        <div class="bg-light p-3 rounded shadow-sm mt-2 d-none" id="moreFiltersDropdown">
                          <div class="row g-2">
                            <div class="col-md-6">
                              <label>Price (AED)</label>
                              <div class="d-flex gap-2">
                                <input type="text" class="form-control" placeholder="Min" />
                                <input type="text" class="form-control" placeholder="Max" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label>Area (sqft)</label>
                              <div class="d-flex gap-2">
                                <input type="number" class="form-control" placeholder="Min" />
                                <input type="number" class="form-control" placeholder="Max" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label>Keywords</label>
                              <input type="text" class="form-control" placeholder="e.g. pool, garden" />
                            </div>
                            <div class="col-md-6">
                              <label>Developer</label>
                              <input type="text" class="form-control" placeholder="Developer name" />
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
        </div>
      </section>

      <!-- Feature Properties -->
      <section id="feature-property" class="feature-property bgc-f7">
        <div class="container ovh">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="main-title text-center mb40">
                <h2>Featured Properties</h2>
                <p>Handpicked properties by our team.</p>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="feature_property_slider">
                @foreach ($properties as $property)
                  @php $carouselId = 'carousel-' . $property->id; @endphp
                  <div class="item">
                    <a href="{{ route('properties.show_details_home', ['id' => $property->id]) }}">
                      <div class="feat_property">
                        <div class="thumb">
                          <div id="{{ $carouselId }}" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                              @foreach ($property->images as $index => $image)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                  <img class="d-block w-100" src="{{ asset('storage/' . $image->image_url) }}" alt="Property image {{ $index + 1 }}">
                                </div>
                              @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#{{ $carouselId }}" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#{{ $carouselId }}" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                        </div>

                        <div class="details">
                          <div class="tc_content">
                            <p class="text-thm">{{ $property->property_type }}</p>
                            <h4>{{ $property->property_name }}</h4>
                            <p>
                              <span class="flaticon-placeholder"></span>
                              {{ $property->address }}
                            </p>
                            <ul class="prop_details mb0">
                              <li class="list-inline-item">
                                <span>Beds: {{ $property->bedrooms }}</span>
                              </li>
                              <li class="list-inline-item">
                                <span>Baths: {{ $property->bathrooms }}</span>
                              </li>
                              <li class="list-inline-item">
                                <span>Sq Ft: {{ $property->property_built_up_area }}</span>
                              </li>
                            </ul>
                          </div>

                          <div class="fp_footer">
                            <ul class="fp_meta float-left mb0">
                              <li class="list-inline-item"></li>
                              <li class="list-inline-item">
                                @if ($property->property_status == 'off-plan')
                                  <span>Handover Date: {{ $property->handover_date }}</span>
                                @elseif ($property->property_status == 'Buy')
                                  <span>Year of Built: {{ $property->year_built }}</span>
                                @endif
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Why Chose Us -->
      <section id="why-chose" class="whychose_us bgc-f7 pb30">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="main-title text-center">
                <h2>Why Choose Us</h2>
                <p>We provide full service at every step.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="why_chose_us">
                <div class="icon">
                  <span class="flaticon-high-five"></span>
                </div>
                <div class="details">
                  <h4>Expert Guidance & Market Insights</h4>
                  <p>
                    Get in-depth knowledge of Dubai’s real estate market and
                    personalized investment advice
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="why_chose_us">
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
              <div class="why_chose_us">
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
                      <img src="{{ asset('client-avatar-1.webp') }}" alt="Client Avatar" />
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
                      <img src="{{ asset('client-avatar-4.webp') }}" alt="1.jpg" />
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
                      <img src="{{ asset('client-avatar-3.webp') }}" alt="1.jpg" />
                    </div>
                    <div class="details">
                      <h4>Augusta Silva</h4>
                      <p>Buy Manager</p>
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
                      <img src="{{ asset('client-avatar-4.webp') }}" alt="1.jpg" />
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
                      <img src="{{ asset('client-avatar-5.webp') }}" alt="1.jpg" />
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
      <!--<section id="our-partners" class="our-partners">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 offset-lg-3">
                  <div class="main-title text-center">
                      <h2>Our Partners</h2>
                      <p>We only work with the best developers in the UAE</p>
                  </div>
              </div>
          </div>
          <div class="row my-partners-slider">
              <div class="col-sm-6 col-md-4 col-lg">
                  <div class="our_partner">
                      <img class="img-fluid" src="emaar2.png" alt="1.png"/>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg">
                  <div class="our_partner">
                      <img class="img-fluid" src="damac.png" alt="2.png"/>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg">
                  <div class="our_partner">
                      <img class="img-fluid" src="azizi-logo.png" alt="3.png"/>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg">
                  <div class="our_partner">
                      <img class="img-fluid" src="shoba.png" alt="4.png"/>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg">
                  <div class="our_partner">
                      <img class="img-fluid" src="meras1.png" alt="5.png"/>
                  </div>
              </div>
          </div>
      </div>
    </section>-->
      <!-- Our Partners Section as a Swiper Carousel -->
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
                    src="{{ asset('images/partners/EMAAR-logo.webp') }}"
                    alt="Emaar"
                  />
                </div>
              </div>
              <!-- Slide 2 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"  
                    src="{{ asset('images/partners/damac-logo.webp') }}"
                    alt="Damac"
                  />
                </div>
              </div>
              <!-- Slide 3 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"   
                    src="{{ asset('images/partners/azizi-logo.webp') }}"
                    alt="Azizi"
                  />
                </div>
              </div>
              <!-- Slide 4 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"  
                    src="{{ asset('images/partners/sobha-logo.webp') }}"
                    alt="Shoba"
                  />
                </div>
              </div>
              <!-- Slide 5 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"   
                    src="{{ asset('images/partners/samana-logo.webp') }}"
                    alt="Meras"
                  />
                </div>
              </div>
              <!-- Slide 6 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"   
                    src="{{ asset('images/partners/danube-logo.webp') }}"
                    alt="Meras"
                  />
                </div>
              </div>
              <!-- Slide 7 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"  
                    src="{{ asset('images/partners/meras-logo.webp') }}"
                    alt="Meras"
                  />
                </div>
              </div>
              <!-- Slide 8 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"    
                    src="{{ asset('images/partners/binghati-logo.webp') }}"
                    alt="Meras"
                  />
                </div>
              </div>
              <!-- Slide 9 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"   
                    src="{{ asset('images/partners/aldar-logo.webp') }}"
                    alt="Meras"
                  />
                </div>
              </div>
              <!-- Slide 10 -->
              <div class="swiper-slide">
                <div class="our_partner">
                  <img
                    class="img-fluid"    
                    src="{{ asset('images/partners/arada-logo.webp') }}"
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
      <section class="footer_one">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
              <div class="footer_about_widget">
                <h4>About HOM</h4>
                <p>
                  We’re reimagining how you buy, sell, and rent real estate in
                  Dubai. Since 2015, HOM Agency has made it easier to find a
                  place you love.
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
              <div class="footer_qlink_widget">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                  <li><a href="page-about.html">About Us</a></li>
                  <li><a href="page-contact.html">Contact Us</a></li>

                  <li><a href="page-listing-list.html">Listing</a></li>
                  <li><a href="page-faq.html">FAQ</a></li>
                  <li><a href="page-terms.html">Terms & Conditions</a></li>
                  <li><a href="page-terms.html">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
              <div class="footer_contact_widget">
                <h4>Contact Us</h4>
                <ul class="list-unstyled">
                  <li><a href="#">info@homagency.ae</a></li>
                  <li>
                    <a href="#">Barsha Heights, Dubai, United Arab Emirates.</a>
                  </li>
                  <!-- <li><a href="#">8007, Australia.</a></li> -->
                  <li><a href="#">+971 56 4777 7039</a></li>
                  <!-- <li><a href="#">+1 246-345-0695</a></li> -->
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
              <div class="footer_social_widget">
                <h4>Follow us</h4>
                <ul class="mb30">
                  <li class="list-inline-item">
                    <a
                      href="https://www.facebook.com/people/HOM-Agency/61567611663846/#"
                      ><i class="fa fa-facebook"></i
                    ></a>
                  </li>
                  <!-- <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/hom.uaeagency/"
                      ><i class="fa fa-instagram"></i
                    ></a>
                  </li>
                  <!-- <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                  <!-- <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li> -->
                </ul>
                <h4>Subscribe</h4>
                <form class="footer_mailchimp_form">
                  <div class="form-row align-items-center">
                    <div class="col-auto">
                      <input
                        type="email"
                        class="form-control mb-2"
                        id="inlineFormInput"
                        placeholder="Your email"
                      />
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-primary mb-2">
                        <i class="fa fa-angle-right"></i>
                      </button>
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
                <p>
                  © 2025 All Rights Reserved - Developed by
                  <a href="https://ahdafdigital.ae">Ahdaf Digital</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
    </div>
    <!-- Wrapper End -->
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script
      type="text/javascript"
      src="js/jquery-migrate-3.0.0.min.js"
    ></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
    <script type="text/javascript" src="js/ace-responsive-menu.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/isotop.js"></script>
    <script type="text/javascript" src="js/snackbar.min.js"></script>
    <script type="text/javascript" src="js/simplebar.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>
    <script type="text/javascript" src="js/scrollto.js"></script>
    <script
      type="text/javascript"
      src="js/jquery-scrolltofixed-min.js"
    ></script>
    <script type="text/javascript" src="js/jquery.counterup.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="js/pricing-slider.js"></script>
    <script type="text/javascript" src="js/timepicker.js"></script>

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- swiper CSS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Include your custom swiper initialization script -->
    <script src="js/swiper-css.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const allDropdowns = Array.from(document.querySelectorAll('.beds-baths-dropdown'));

        function setupDropdown(triggerId, dropdownId) {
          const trigger = document.getElementById(triggerId);
          const dropdown = document.getElementById(dropdownId);

          trigger?.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();

            // Close other dropdowns
            allDropdowns.forEach(dd => {
              dd.style.display = (dd.id === dropdownId && dd.style.display !== 'block') ? 'block' : 'none';
            });
          });

          document.addEventListener('click', (e) => {
            if (!dropdown.contains(e.target) && !trigger.contains(e.target)) {
              dropdown.style.display = 'none';
            }
          });
        }

        function attachPillHandler(selector, onClick) {
          document.querySelectorAll(selector).forEach(pill => {
            pill.addEventListener('click', (e) => {
              e.preventDefault();
              onClick(pill);
              fetchProperties();
            });
          });
        }

        function hideDropdowns() {
          allDropdowns.forEach(dd => dd.style.display = 'none');
        }

        function resetPills() {
          document.querySelectorAll('.pill').forEach(p => p.classList.remove('active'));
        }

        // Initialize dropdowns
        setupDropdown('bedsBathsBtn', 'bedsBathsDropdown');
        setupDropdown('moreFiltersBtn', 'moreFiltersDropdown');

        // Handle general pills (toggle active state)
        attachPillHandler('.pill', (pill) => {
          pill.classList.toggle('active');
        });

        // Handle bed selection
        attachPillHandler('#bedOptions .pill', (pill) => {
          document.getElementById('bedsInput').value = pill.textContent.trim();
        });

        // Handle bath selection
        attachPillHandler('#bathOptions .pill', (pill) => {
          document.getElementById('bathsInput').value = pill.textContent.trim();
        });

        // Handle status toggles
        const statusButtons = document.querySelectorAll('.filter-toggle-group .toggle');
        const propertyCompletionInput = document.getElementById('propertyCompletionInput');

        statusButtons.forEach(button => {
          button.addEventListener('click', (e) => {
            e.preventDefault();
            statusButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            propertyCompletionInput.value = button.getAttribute('data-value').trim();
            fetchProperties();
          });
        });

        // Expose these functions globally if needed
        window.hideDropdowns = hideDropdowns;
        window.resetPills = resetPills;
      });
    </script>

  </body>
</html>
