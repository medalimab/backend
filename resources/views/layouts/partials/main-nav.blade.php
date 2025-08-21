<div class="main-nav">
     <!-- Sidebar Logo -->
     <div class="logo-box">
          <a href="{{ route('second', ['dashboards', 'analytics'])}}" class="logo-dark">
               <img src="{{asset('HOM_LOGO.png')}}" class="logo-sm" alt="logo sm">
               <img src="{{asset('HOM_LOGO.png')}}" class="logo-lg" alt="logo dark">
          </a>

          <a href="{{ route('second', ['dashboards', 'analytics'])}}" class="logo-light">
               <img src="{{asset('HOM_LOGO.png')}}" class="logo-sm" alt="logo sm">
               <img src="{{asset('HOM_LOGO.png')}}" class="logo-lg" alt="logo light">
          </a>
     </div>

     <!-- Menu Toggle Button (sm-hover) -->
     <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
          <i class="ri-menu-2-line fs-24 button-sm-hover-icon"></i>
     </button>

     <div class="scrollbar" data-simplebar>

          <ul class="navbar-nav" id="navbar-nav">

               <li class="menu-title">Menu</li>
<!-- 
               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                         <span class="nav-icon">
                              <i class="ri-dashboard-2-line"></i>
                         </span>
                         <span class="nav-text"> Dashboards </span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['dashboards', 'analytics'])}}">Analytics</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['dashboards', 'agents'])}}">Agent</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['dashboards', 'customer'])}}">Customer</a>
                              </li>
                         </ul>
                    </div>
               </li> -->

               

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarProperty" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProperty">
                         <span class="nav-icon">
                              <i class="ri-community-line"></i>
                         </span>
                         <span class="nav-text"> Property for Sale </span>
                    </a>
                    <div class="collapse" id="sidebarProperty">
                         <ul class="nav sub-navbar-nav">
                                   {{-- <li class="sub-nav-item">
                                        <a class="sub-nav-link" href="{{ route('second', ['property', 'grid'])}}">Property Grid</a>
                                   </li> --}}
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['property', 'list'])}}">Property List</a>
                              </li>
                              {{-- <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['property', 'details'])}}">Property Details</a>
                              </li> --}}
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['property', 'add'])}}">Add Property</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Pages Menu -->

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarAgents" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAgents">
                         <span class="nav-icon">
                              <i class="ri-group-line"></i>
                         </span>
                         <span class="nav-text"> Agents </span>
                    </a>
                    <div class="collapse" id="sidebarAgents">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('agents.index') }}">Agents List</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('agents.create') }}">Add Agent</a>
                              </li>
                         </ul>
                    </div>
               </li>
               {{--
               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarProjects" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects">
                         <span class="nav-icon">
                              <i class="ri-group-line"></i>
                         </span>
                         <span class="nav-text"> Project </span>
                    </a>
                    <div class="collapse" id="sidebarProjects">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['projects', 'grid'])}}">Project Grid</a>
                              </li>                              
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['projects', 'list'])}}">List View</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['projects', 'add'])}}">Add Project</a>
                              </li>
                         </ul>
                    </div>
               </li>
               --}}

               <!-- <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarAgents" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAgents">
                         <span class="nav-icon">
                              <i class="ri-group-line"></i>
                         </span>
                         <span class="nav-text"> Agents </span>
                    </a>
                    <div class="collapse" id="sidebarAgents">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['agents', 'grid'])}}">Grid View</a>
                              </li>                              
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['agents', 'list'])}}">List View</a>
                              </li>

                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['agents', 'details'])}}">Agent Details</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['agents', 'add'])}}">Add Agent</a>
                              </li>
                         </ul>
                    </div>
               </li>  -->
               <!-- <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCustomers">
                         <span class="nav-icon">
                              <i class="ri-contacts-book-3-line"></i>
                         </span>
                         <span class="nav-text"> Customers </span>
                    </a>
                    <div class="collapse" id="sidebarCustomers">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['customers', 'list'])}}">List View</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['customers', 'grid'])}}">Grid View</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['customers', 'details'])}}">Customer Details</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['customers', 'add'])}}">Add Customer</a>
                              </li>
                         </ul>
                    </div>
               </li> end Pages Menu -->

               <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('any', 'orders')}}">
                         <span class="nav-icon">
                              <i class="ri-home-office-line"></i>
                         </span>
                         <span class="nav-text">Orders</span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link" href="{{ route('any', 'transactions')}}">
                         <span class="nav-icon">
                              <i class="ri-arrow-left-right-line"></i>
                         </span>
                         <span class="nav-text">Transactions</span>
                    </a>
               </li> -->

               <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('any', 'reviews')}}">
                         <span class="nav-icon">
                              <i class="ri-chat-quote-line"></i>
                         </span>
                         <span class="nav-text">Reviews</span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link" href="{{ route('any', 'messages')}}">
                         <span class="nav-icon">
                              <i class="ri-discuss-line"></i>
                         </span>
                         <span class="nav-text">Messages</span>
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="{{ route('any', 'inbox')}}">
                         <span class="nav-icon">
                              <i class="ri-inbox-line"></i>
                         </span>
                         <span class="nav-text">Inbox</span>
                    </a>
               </li> -->
<!--  -->


          </ul>
     </div>
</div>
