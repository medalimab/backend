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
    <style>
      /* Style spécifique pour le sous-menu Explore */
      .ace-responsive-menu .sub-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: white;
        border: 1px solid #ddd;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        min-width: 150px;
        z-index: 9999;
      }
      
      .ace-responsive-menu li:hover .sub-menu,
      .ace-responsive-menu li.menu-active .sub-menu {
        display: block !important;
      }
      
      .ace-responsive-menu .sub-menu li {
        width: 100%;
        border-bottom: 1px solid #eee;
      }
      
      .ace-responsive-menu .sub-menu li a {
        padding: 10px 15px;
        display: block;
        color: #333;
        text-decoration: none;
        white-space: nowrap;
      }
      
      .ace-responsive-menu .sub-menu li a:hover {
        background-color: #f5f5f5;
        color: #007bff;
      }
      
      /* S'assurer que le parent du sous-menu a la position relative */
      .ace-responsive-menu > li {
        position: relative;
      }
      
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
      .our-listing {
        margin-top: 0 !important;
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
      
      /* Styles responsive pour le footer mobile */
      @media (max-width: 768px) {
        .footer_one {
          padding: 40px 0;
        }
        
        .footer_one .container {
          padding-left: 15px;
          padding-right: 15px;
        }
        
        .footer_one .row {
          margin-left: 0;
          margin-right: 0;
        }
        
        .footer_one .col-sm-6,
        .footer_one .col-md-6,
        .footer_one .col-lg-3,
        .footer_one .col-xl-3 {
          padding-left: 0;
          padding-right: 0;
          margin-bottom: 30px;
          width: 100%;
          max-width: 100%;
        }
        
        .footer_about_widget,
        .footer_qlink_widget,
        .footer_contact_widget,
        .footer_social_widget {
          text-align: center;
          padding: 0 20px;
        }
        
        .footer_about_widget h4,
        .footer_qlink_widget h4,
        .footer_contact_widget h4,
        .footer_social_widget h4 {
          font-size: 18px;
          margin-bottom: 20px;
          text-align: center;
        }
        
        .footer_qlink_widget ul,
        .footer_contact_widget ul {
          list-style: none;
          padding: 0;
          margin: 0;
          text-align: center;
        }
        
        .footer_qlink_widget ul li,
        .footer_contact_widget ul li {
          margin-bottom: 10px;
        }
        
        .footer_social_widget ul {
          text-align: center;
          justify-content: center;
        }
        
        .footer_mailchimp_form {
          max-width: 300px;
          margin: 0 auto;
        }
        
        .footer_mailchimp_form .form-row {
          justify-content: center;
        }
      }
      
      /* Styles pour très petits écrans */
      @media (max-width: 480px) {
        .footer_one {
          padding: 30px 0;
        }
        
        .footer_about_widget,
        .footer_qlink_widget,
        .footer_contact_widget,
        .footer_social_widget {
          padding: 0 10px;
        }
        
        .footer_about_widget p,
        .footer_qlink_widget ul li a,
        .footer_contact_widget ul li a {
          font-size: 14px;
          line-height: 1.6;
        }
        
        .footer_social_widget ul li {
          margin: 0 8px;
        }
        
        .footer_mailchimp_form .form-control {
          font-size: 14px;
          padding: 8px 12px;
        }
        
        /* Ajuster l'espacement du formulaire */
        .form-row.align-items-center {
          margin-right: -50px;
        }
      }
    </style>
    <link href="images/home/icon_hom.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/home/icon_hom.png" sizes="128x128" rel="shortcut icon" />
    <title>FindHouse - Real Estate HTML Template</title>
</head>
  <body>
    <div class="wrapper">
      <!-- Main Header Nav -->
     
      @include("components.menu")
    

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

                      <input type="hidden" name="property_completion" id="propertyCompletionInput" value="All">
                      <div class="filter-toggle-group">
                        <button class="toggle active" data-value="All" type="button">All</button>
                        <button class="toggle" data-value="Ready" type="button">Ready</button>
                        <button class="toggle" data-value="Off-Plan" type="button">Off Plan</button>
                      </div>

                      <select class="toggle-prop-type" name="home_type">
                        <option hidden value="" disabled selected>Home Type</option>
                        <option value="Residences">Residential</option>
                        <option value="Villa">Villas</option>
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
      

      <!-- Our Footer Bottom Area -->
      @include('components.footer')
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
    {{-- Désactiver scrolltofixed pour éviter les conflits avec notre menu fixe --}}
    {{-- <script
      type="text/javascript"
      src="{{asset('js/jquery-scrolltofixed-min.js')}}"
    ></script> --}}
    <script type="text/javascript" src="{{asset('js/jquery.counterup.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/progressbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pricing-slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/timepicker.js')}}"></script>
    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    <script>
      // Debug script pour le menu Explore
      $(document).ready(function() {
        console.log('Document ready - checking menu initialization');
        
        // Vérifier si le menu responsive est initialisé
        if ($('#respMenu').length) {
          console.log('Menu found');
          
          // Ajouter un listener spécifique pour le menu Explore
          $('#respMenu li:has(> a > span:contains("Explore"))').on('click', function(e) {
            console.log('Explore menu clicked');
            
            // S'assurer que le sous-menu est visible
            const submenu = $(this).find('.sub-menu');
            if (submenu.length) {
              console.log('Sub-menu found, toggling visibility');
              submenu.slideToggle();
            }
          });
          
          // Ajouter un hover handler aussi
          $('#respMenu li:has(> a > span:contains("Explore"))').on('mouseenter', function() {
            console.log('Explore menu hovered');
            const submenu = $(this).find('.sub-menu');
            if (submenu.length) {
              submenu.stop().slideDown();
            }
          }).on('mouseleave', function() {
            const submenu = $(this).find('.sub-menu');
            if (submenu.length) {
              submenu.stop().slideUp();
            }
          });
        } else {
          console.log('Menu not found');
        }
      });
    </script>
    <script>
      // Attendre que le DOM soit chargé
      $(document).ready(function() {
        let navbar = $('.header-nav');
        let searchBar = $('.grid_list_search_result');
        
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
        
        // Ajouter du padding au body pour compenser le navbar fixe
        $('body').css('padding-top', navbar.outerHeight() + 'px');
        
        let prevScrollPos = window.pageYOffset;
        
        // Function to handle scroll - seulement pour la barre de recherche
        function handleScroll() {
          let currentScrollPos = window.pageYOffset;
          
          // Garder toujours le navbar visible
          navbar.css('top', '0');
          
          // Gérer uniquement la barre de recherche sticky
          if (currentScrollPos > 100) {
            searchBar.addClass("sticky-visible");
          } else {
            searchBar.removeClass("sticky-visible");
          }
          
          prevScrollPos = currentScrollPos;
        }
        
        // Écouter l'événement de scroll
        $(window).on('scroll', handleScroll);
        
        // Gérer le redimensionnement
        $(window).on('resize', function() {
          navbar.css({
            'position': 'fixed',
            'top': '0',
            'z-index': '9999'
          });
          $('body').css('padding-top', navbar.outerHeight() + 'px');
          handleScroll();
        });
        
        // Appeler handleScroll au chargement
        handleScroll();
      });
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
