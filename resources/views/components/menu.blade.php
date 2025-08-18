{{-- Menu principal web et mobile réutilisable --}}
<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu video-bg">
  <div class="container-fluid p0">
    <nav>
      <div class="menu-toggle">
        <img class="nav_logo_img img-fluid" src="{{ asset('images/home/hom-nb.png') }}" alt="header-logo.png" />
        <button type="button" id="menu-btn">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <a href="#" class="navbar_brand float-left dn-smd logo">
        <img src="{{ asset('images/home/web-logo.png') }}" alt="Logo HOM Blueee" class="logo-blue" style="width: 120px; height: auto; max-width: 100%" />
        <img src="{{ asset('images/home/hom-light-logo.png') }}" alt="Logo HOM Light" class="logo-light" style="width: 120px; height: auto; max-width: 100%" />
      </a>
      <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
        <li><a href="/"><span class="title">Home</span></a></li>
        <li><a href="{{ route('properties.show_listing_page_client') }}"><span class="title">Listing</span></a></li>
        <li><a href="/about"><span class="title">About</span></a></li>
        <li><a href="#"><span class="title">Explore</span></a>
          <ul class="sub-menu">
            <li><a href="/faq">Faq</a></li>
          </ul>
        </li>
        <li class="last"><a href="/contact"><span class="title">Contact</span></a></li>
      </ul>
    </nav>
  </div>
</header>

<div id="page" class="stylehome1 h0 d-lg-none">
  <div class="mobile-menu">
    <div class="header stylehome1">
      <div class="d-flex justify-content-between">
        <a class="mobile-menu-trigger" href="#menu"><img src="{{ asset('images/dark-nav-icon.svg') }}" alt="" /></a>
        <a class="nav_logo_img" href="/"><img class="img-fluid mt20" src="{{ asset('images/header-logo2.png') }}" alt="header-logo2.png" /></a>
        <a class="mobile-menu-reg-link" href="page-register.html"><span class="flaticon-user"></span></a>
      </div>
    </div>
  </div>
  <nav id="menu" class="stylehome1">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/listing_page">Listing</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="#">Explore</a>
        <ul>
          <li><a href="/faq">Faq</a></li>
        </ul>
      </li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </nav>
</div>
