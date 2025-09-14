 <!--header section start-->
 <header id="header" class="header-main">
     <!--topbar start-->
     <div id="header-top-bar" class="gray-light-bg">
         <div class="container">
             <div class="row justify-content-between">
                 <div class="col-md-7 col-lg-7">
                     <div class="topbar-text d-none d-md-block d-lg-block">
                         <ul class="list-inline">
                             <li class="list-inline-item">
                                 <a href="mailto:support@eazyjungle.pk"
                                     class="d-flex align-items-center gap-2 text-decoration-none">
                                     <span class="fas fa-envelope mr-2"></span> support@eazyjungle.pk
                                 </a>
                             </li>
                             <li class="list-inline-item">
                                 <a href="tel:+923122114325"
                                     class="d-flex align-items-center gap-2 text-decoration-none">
                                     <span class="fas fa-phone mr-2"></span> +92 312 21143252323
                                 </a>
                             </li>
                         </ul>

                     </div>
                 </div>
                 <div class="col-md-4 col-lg-4">
                     <div class="topbar-text">
                         <ul class="list-inline text-end">
                             <li class="list-inline-item">
                                 <a class="d-flex align-items-center gap-2 text-decoration-none"
                                     href="https://eazyjungle.pk/public/ezclient/index.php?fuse=home&view=login">
                                     <span class="fas fa-user mr-2"></span> Login
                                 </a>
                             </li>
                             <li class="list-inline-item">
                                 <a class="d-flex align-items-center gap-2 text-decoration-none"
                                     href="https://eazyjungle.pk/public/ezclient/index.php?fuse=home&view=register">
                                     <span class="fas fa-lock mr-2"></span> Register
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!--topbar end-->

     <!--main header menu start-->
     <div id="logoAndNav" class="main-header-menu-wrap white-bg border-bottom">
         <div class="container">
             <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                 <!--logo start-->
                 <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo-color.png ') }}"
                         width="120" alt="logo" class="img-fluid" /></a>
                 <!--logo end-->

                 <!--responsive toggle button start-->
                 <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar"
                     data-bs-toggle="collapse" data-bs-target="#navBar">
                     <span id="hamburgerTrigger">
                         <span class="fas fa-bars"></span>
                     </span>
                 </button>
                 <!--responsive toggle button end-->

                 <!--main menu start-->
                 <div id="navBar" class="collapse navbar-collapse">
                     <ul class="navbar-nav ms-auto main-navbar-nav">
                         <li class="nav-item custom-nav-item" data-position="left">
                             <a class="nav-link custom-nav-link" href="{{ url('/') }}">Home</a>
                         </li>

                         <li class="nav-item custom-nav-item" data-position="left">
                             <a class="nav-link custom-nav-link" href="{{ route('about-us') }}">About Us</a>
                         </li>
                         {{-- <li class="nav-item custom-nav-item" data-position="left">
                             <a class="nav-link custom-nav-link" href="{{ route('pricing') }}">Pricing</a>
                         </li> --}}

                         <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px"
                             data-position="right">
                             <a id="servicesMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                 href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Services</a>

                             <!-- Services Mega Menu -->
                             <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="servicesMegaMenu">
                                 <div class="row no-gutters">
                                     <div class="col-md-6">
                                         <!-- Business Model Development -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('business-development') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-project-diagram"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Business Model
                                                             Development</span>
                                                         <small class="u-header__promo-text">Plan & structure your
                                                             business ideas</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>

                                         
                                         <!-- Hosting Solutions -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('website-hosting-solutions') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-server"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Website Hosting
                                                             Solutions</span>
                                                         <small class="u-header__promo-text">Reliable and secure
                                                             hosting</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>

                                                                                  <!-- Cybersecurity Solutions -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('cyber-security-solutions') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-shield-alt"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Cyber Security
                                                             Solutions</span>
                                                         <small class="u-header__promo-text">SSL & protection
                                                             services</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                        
                                     </div>

                                     <div class="col-md-6">
                                         <!-- Domain Registration -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('domain-registration') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-globe"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Domain Registration &
                                                             Management</span>
                                                         <small class="u-header__promo-text">Secure your web
                                                             identity</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>

                                          <!-- Website Design & Optimization -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('web-development') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-laptop-code"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Website Design &
                                                             Optimization</span>
                                                         <small class="u-header__promo-text">Modern, fast, and
                                                             optimized websites</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>

                                         <!-- Client Management Systems -->
                                         {{-- <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('computing-and-client-management') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-network-wired"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Computing & Client
                                                             Management</span>
                                                         <small class="u-header__promo-text">Smart solutions for your
                                                             workflow</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div> --}}

                                         <!-- Training & Testing -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('training-and-testing-solutions') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i
                                                             class="fas fa-chalkboard-teacher"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Training & Testing
                                                             Solutions</span>
                                                         <small class="u-header__promo-text">Upskill with customized
                                                             programs</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Services Mega Menu -->
                         </li>

                         <!--hosting start-->
                         {{-- <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px"
                             data-position="right">
                             <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                 href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Hosting</a>

                             <!-- Demos - Mega Menu -->
                             <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="hostingMegaMenu">
                                 <div class="row no-gutters">
                                     <div class="col-md-6">
                                         <!--menu title with subtitle and icon item start-->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('shared-hosting') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-server"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Shared Hosting</span>
                                                         <small class="u-header__promo-text">Innovate reliable quality
                                                             Starting at <strong>$2.99</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <!--menu title with subtitle and icon item end-->
                                         <!--menu title with subtitle and icon item start-->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('vps-hosting') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-box"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">VPS Hosting <span
                                                                 class="badge bg-success ml-1">Popular</span></span>
                                                         <small class="u-header__promo-text">Pefficiently maintain
                                                             Starting at <strong>$11.99</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <!--menu title with subtitle and icon item end-->
                                         <!--menu title with subtitle and icon item start-->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('dedicated-server-hosting') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-tachometer-alt"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Dedicated Hosting</span>
                                                         <small class="u-header__promo-text">Quickly build Starting at
                                                             <strong>$150.99/mo</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <!--menu title with subtitle and icon item end-->
                                         <!--menu title with subtitle and icon item start-->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('cloud-hosting') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-cloud"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Cloud Hosting <span
                                                                 class="badge bg-danger ml-1">Hot</span></span>
                                                         <small class="u-header__promo-text">Conveniently cloud
                                                             Starting
                                                             at <strong>$5.99/mo</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <!--menu title with subtitle and icon item end-->
                                     </div>

                                     <div class="col-md-6">
                                         <!--menu title with subtitle and icon item start-->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('email-hosting') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-envelope"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Email Hosting</span>
                                                         <small class="u-header__promo-text">First Starting at
                                                             <strong>$0.99/mo
                                                                 per mailbox</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <!--menu title with subtitle and icon item end-->
                                         <!--menu title with subtitle and icon item start-->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('shared-wp-hosting') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-database"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Shared Wordpress
                                                             Hosting</span>
                                                         <small class="u-header__promo-text">Conveniently Starting at
                                                             <strong>$9.99/mo</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <!--menu title with subtitle and icon item end-->
                                         <!--menu title with subtitle and icon item start-->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('wp-hosting') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fab fa-wordpress"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Wordpress Hosting</span>
                                                         <small class="u-header__promo-text">Conveniently Starting at
                                                             <strong>$9.99/mo</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <!--menu title with subtitle and icon item end-->
                                         <!--menu title with subtitle and icon item start-->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('woocommerce-hosting') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-server"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">WooCommerce Hosting <span
                                                                 class="badge badge-primary ml-1">New</span></span>
                                                         <small class="u-header__promo-text">Globally Starting at
                                                             <strong>$9.99/mo</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <!--menu title with subtitle and icon item end-->
                                     </div>

                                 </div>
                             </div>
                             <!-- End Demos - Mega Menu -->
                         </li> --}}
                         <!--hosting end-->

                         {{-- <li class="nav-item custom-nav-item" data-position="left">
                             <a class="nav-link custom-nav-link" href="#">Blogs</a>
                         </li> --}}

                         <!--about start-->
                         {{-- <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="250px"
                             data-position="right">
                             <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                 href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">About</a>

                             <!--about submenu start-->
                             <div class="hs-mega-menu main-sub-menu" aria-labelledby="aboutMegaMenu"
                                 style="min-width: 330px;">

                                 <!--menu title with subtitle and icon item start-->
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link text-decoration-none"
                                         href="{{ route('contact-us') }}">
                                         <div class="media d-flex gap-2">
                                             <img class="menu-titile-icon" src="{{ asset('/img/chat-mobile.svg ') }}"
                                                 alt="SVG">
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">Contact Us</span>
                                                 <small class="u-header__promo-text">Face any problem contact with us
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <!--menu title with subtitle and icon item end-->

                                 <!--menu title with subtitle and icon item start-->
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link text-decoration-none"
                                         href="{{ route('about-us') }}">
                                         <div class="media d-flex gap-2">
                                             <img class="menu-titile-icon" src="{{ asset('/img/community.svg ') }}"
                                                 alt="SVG">
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">About Us</span>
                                                 <small class="u-header__promo-text">We are leading hosting company
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <!--menu title with subtitle and icon item end-->
                             </div>
                             <!--about submenu end-->
                         </li> --}}
                         <!--about end-->

                         <!--button start-->
                         <li class="nav-item header-nav-last-item d-flex align-items-center">
                             <a class="btn primary-solid-btn animated-btn" href="{{ route('contact-us') }}"
                                 target="_blank">
                                 Contact
                             </a>
                         </li>
                         <!--button end-->
                     </ul>
                 </div>
                 <!--main menu end-->
             </nav>
         </div>
     </div>
     <!--main header menu end-->
 </header><!--header section end-->
