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
                                 <a href="tel:888-1234567"
                                     class="d-flex align-items-center gap-2 text-decoration-none"><span
                                         class="fas fa-phone mr-2"></span> 24x7 Technical
                                     Support 888-1234567</a>
                             </li>
                             <li class="list-inline-item"><a href="#"
                                     class="d-flex align-items-center gap-2 text-decoration-none"><span
                                         class="fas fa-comments mr-2"></span> Live
                                     Chat</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-md-4 col-lg-4">
                     <div class="topbar-text">
                         <ul class="list-inline text-end">
                             <li class="list-inline-item"><a
                                     class="d-flex align-items-center gap-2 text-decoration-none"
                                     href="{{ route('login') }}"><span class="fas fa-user mr-2"></span> Login</a>
                             </li>
                             <li class="list-inline-item"><a
                                     class="d-flex align-items-center gap-2 text-decoration-none"
                                     href="{{ route('signup') }}"><span class="fas fa-lock mr-2"></span> Register</a>
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

                         {{-- <li class="nav-item custom-nav-item" data-position="left">
                             <a class="nav-link custom-nav-link" href="{{ route('services') }}">Our Services</a>
                         </li> --}}
                         <li class="nav-item custom-nav-item" data-position="left">
                             <a class="nav-link custom-nav-link" href="{{ route('pricing') }}">Pricing</a>
                         </li>


                         <!--hosting start-->
                         <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px"
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
                         </li>
                         <!--hosting end-->

                         <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px"
                             data-position="right">
                             <a id="servicesMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                 href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Services</a>

                             <!-- Services Mega Menu -->
                             <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="servicesMegaMenu">
                                 <div class="row no-gutters">
                                     <div class="col-md-6">
                                         <!-- Web Development -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('web-development') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-code"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Web Development</span>
                                                         <small class="u-header__promo-text">Custom websites
                                                             to your business</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>

                                         <!-- App Development -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('app-development') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-mobile-alt"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">App Development <span
                                                                 class="badge bg-success ml-1">Popular</span></span>
                                                         <small class="u-header__promo-text">Android & iOS apps that
                                                             scale</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>

                                         <!-- UI/UX Design -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('ui-ux-design') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-pencil-ruler"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">UI/UX Design</span>
                                                         <small class="u-header__promo-text">Designs that delight and
                                                             engage users</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>

                                         <!-- SEO Services -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('seo-services') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-search-dollar"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">SEO Services</span>
                                                         <small class="u-header__promo-text">Rank higher, get more
                                                             traffic</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                     </div>

                                     <div class="col-md-6">
                                         <!-- Graphic Design -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('graphic-design') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-palette"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Graphic Design</span>
                                                         <small class="u-header__promo-text">Eye-catching visuals &
                                                             branding</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>

                                         <!-- E-Commerce Solutions -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('ecommerce-solutions') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-shopping-cart"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">E-Commerce
                                                             Solutions</span>
                                                         <small class="u-header__promo-text">Sell online with ease and
                                                             flexibility</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>

                                         <!-- Maintenance & Support -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('maintenance-support') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-tools"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Maintenance &
                                                             Support</span>
                                                         <small class="u-header__promo-text">Reliable help when you
                                                             need it</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>

                                         <!-- Custom Solutions -->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link text-decoration-none"
                                                 href="{{ route('custom-solutions') }}">
                                                 <div class="media d-flex gap-2">
                                                     <div class="menu-item-icon"><i class="fas fa-lightbulb"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Custom Solutions <span
                                                                 class="badge badge-primary ml-1">New</span></span>
                                                         <small class="u-header__promo-text">Unique builds for unique
                                                             needs</small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Services Mega Menu -->
                         </li>


                         <!--about start-->
                         <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="250px"
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
                         </li>
                         <!--about end-->

                         <!--button start-->
                         <li class="nav-item header-nav-last-item d-flex align-items-center">
                             <a class="btn primary-solid-btn animated-btn" href="{{ route('contact-us') }}"
                                 target="_blank">
                                 Get Started
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
