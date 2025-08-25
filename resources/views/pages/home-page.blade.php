<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta
      name="keywords"
      content="advanced custom search, agency, agent, business, clean, corporate, directory, google maps, homes, idx agent, listing properties, membership packages, property, real broker, real estate, real estate agent, real estate agency, realtor"
    />
    <meta name="description" content="FindHouse - Real Estate HTML Template" />
    <meta name="CreativeLayers" content="ATFN" />
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!--End CSS file-->

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      /* Correction de l'espacement entre Our Partners et Footer */
      #our-partners {
        margin-bottom: 0 !important;
        padding-bottom: 30px !important;
      }
      
      .our-partners {
        margin-bottom: 0 !important;
        padding-bottom: 30px !important;
      }
      
      /* S'assurer que le footer n'a pas de marge excessive en haut */
      .footer_one {
        margin-top: 0 !important;
        padding-top: 50px !important;
      }
      
      /* Réduire l'espace du conteneur des partenaires */
      .our-partners .container {
        margin-bottom: 0 !important;
      }
      
      /* Réduire l'espace du swiper des partenaires */
      .my-partners-slider {
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
      }

      /* Styles responsive pour mobile */
      @media (max-width: 600px) {
        .carousel-container,
        .cards {
          padding-left: 0 !important;
          margin-left: 0 !important;
          margin-right: 0 !important;
          padding-right: 0 !important;
        }
        .card {
          margin-left: 0 !important;
          margin-right: 0 !important;
        }
        .card-content {
          padding-left: 1rem !important;
          padding-right: 1rem !important;
          margin-right: 0 !important;
        }
        .view-all {
          display: block !important;
          margin: 0 auto !important;
          text-align: center !important;
          width: fit-content !important;
          max-width: 90vw !important;
          padding: 10px 18px !important;
          border-radius: 8px !important;
          border: 1px solid #ccc !important;
          background: #f1f8fa !important;
          font-weight: bold !important;
          font-size: 15px !important;
          cursor: pointer !important;
        }
      }

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
          .carousel-container {
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 auto !important;
            padding: 0 15px !important;
          }
          .cards {
            width: 100% !important;
            max-width: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
            gap: 15px !important;
            overflow-x: auto !important;
          }
          .card {
            width: 270px !important;
            min-width: 270px !important;
            max-width: 270px !important;
            margin: 0 !important;
          }
          .card img {
            width: 100% !important;
            height: 160px !important;
            object-fit: cover !important;
          }
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
                src="{{ asset('images/home/hom-nb.png') }}"
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
                src="{{ asset('images/home/web-logo.png') }}"
                alt="Logo HOM Blueee"
                class="logo-blue"
                style="width: 120px; height: auto; max-width: 100%"
              />
              <img
                src="{{ asset('images/home/hom-light-logo.png') }}"
                alt="Logo HOM Light"
                class="logo-light"
                style="width: 120px; height: auto; max-width: 100%"
              />
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
           
             
              <!-- <li>
                <a href="page-service.html"
                  ><span class="title">Service</span></a>
              </li> -->
           
        </div>
      </header>

      <!-- Main Header Nav For Mobile -->
      @include('components.menu')

      <!-- Home Design -->
      <section class="home-one home1-overlay home1_bgi1">
        <video autoplay muted loop playsinline>
          <source
            src="{{ asset('images/background/homagency_video_banner.mp4') }}"
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
                  @include('components.search-bar')
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  
      <!-- Feature Properties -->
      <section id="feature-property-carousel" class="feature-property bgc-f7 py-5">
        <div class="container">
          <div class="main-title text-center mb-4">
            <h2>Featured Properties</h2>
            
          </div>
          <!-- Tabs filtrage version mobile - FORCÉ VISIBLE -->
          <div class="tabs d-flex gap-2 justify-content-center mb-4" style="display: flex !important; visibility: visible !important; opacity: 1 !important;">
            <div class="tab active" style="display: inline-block !important; visibility: visible !important;">All</div>
            <div class="tab" style="display: inline-block !important; visibility: visible !important;">Ready</div>
            <div class="tab" style="display: inline-block !important; visibility: visible !important;">Off Plan</div>
          </div>
          <!-- Carousel -->
          <div class="carousel-separator" style="height:32px;"></div>
          <div class="carousel-container position-relative">
            <!-- Flèche droite supprimée -->
            <div class="arrow right">&#10095;</div>
            <div class="cards d-flex gap-3 overflow-auto pb-2" id="carousel">
              @foreach($properties->take(8) as $property)
                <a href="/listing_page/home_details/{{ $property->id }}" class="card-link" style="text-decoration:none;color:inherit;">
                  <div class="card" data-status="{{ strtolower($property->property_status) }}" style="width:270px;min-width:270px;max-width:270px;cursor:pointer;">
                    @php
                      $img = $property->images->first()->image_url ?? null;
                      if ($img && !str_starts_with($img, 'http')) {
                        $img = asset('storage/' . (str_starts_with($img, 'properties/') ? $img : 'properties/' . ltrim($img, '/')));
                      }
                    @endphp
                    <img src="{{ $img ?? 'https://via.placeholder.com/300x160' }}" alt="{{ $property->property_name }}" class="w-100" style="height:160px;object-fit:cover;">
                    <div class="card-content p-3">
                      <h3 class="mb-1">{{ \Illuminate\Support\Str::limit($property->property_name, 40, '...') }}</h3>
                      <p class="mb-1">{{ \Illuminate\Support\Str::limit($property->property_type, 30, '...') }}</p>
                      <p class="mb-1">{{ \Illuminate\Support\Str::limit($property->address, 50, '...') }}</p>
                      <div class="price-handover d-flex justify-content-between mt-2">
                        <span class="price">AED {{ number_format($property->price) }}</span>
                        <span class="handover">{{ $property->handover_date ?? '' }}</span>
                      </div>
                    </div>
                    @if($property->agent && $property->agent->whatsapp)
                      <a class="whatsapp" href="https://wa.me/{{ $property->agent->whatsapp }}" target="_blank">WhatsApp</a>
                    @else
                      <span class="whatsapp" style="pointer-events:none;">WhatsApp</span>
                    @endif
                  </div>
                </a>
              @endforeach
            </div>
            <!-- Bouton View all déplacé en dehors du conteneur .cards -->
            <button class="view-all mt-4" onclick="window.location.href='{{ route('properties.show_listing_page_client') }}'">View all</button>

          </div>
        </div>
        <style>
          /* Force l'affichage des tabs sur tous les appareils */
          .tabs { 
            display: flex !important; 
            gap: 10px; 
            margin-bottom: 40px; 
            justify-content: center;
            flex-wrap: wrap;
            visibility: visible !important;
            opacity: 1 !important;
            width: 100% !important;
            border-bottom: none !important;
          }
          
          .carousel-separator { 
            width:100%; 
            height:32px; 
            background:transparent; 
          }
          
          .tab { 
            display: block !important;
            padding: 8px 16px; 
            border: 1px solid #ccc; 
            border-radius: 8px; 
            cursor: pointer; 
            background: #fff; 
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            white-space: nowrap;
            visibility: visible !important;
            opacity: 1 !important;
          }
          
          .tab.active { 
            background: #fff; 
            color: #1E3A8A; 
            border-color: #1E3A8A; 
            font-weight: 600;
          }
          
          .tab.active:hover { 
            background: #f1f8fa; 
            color: #1E3A8A; 
            border-color: #1E3A8A; 
          }
          
          .tab:hover {
            background: #f8f9fa;
            border-color: #1E3A8A;
            color: #1E3A8A;
          }
          
          /* Styles responsive FORCÉS pour les tabs */
          @media screen and (max-width: 768px) {
            .tabs { 
              display: flex !important; 
              gap: 8px; 
              margin-bottom: 30px; 
              padding: 0 15px;
              justify-content: center;
              visibility: visible !important;
              opacity: 1 !important;
              position: relative !important;
              z-index: 10 !important;
            }
            .tab { 
              display: inline-block !important;
              padding: 6px 12px; 
              font-size: 13px;
              min-width: 70px;
              text-align: center;
              visibility: visible !important;
              opacity: 1 !important;
            }
          }
          
          @media screen and (max-width: 480px) {
            .tabs { 
              display: flex !important;
              gap: 6px; 
              margin-bottom: 25px; 
              padding: 0 10px;
              visibility: visible !important;
              opacity: 1 !important;
            }
            .tab { 
              display: inline-block !important;
              padding: 5px 10px; 
              font-size: 12px;
              min-width: 60px;
              flex: 1;
              max-width: 90px;
              visibility: visible !important;
              opacity: 1 !important;
            }
          }
          
          @media screen and (max-width: 360px) {
            .tabs { 
              display: flex !important;
              gap: 4px; 
              padding: 0 5px;
              visibility: visible !important;
              opacity: 1 !important;
            }
            .tab { 
              display: inline-block !important;
              padding: 4px 8px; 
              font-size: 11px;
              min-width: 50px;
              visibility: visible !important;
              opacity: 1 !important;
            }
          }
            .tab { 
              padding: 6px 12px; 
              font-size: 13px;
              min-width: 70px;
              text-align: center;
            }
          }
          
          @media (max-width: 480px) {
            .tabs { 
              gap: 6px; 
              margin-bottom: 25px; 
              padding: 0 10px;
            }
            .tab { 
              padding: 5px 10px; 
              font-size: 12px;
              min-width: 60px;
              flex: 1;
              max-width: 90px;
            }
          }
          
          @media (max-width: 360px) {
            .tabs { 
              gap: 4px; 
              padding: 0 5px;
            }
            .tab { 
              padding: 4px 8px; 
              font-size: 11px;
              min-width: 50px;
            }
          }
          .tab.active:hover { background: #f1f8fa; color: #1E3A8A; border-color: #1E3A8A; }
          .carousel-container { position: relative; max-width: 1200px; margin: 0 auto; }
          .cards {
            display: flex;
            gap: 20px;
            overflow-x: hidden;
            scroll-behavior: smooth;
            padding-bottom: 10px;
            width: calc(4 * 280px + 3 * 20px); /* 4 cartes + 3 gaps */
            min-width: 0;
            margin: 0 auto;
          }
          .cards::-webkit-scrollbar { display: none; }
          @media (max-width: 1200px) {
            .carousel-container { max-width: 100vw; }
            .cards { width: 100vw; }
          }
          @media (max-width: 900px) {
            .cards { width: calc(2 * 280px + 1 * 20px); }
          }
          @media (max-width: 600px) {
            .cards { width: calc(1 * 280px); }
          }
          .card { min-width: 250px; max-width: 280px; background: #fff; border: 1px solid #ddd; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 6px rgba(0,0,0,0.1); flex-shrink: 0; }
          .card-content { padding: 12px 16px; }
          .card-content h3,
          .card-content p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
            display: block;
          }
          .card h3 { margin: 0; font-size: 16px; font-weight: bold; }
          .card p { margin: 4px 0; font-size: 13px; color: #555; }
          .price-handover { display: flex; justify-content: space-between; margin-top: 10px; font-size: 14px; font-weight: bold; }
          .price { color: #1E3A8A; }
          .handover { color: #333; }
          .whatsapp { display: flex; align-items: center; justify-content: center; background: #e8f7f1; color: #1a7f5a; border-radius: 8px; padding: 8px; margin: 12px 16px; text-decoration: none; font-size: 14px; font-weight: bold; }
          .whatsapp:hover { background: #d1f0e3; }
          .arrow { position: absolute; top: 35%; transform: translateY(-50%); background: rgba(255,255,255,0.95); border: 1px solid #1E3A8A; border-radius: 50%; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; cursor: pointer; font-size: 22px; color: #1E3A8A; box-shadow: 0 2px 8px rgba(0,0,0,0.18); z-index: 2; }
          .arrow:hover { background: #e8f7f1; color: #1E3A8A; border-color: #1E3A8A; }
          .arrow.left { left: 10px; }
          .arrow.right { right: 10px; }
          @media (max-width: 768px) {
            .arrow { width: 36px; height: 36px; font-size: 18px; }
            .arrow.left { left: 2px; }
            .arrow.right { right: 2px; }
          }
          .view-all { margin: 30px auto 0; display: block; padding: 10px 18px; border-radius: 8px; border: 1px solid #ccc; background: #f1f8fa; font-weight: bold; cursor: pointer; }
        </style>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById("carousel");
            const rightArrow = document.querySelector(".arrow.right");
            if (carousel && rightArrow) {
              rightArrow.addEventListener("click", function() {
                carousel.scrollBy({ left: 300, behavior: "smooth" });
              });
            }
            // Tabs activation + filtrage
            const tabs = document.querySelectorAll(".tab");
            tabs.forEach(tab => {
              tab.addEventListener("click", () => {
                tabs.forEach(t => t.classList.remove("active"));
                tab.classList.add("active");
                const status = tab.textContent.trim().toLowerCase();
                const cards = carousel.querySelectorAll('.card');
                cards.forEach(card => {
                  if (status === 'all') {
                    card.style.display = '';
                  } else if (status === 'ready' && card.dataset.status === 'ready') {
                    card.style.display = '';
                  } else if ((status === 'off plan' || status === 'off-plan') && (card.dataset.status === 'off-plan' || card.dataset.status === 'off plan')) {
                    card.style.display = '';
                  } else {
                    card.style.display = 'none';
                  }
                });
              });
            });
          });
        </script>
      </section>
      

      <!-- Carousel d'images pleine largeur -->
      <section id="fullwidth-carousel" class="fullwidth-section">
        <div class="container-fluid p-0">
          <div class="swiper fullwidth-swiper">
            <div class="swiper-wrapper">
              <!-- Slide 1 -->
              <div class="swiper-slide">
                <img src="{{ asset('images/carousel/web1.png') }}" alt="Image Web 1" class="carousel-image web-image">
                <img src="{{ asset('images/carousel/mobile1.png') }}" alt="Image Mobile 1" class="carousel-image mobile-image">
              </div>
              <!-- Slide 2 -->
              <div class="swiper-slide">
                <img src="{{ asset('images/carousel/web2.png') }}" alt="Image Web 2" class="carousel-image web-image">
                <img src="{{ asset('images/carousel/mobile2.png') }}" alt="Image Mobile 2" class="carousel-image mobile-image">
              </div>
              <!-- Slide 3 -->
              <div class="swiper-slide">
                <img src="{{ asset('images/carousel/web3.png') }}" alt="Image Web 3" class="carousel-image web-image">
                <img src="{{ asset('images/carousel/mobile3.png') }}" alt="Image Mobile 3" class="carousel-image mobile-image">
              </div>
              <!-- Slide 4 -->
              <div class="swiper-slide">
                <img src="{{ asset('images/carousel/web4.png') }}" alt="Image Web 4" class="carousel-image web-image">
                <img src="{{ asset('images/carousel/mobile4.png') }}" alt="Image Mobile 4" class="carousel-image mobile-image">
              </div>
              <!-- Slide 5 -->
              <div class="swiper-slide">
                <img src="{{ asset('images/carousel/web5.png') }}" alt="Image Web 5" class="carousel-image web-image">
                <img src="{{ asset('images/carousel/mobile5.png') }}" alt="Image Mobile 5" class="carousel-image mobile-image">
              </div>
              <!-- Slide 6 -->
              <div class="swiper-slide">
                <img src="{{ asset('images/carousel/web6.png') }}" alt="Image Web 6" class="carousel-image web-image">
                <img src="{{ asset('images/carousel/mobile6.png') }}" alt="Image Mobile 6" class="carousel-image mobile-image">
              </div>
              <!-- Slide 7 -->
              <div class="swiper-slide">
                <img src="{{ asset('images/carousel/web7.png') }}" alt="Image Web 7" class="carousel-image web-image">
                <img src="{{ asset('images/carousel/mobile7.png') }}" alt="Image Mobile 7" class="carousel-image mobile-image">
              </div>
              <!-- Slide 8 -->
              <div class="swiper-slide">
                <img src="{{ asset('images/carousel/web8.png') }}" alt="Image Web 8" class="carousel-image web-image">
                <img src="{{ asset('images/carousel/mobile8.png') }}" alt="Image Mobile 8" class="carousel-image mobile-image">
              </div>
              <!-- Slide 9 -->
              <div class="swiper-slide">
                <img src="{{ asset('images/carousel/web9.png') }}" alt="Image Web 9" class="carousel-image web-image">
                <img src="{{ asset('images/carousel/mobile9.png') }}" alt="Image Mobile 9" class="carousel-image mobile-image">
              </div>
            </div>
            <div class="swiper-pagination"></div>
            
          </div>
        </div>
        <style>
          /* Section fullwidth avec approche plus simple */
          .fullwidth-section {
            width: 100vw;
            margin-left: calc(-50vw + 50%);
            margin-right: calc(-50vw + 50%);
            position: relative;
            background: #fff;
            margin-bottom: 0;
          }
          
          .fullwidth-swiper { 
            width: 100%;
            height: 561px; 
            display: block;
            overflow: hidden;
          }
          
          .fullwidth-swiper .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
          }
          /* Version mobile : suppression du background-color sur tous les slides Swiper */
          @media (max-width: 768px) {
            .swiper-slide,
            .swiper-slide-next,
            .swiper-slide-prev {
              background-color: transparent !important;
            }
          }
          
          .carousel-image {
            width: 100%;
            height: 565px;
            object-fit: contain;
            object-position: center;
            display: block;
          }
          
          /* Affichage conditionnel des images selon la taille d'écran */
          .web-image {
            display: block;
            width: 100%;
            height: 561px;
            object-fit: cover;
            object-position: center;
          }
          
          .mobile-image {
            display: none;
            width: 100%;
            height: 561px;
            object-fit: cover;
            object-position: center;
          }
          
          /* Tablettes et écrans moyens */
          @media (max-width: 1024px) {
            .fullwidth-swiper { height: 430px; }
            .web-image { 
              height: 430px;
              object-fit: cover;
            }
            .mobile-image {
              height: 430px;
              object-fit: cover;
            }
          }
          
          /* Tablettes */
          @media (max-width: 768px) {
            .fullwidth-swiper { 
              height: 323px;
            }
            .web-image { 
              height: 323px;
              object-fit: cover;
            }
            .mobile-image { 
              height: 323px;
              object-fit: cover;
              object-position: center;
            }
            
            /* Basculer vers les images mobiles */
            .web-image {
              display: none;
            }
            
            .mobile-image {
              display: block;
            }
          }
          
          /* Mobiles */
          @media (max-width: 480px) {
            .fullwidth-swiper { 
              height: 269px;
            }
            .web-image { 
              height: 269px;
              object-fit: cover;
            }
            .mobile-image { 
              height: 269px;
              object-fit: cover;
            }
            
            /* Confirmer l'affichage des images mobiles */
            .web-image {
              display: none;
            }
            
            .mobile-image {
              display: block;
            }
          }
          
          /* Très petits écrans */
          @media (max-width: 360px) {
            .fullwidth-swiper { 
              height: 202px;
            }
            .web-image { 
              height: 202px;
              object-fit: cover;
            }
            .mobile-image { 
              height: 202px;
              object-fit: cover;
            }
            
            /* Confirmer l'affichage des images mobiles */
            .web-image {
              display: none;
            }
            
            .mobile-image {
              display: block;
            }
          }
          
          /* S'assurer qu'il n'y a pas de scroll horizontal */
          body {
            overflow-x: hidden;
          }
        </style>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            if (window.Swiper) {
              new Swiper('.fullwidth-swiper', {
                loop: true,
                autoplay: { delay: 4000 },
                pagination: { el: '.swiper-pagination', clickable: true },
                navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                slidesPerView: 1,
                spaceBetween: 0,
              });
            }
          });
        </script>
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
      @include('components.footer')

      <!-- Our Footer Bottom Area -->
     
      <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
    </div>
    <!-- Wrapper End -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script
      type="text/javascript"
      src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"
    ></script>
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
    <script
      type="text/javascript"
      src="{{ asset('js/jquery-scrolltofixed-min.js') }}"
    ></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pricing-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/timepicker.js') }}"></script>

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script>
      // Debug script pour le menu Explore
      $(document).ready(function() {
        console.log('Document ready - checking menu initialization on home page');
        
        // Vérifier si le menu responsive est initialisé
        if ($('#respMenu').length) {
          console.log('Menu found on home page');
          
          // Ajouter un listener spécifique pour le menu Explore
          $('#respMenu li:has(> a > span:contains("Explore"))').on('click', function(e) {
            console.log('Explore menu clicked on home page');
            
            // S'assurer que le sous-menu est visible
            const submenu = $(this).find('.sub-menu');
            if (submenu.length) {
              console.log('Sub-menu found, toggling visibility on home page');
              submenu.slideToggle();
            }
          });
          
          // Ajouter un hover handler aussi
          $('#respMenu li:has(> a > span:contains("Explore"))').on('mouseenter', function() {
            console.log('Explore menu hovered on home page');
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
          console.log('Menu not found on home page');
        }
      });
    </script>
    <!-- swiper CSS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Include your custom swiper initialization script -->
    <script src="{{ asset('js/swiper-css.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Protection globale contre les erreurs JavaScript
      window.addEventListener('error', function(e) {
        console.error('JavaScript Error intercepted:', e.error);
        console.log('Error details:', {
          message: e.message,
          filename: e.filename,
          lineno: e.lineno,
          colno: e.colno,
          stack: e.error ? e.error.stack : null
        });
        return true; // Empêche l'affichage de l'erreur dans la console du navigateur
      });

      document.addEventListener('DOMContentLoaded', () => {
        const allDropdowns = Array.from(document.querySelectorAll('.beds-baths-dropdown')) || [];
        
        console.log('Page loaded, dropdowns found:', allDropdowns.length);

        function setupDropdown(triggerId, dropdownId) {
          const trigger = document.getElementById(triggerId);
          const dropdown = document.getElementById(dropdownId);

          // Vérifier que les éléments existent
          if (!trigger || !dropdown) {
            console.warn(`Elements not found: ${triggerId} or ${dropdownId}`);
            return;
          }

          trigger.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();

            // Close other dropdowns
            if (allDropdowns && Array.isArray(allDropdowns)) {
              allDropdowns.forEach(dd => {
                if (dd) {
                  dd.style.display = (dd.id === dropdownId && dd.style.display !== 'block') ? 'block' : 'none';
                }
              });
            }
          });

          document.addEventListener('click', (e) => {
            if (dropdown && trigger && !dropdown.contains(e.target) && !trigger.contains(e.target)) {
              dropdown.style.display = 'none';
            }
          });
        }

        // Fonction fetchProperties sécurisée
        function fetchProperties() {
          try {
            console.log('=== FETCH PROPERTIES START ===');
            
            // Afficher un indicateur de chargement
            const container = document.getElementById('property-results-container');
            if (container) {
              container.innerHTML = '<div class="text-center p-4"><div class="spinner-border" role="status"><span class="sr-only">Chargement...</span></div><p>Recherche en cours...</p></div>';
              console.log('Loading indicator displayed');
            } else {
              console.error('Container property-results-container not found!');
            }
            
            // Récupérer les valeurs des filtres
            const propertyCompletionInput = document.getElementById('propertyCompletionInput');
            const bedsInput = document.getElementById('bedsInput');
            const bathsInput = document.getElementById('bathsInput');
            
            console.log('Form elements:', {
              propertyCompletionInput: propertyCompletionInput ? propertyCompletionInput.value : 'NOT FOUND',
              bedsInput: bedsInput ? bedsInput.value : 'NOT FOUND',
              bathsInput: bathsInput ? bathsInput.value : 'NOT FOUND'
            });
            
            const formData = new FormData();
            
            // Ajouter les paramètres de recherche
            if (propertyCompletionInput && propertyCompletionInput.value) {
              formData.append('property_completion', propertyCompletionInput.value);
              console.log('Added property_completion:', propertyCompletionInput.value);
            }
            
            if (bedsInput && bedsInput.value) {
              formData.append('beds', bedsInput.value);
              console.log('Added beds:', bedsInput.value);
            }
            
            if (bathsInput && bathsInput.value) {
              formData.append('baths', bathsInput.value);
              console.log('Added baths:', bathsInput.value);
            }
            
            // Vérifier le token CSRF
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            console.log('CSRF Token:', csrfToken ? 'Found' : 'NOT FOUND');
            
            console.log('Starting fetch request to /properties/search');
            
            // Effectuer la recherche
            fetch('/properties/search', {
              method: 'POST',
              body: formData,
              headers: {
                'X-CSRF-TOKEN': csrfToken || '',
                'X-Requested-With': 'XMLHttpRequest'
              }
            })
            .then(response => {
              console.log('Response received:', response.status, response.statusText);
              if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
              }
              return response.json();
            })
            .then(data => {
              console.log('=== SEARCH RESULTS ===', data);
              updatePropertyDisplay(data);
              console.log('=== FETCH PROPERTIES END ===');
            })
            .catch(error => {
              console.error('=== SEARCH ERROR ===', error);
              if (container) {
                container.innerHTML = '<div class="text-center p-4"><h4>Erreur de recherche</h4><p>' + error.message + '</p></div>';
              }
            });
            
          } catch (error) {
            console.error('=== FETCH PROPERTIES ERROR ===', error);
          }
        }
        
        // Fonction pour mettre à jour l'affichage des propriétés
        function updatePropertyDisplay(data) {
          try {
            console.log('=== UPDATE DISPLAY START ===');
            console.log('Updating property display with:', data);
            
            const container = document.getElementById('property-results-container');
            if (!container) {
              console.error('❌ Property container not found');
              return;
            }
            
            console.log('✅ Container found:', container);
            
            // Destroy existing Owl Carousel if it exists
            const $container = $(container);
            if ($container.hasClass('owl-loaded')) {
              console.log('🦉 Destroying existing Owl Carousel');
              $container.trigger('destroy.owl.carousel');
              $container.removeClass('owl-carousel owl-loaded owl-drag');
              $container.find('.owl-stage-outer').children().unwrap();
            }
            
            if (data.html) {
              // Utiliser le HTML fourni par le backend
              container.innerHTML = data.html;
              console.log('✅ HTML updated, new length:', container.innerHTML.length);
              console.log(`✅ Updated display with ${data.count} properties`);
              
              // Mettre à jour l'indicateur de résultats
              const indicator = document.getElementById('results-indicator');
              const countSpan = document.getElementById('results-count');
              if (indicator && countSpan) {
                countSpan.textContent = data.count;
                indicator.style.display = 'block';
                console.log(`📊 Results indicator updated: ${data.count} properties`);
              }
              
            } else if (data.properties) {
              // Fallback: construire le HTML manuellement
              container.innerHTML = buildPropertyHTML(data.properties);
              console.log(`Built HTML for ${data.properties.length} properties`);
            } else {
              // Aucune propriété trouvée
              container.innerHTML = '<div class="text-center p-4"><h4>Aucune propriété trouvée</h4><p>Essayez de modifier vos critères de recherche.</p></div>';
              console.log('❌ No properties found');
              
              // Mettre à jour l'indicateur de résultats
              const indicator = document.getElementById('results-indicator');
              const countSpan = document.getElementById('results-count');
              if (indicator && countSpan) {
                countSpan.textContent = '0';
                indicator.style.display = 'block';
                console.log('📊 Results indicator updated: 0 properties');
              }
            }
            
            // Reinitialize Owl Carousel
            console.log('🦉 Reinitializing Owl Carousel');
            $container.owlCarousel({
              loop: true,
              margin: 30,
              dots: true,
              nav: true, // Activer la navigation
              rtl: false,
              autoplayHoverPause: true,
              autoplay: true, // Activer le défilement automatique
              autoplayTimeout: 4000, // 4 secondes entre chaque slide
              singleItem: true,
              smartSpeed: 1200,
              navText: [
                '<i class="fas fa-arrow-left"></i>',
                '<i class="fas fa-arrow-right"></i>'
              ],
              responsive: {
                0: { items: 1, center: false },
                480: { items: 1, center: false },
                600: { items: 1, center: false },
                768: { items: 2 },
                992: { items: 2 },
                1200: { items: 2 },
                1280: { items: 3 }
              }
            });
            
            console.log('✅ Owl Carousel reinitialized');
            
            // Scroll vers la section des propriétés après le filtrage
            setTimeout(() => {
              const propertySection = document.getElementById('property-results-container');
              if (propertySection) {
                propertySection.scrollIntoView({ 
                  behavior: 'smooth', 
                  block: 'start' 
                });
                console.log('📍 Scrolled to property results section');
              }
            }, 500); // Attendre que le carousel soit complètement initialisé
            
            console.log('=== UPDATE DISPLAY END ===');
            
          } catch (error) {
            console.error('❌ Error updating display:', error);
          }
        }
        
        // Fonction pour construire le HTML des propriétés (fallback)
        function buildPropertyHTML(properties) {
          if (!properties || properties.length === 0) {
            return '<div class="text-center p-4"><h4>Aucune propriété trouvée</h4></div>';
          }
          
          let html = '';
          properties.forEach(property => {
            html += `
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="d-block w-100" 
                         src="/storage/${property.images && property.images[0] ? property.images[0].image_url : 'properties/default.jpg'}" 
                         alt="${property.property_name}"
                         onerror="this.src='/images/property/fp1.jpg'; this.onerror=null;">
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <h4>${property.property_name}</h4>
                      <p><span class="flaticon-placeholder"></span> ${property.address}</p>
                      <a class="fp_price" href="#">$${property.price} <small>/mo</small></a>
                    </div>
                  </div>
                </div>
              </div>
            `;
          });
          return html;
        }

        function attachPillHandler(selector, onClick) {
          try {
            const elements = document.querySelectorAll(selector);
            if (elements && elements.length > 0) {
              elements.forEach(pill => {
                if (pill) {
                  pill.addEventListener('click', (e) => {
                    e.preventDefault();
                    onClick(pill);
                    fetchProperties();
                  });
                }
              });
            } else {
              console.warn(`No elements found for selector: ${selector}`);
            }
          } catch (error) {
            console.error(`Error attaching pill handler for ${selector}:`, error);
          }
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
          const bedsInput = document.getElementById('bedsInput');
          if (bedsInput && pill) {
            bedsInput.value = pill.textContent.trim();
          }
        });

        // Handle bath selection
        attachPillHandler('#bathOptions .pill', (pill) => {
          const bathsInput = document.getElementById('bathsInput');
          if (bathsInput && pill) {
            bathsInput.value = pill.textContent.trim();
          }
        });

        // Handle status toggles
        const statusButtons = document.querySelectorAll('.filter-toggle-group .toggle');
        const propertyCompletionInput = document.getElementById('propertyCompletionInput');

        if (statusButtons && statusButtons.length > 0 && propertyCompletionInput) {
          statusButtons.forEach(button => {
            if (button) {
              button.addEventListener('click', (e) => {
                e.preventDefault();
                statusButtons.forEach(btn => btn && btn.classList.remove('active'));
                button.classList.add('active');
                const dataValue = button.getAttribute('data-value');
                if (dataValue) {
                  propertyCompletionInput.value = dataValue.trim();
                  fetchProperties();
                }
              });
            }
          });
        } else {
          console.warn('Status buttons or propertyCompletionInput not found');
        }

        // Fonctions utilitaires globales
        function hideDropdowns() {
          try {
            if (allDropdowns && Array.isArray(allDropdowns)) {
              allDropdowns.forEach(dd => {
                if (dd) {
                  dd.style.display = 'none';
                }
              });
            }
          } catch (error) {
            console.error('Error hiding dropdowns:', error);
          }
        }

        function resetPills() {
          try {
            const allPills = document.querySelectorAll('.pill');
            if (allPills && allPills.length > 0) {
              allPills.forEach(pill => {
                if (pill && pill.classList) {
                  pill.classList.remove('active');
                }
              });
            }
            console.log('Pills reset');
          } catch (error) {
            console.error('Error resetting pills:', error);
          }
        }

        // Expose these functions globally if needed
        window.hideDropdowns = hideDropdowns;
        window.resetPills = resetPills;
        window.fetchProperties = fetchProperties;
      });
    </script>

  </body>
</html>
