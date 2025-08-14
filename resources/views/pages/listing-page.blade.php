<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/flaticon/font/flaticon.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="images/home/icon_hom.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/home/icon_hom.png" sizes="128x128" rel="shortcut icon" />
    <title>FindHouse - Real Estate HTML Template</title>
</head>
  <body>
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
                <a href="{{asset('page-listing-list.html')}}"
                  ><span class="title">Listing</span></a>
              </li>
              <!-- <li>
                <a href="{{asset('page-service.html')}}">
                  <span class="title">Service</span>
                </a>
              </li> -->
              <li>
                <a href="{{asset('page-about.html')}}"><span class="title">About</span></a>
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
            <li class="cl_btn">
              <a class="btn btn-block btn-lg btn-thm circle" href="#"
                ><span class="flaticon-plus"></span> Create Listing</a
              >
            </li>
          </ul>
        </nav>
      </div>

      <!-- Listing Grid View -->
      <!-- Listing Grid View -->
      <section class="our-listing bgc-f7 pb30-991">
        <div class="container">
          <div class="row">
            <!-- Breadcrumbs -->
            <div class="col-lg-6">
              <div class="breadcrumb_content style2 mb0-991">
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active text-thm" aria-current="page">Simple Listing – List View</li>
                </ol>
                <h2 class="breadcrumb_title">Simple Listing – List View</h2> -->
              </div>
            </div>

            <!-- View Icons & Filter Toggle -->
            <!-- <div class="col-lg-6">
              <div class="listing_list_style mb20-xsd tal-991">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="fa fa-th-large"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="fa fa-th-list"></span></a></li>
                </ul>
              </div>
              <div class="dn db-991 mt30 mb0">
                <div id="main2">
                  <span id="open2" class="flaticon-filter-results-button filter_open_btn style2">Show Filter</span>
                </div>
              </div>
            </div> -->
          </div>

          <!-- Search Filters & Property List -->
          <div class="row">
            <div class="col-lg-12 sticky-filters">
              <div class="grid_list_search_result">
                <div class="home1-advnc-search">
                  <form id="searchForm" action="{{ route('properties.search') }}" method="POST">
                    @csrf
                    <div class="filter-bar">
                      <select class="toggle-prop-type" name="listing_status">
                        <option value="All" {{ request('listing_status') == 'All' ? 'selected' : '' }}>All</option>
                        <option value="Buy" {{ request('listing_status') == 'Buy' ? 'selected' : '' }}>Buy</option>
                        <option value="Rent" {{ request('listing_status') == 'Rent' ? 'selected' : '' }}>Rent</option>
                      </select>

                      <input type="text" class="filter-input" placeholder="Enter location" name="location" />

                      <div class="filter-toggle-group">
                        <input type="hidden" name="property_completion" id="propertyCompletionInput" value="All">
                        <button class="toggle active" data-value="All">All</button>
                        <button class="toggle" data-value="Ready">Ready</button>
                        <button class="toggle" data-value="Off-plan">Off Plan</button>
                      </div>

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
                    </div>
                    
                  </form>
                  
                </div>
                
              </div>

              <!-- Property Listings Container -->
              <div id="propertyGrid">
                @include('properties.partials.property_list', ['properties' => $properties])
              </div>

            </div>
          </div>
        </div> <!-- container -->
      </section>

      
      <!-- Our Footer -->
      <section class="footer_one">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
              <div class="footer_about_widget">
                <h4>About Site</h4>
                <p>
                  We’re reimagining how you buy, sell and rent. It’s now easier
                  to get into a place you love. So let’s do this, together.
                </p>
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
    {{-- <script type="text/javascript" src="{{asset('js/jquery-3.3.1.js')}}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script
      type="text/javascript"
      src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"
    ></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    {{-- <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('js/jquery.mmenu.all.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ace-responsive-menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/snackbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/simplebar.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scrollto.js')}}"></script>
    <script
      type="text/javascript"
      src="{{asset('js/jquery-scrolltofixed-min.js')}}"
    ></script>
    <script type="text/javascript" src="{{asset('js/jquery.counterup.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/progressbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pricing-slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/timepicker.js')}}"></script>
    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    <script>
      let navbar = document.querySelector('.header-nav');
      let searchBar = document.querySelector('.grid_list_search_result');
      let prevScrollPos = window.pageYOffset;
    
      // Set initial styles for the navbar (no need to set display for search bar in JS)
      navbar.style.top = "0";  // Ensure navbar is positioned correctly initially
    
      // Function to handle sticky search bar
      function handleScroll() {
        let currentScrollPos = window.pageYOffset;
    
        // When scrolling down, hide the navbar and show the search bar
        if (prevScrollPos < currentScrollPos) {
          navbar.style.top = "-70px";  // Adjust to hide the navbar (height of navbar)
          searchBar.classList.add("sticky-visible");  // Add a class to make search bar sticky
        } else {
          navbar.style.top = "0";  // Show the navbar
          searchBar.classList.remove("sticky-visible");  // Remove the class to hide search bar
        }
    
        prevScrollPos = currentScrollPos;
      }
    
      // Listen for scroll event
      window.onscroll = handleScroll;
    
      // Handle window resize (zoom change) to ensure sticky behavior
      window.onresize = function() {
        // Recalculate any necessary styles or re-trigger sticky behavior
        searchBar.classList.remove("sticky-visible");
        navbar.style.top = "0";  // Reset navbar position
    
        // Re-run the scroll function in case resize affects layout
        handleScroll();
      };
    
      // Call handleScroll initially to ensure correct state on load
      handleScroll();
    </script>
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


<script>
  const searchForm = document.getElementById('searchForm');
  const propertyGrid = document.getElementById('propertyGrid'); // Make sure your grid has this ID

  searchForm.addEventListener('change', function (e) {
  e.preventDefault();
  fetchProperties();
});

  // Additionally, handle select elements immediately
  // document.querySelectorAll('select').forEach(select => {
  //   select.addEventListener('change', function () {
  //     fetchProperties();
  //   });
  // });
  // Function to fetch properties
  async function fetchProperties() {
  const formData = new FormData(searchForm);

  try {
    const response = await fetch(searchForm.action, {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      }
    });

    if (!response.ok) {
      throw new Error('Network response was not ok');
    }

    const html = await response.text(); // Fetch directly as text
    propertyGrid.innerHTML = html;
  } catch (error) {
    console.error('Fetch error:', error);
    propertyGrid.innerHTML = `<p>Error loading properties</p>`;
  }
}
const filterBar = document.querySelector('.filter-bar');
let filterBarMinimal = false;

function filterBarScrollHandler() {
  if (window.scrollY > 60) {
    if (!filterBarMinimal) {
      filterBar.classList.add('filter-bar-sticky-minimal');
      filterBarMinimal = true;
    }
  } else {
    if (filterBarMinimal) {
      filterBar.classList.remove('filter-bar-sticky-minimal');
      filterBarMinimal = false;
    }
  }
}

// Attach scroll handler initially
window.addEventListener('scroll', filterBarScrollHandler);

// Disable scroll handler when More Filters is open
document.getElementById('moreFiltersBtn').addEventListener('click', function() {
  window.removeEventListener('scroll', filterBarScrollHandler);
});

// Re-enable scroll handler when Done is clicked
document.querySelector('#moreFiltersDropdown .btn-filled').addEventListener('click', function() {
  window.addEventListener('scroll', filterBarScrollHandler);
});

let isScrolling;

window.addEventListener('scroll', function() {
  document.body.classList.add('scrolling');
  clearTimeout(isScrolling);
  isScrolling = setTimeout(function() {
    document.body.classList.remove('scrolling');
  }, 60);
});

  // // Listen for any change in the form
  // searchForm.addEventListener('change', () => {
  //   fetchProperties();
  // });

  // // Optionally also listen for input typing (like location search)
  // searchForm.addEventListener('input', () => {
  //   fetchProperties();
  // });
</script>


  </body>
</html>
