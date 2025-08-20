<header class="">
     <div class="topbar">
     <div class="container-fluid">
          <div class="navbar-header">
               <div class="d-flex align-items-center gap-2">
                    <!-- Menu Toggle Button -->
                    <div class="topbar-item">
                         <button type="button" class="button-toggle-menu topbar-button">
                              <i class="ri-menu-2-line fs-24"></i>
                         </button>
                    </div>

                    <!-- App Search-->
                    <form class="app-search d-none d-md-block me-auto">
                         <div class="position-relative">
                              <input type="search" class="form-control border-0" placeholder="Search..." autocomplete="off" value="">
                              <i class="ri-search-line search-widget-icon"></i>
                         </div>
                    </form>
               </div>

               <div class="d-flex align-items-center gap-1">
                    <!-- Theme Color (Light/Dark) -->
                    <div class="topbar-item">
                         <button type="button" class="topbar-button" id="light-dark-mode">
                              <i class="ri-moon-line fs-24 light-mode"></i>
                              <i class="ri-sun-line fs-24 dark-mode"></i>
                         </button>
                    </div>

                    <!-- Category -->
                    <div class="dropdown topbar-item d-none d-lg-flex">
                         <button type="button" class="topbar-button" data-toggle="fullscreen">
                              <i class="ri-fullscreen-line fs-24 fullscreen"></i>
                              <i class="ri-fullscreen-exit-line fs-24 quit-fullscreen"></i>
                         </button>
                    </div>

                    

                   

                    <!-- User -->
                    @auth
                    <div class="dropdown topbar-item">
                         <a type="button" class="topbar-button" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="d-flex align-items-center">
                                   <img class="rounded-circle" width="32" src="/images/users/avatar-1.jpg" alt="avatar-3">
                              </span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end">
                              <!-- item-->
                              <h6 class="dropdown-header">Welcome {{ Auth::user()->name }} !</h6>

                              <!-- <a class="dropdown-item" href="{{ route('second', ['pages', 'calendar'])}}">
                                   <iconify-icon icon="solar:calendar-broken" class="align-middle me-2 fs-18"></iconify-icon><span class="align-middle">My Schedules</span>
                              </a>

                              <a class="dropdown-item" href="{{ route('second', ['pages', 'pricing'])}}">
                                   <iconify-icon icon="solar:wallet-broken" class="align-middle me-2 fs-18"></iconify-icon><span class="align-middle">Pricing</span>
                              </a>
                              <a class="dropdown-item" href="{{ route('second', ['pages', 'faqs'])}}">
                                   <iconify-icon icon="solar:help-broken" class="align-middle me-2 fs-18"></iconify-icon><span class="align-middle">Help</span>
                              </a>
                              <a class="dropdown-item" href="{{ route('second', ['pages', 'lock-screen'])}}">
                                   <iconify-icon icon="solar:lock-keyhole-broken" class="align-middle me-2 fs-18"></iconify-icon><span class="align-middle">Lock screen</span>
                              </a> -->

                              <div class="dropdown-divider my-1"></div>

                              <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                   @csrf
                                   <a href="#" class="dropdown-item text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                       <iconify-icon icon="solar:logout-3-broken" class="align-middle me-2 fs-18"></iconify-icon>
                                       <span class="align-middle">Logout</span>
                                   </a>
                               </form>
                         </div>
                    </div>
                    @else
                    <div class="topbar-item">
                         <a href="{{ route('login') }}" class="topbar-button">
                              <iconify-icon icon="solar:login-3-broken" class="align-middle me-1 fs-18"></iconify-icon>
                              <span class="align-middle">Login</span>
                         </a>
                    </div>
                    @endauth
               </div>
          </div>
     </div></div>
</header>
