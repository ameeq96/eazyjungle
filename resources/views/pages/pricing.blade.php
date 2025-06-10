 @extends('layouts.default')
 @section('title', 'home')
 @section('content')

     @php
         $title = 'Our Pricing Package Comparison';
         $subtitle =
             'Globally incubate next-generation e-services via state of the art technology. Appropriately iterate quality.';

         $plans = [
             [
                 'name' => 'Cloud Starter',
                 'description' => 'For Small Business',
                 'price' => '$4.5',
             ],
             [
                 'name' => 'Cloud Business',
                 'description' => 'For Medium Business',
                 'price' => '$10.99',
                 'badge' => [
                     'text' => 'Popular',
                     'class' => 'color-1 color-1-bg',
                 ],
             ],
             [
                 'name' => 'Cloud Enterprise',
                 'description' => 'For Large Business',
                 'price' => '$15.99',
             ],
         ];

         $features = [
             ['title' => 'Number of Websites', 'values' => ['1', '5', 'Unlimited']],
             ['title' => 'Bandwidth', 'values' => ['2GB', '5GB', 'Unlimited']],
             ['title' => 'Email Accounts', 'values' => ['Available for Purchase', 'Included', 'Included']],
             ['title' => 'Storage', 'values' => ['30GB', '50GB', 'Unlimited']],
             ['title' => 'Subdomains', 'values' => ['5', '10', 'Unlimited']],
             ['title' => 'FTP/SFTP/Shell Users', 'values' => ['5', '10', 'Unlimited']],
             ['title' => 'MySQL Databases', 'values' => ['6', '15', 'Unlimited']],
             [
                 'title' => 'SSD Storage',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Automated Daily Backups',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => '24/7 Ticket Support',
                 'values' => [
                     '<span class="ti-close text-danger"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Live Chat Support',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Money-back Guarantee',
                 'values' => [
                     '<span class="ti-close text-danger"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
         ];
     @endphp

     @php
         $title2 = 'Web Hosting Packages';
         $subtitle2 =
             'Globally incubate next-generation e-services via state of the art technology. Appropriately iterate quality.';

         $plans2 = [
             [
                 'name' => 'Basic Plan',
                 'description' => 'For Small Business',
                 'price' => '$2.75',
                 'badge' => null,
             ],
             [
                 'name' => 'Baby Plan',
                 'description' => 'For Medium Business',
                 'price' => '$3.95',
                 'badge' => [
                     'text' => 'Popular',
                     'class' => 'color-1 color-1-bg',
                 ],
             ],
             [
                 'name' => 'Business Plan',
                 'description' => 'For Large Business',
                 'price' => '$5.95',
                 'badge' => null,
             ],
         ];

         $features2 = [
             [
                 'title' => 'Price',
                 'values' => ['$2.75 <span>/month</span>', '$3.95 <span>/month</span>', '$5.95 <span>/month</span>'],
                 'is_price' => true,
                 'btn' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
             [
                 'title' => 'Disk Space',
                 'values' => ['Unmetered', 'Unmetered', 'Unmetered'],
             ],
             [
                 'title' => 'Bandwidth',
                 'values' => ['Unmetered', 'Unmetered', 'Unmetered'],
             ],
             [
                 'title' => 'Domains Allowed',
                 'values' => ['1 Domain', 'Unmetered', 'Unmetered'],
             ],
             [
                 'title' => 'Free SSL',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Free Dedicated IP',
                 'values' => [
                     '<span class="ti-close text-danger"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Free Positive SSL Upgrade',
                 'values' => [
                     '<span class="ti-close text-danger"></span>',
                     '<span class="ti-close text-danger"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
         ];
     @endphp

     @php
         $title3 = 'Packages Details';
         $subtitle3 =
             'Globally incubate next-generation e-services via state of the art technology. Appropriately iterate quality.';

         $plans3 = [
             [
                 'name' => 'Basic Plan',
                 'description' => 'For Small Business',
                 'price' => '$2.5',
                 'badge' => null,
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
             [
                 'name' => 'Baby Plan',
                 'description' => 'For Medium Business',
                 'price' => '$3.99',
                 'badge' => [
                     'text' => 'Popular',
                     'class' => 'color-1 color-1-bg',
                 ],
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
             [
                 'name' => 'Business Plan',
                 'description' => 'For Large Business',
                 'price' => '$5.99',
                 'badge' => null,
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
         ];

         $features3 = [
             [
                 'title' => 'Price',
                 'values' => ['$2.5 <span>/month</span>', '$3.99 <span>/month</span>', '$5.99 <span>/month</span>'],
                 'is_price' => true,
             ],
             [
                 'title' => '24/7/365 Support',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Instant Backups',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'No Contract',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => '99.9% Uptime guarantee',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Google Adwords',
                 'values' => ['$50 Credit', '$75 Credit', '$100 Credit'],
             ],
             [
                 'title' => 'Bing',
                 'values' => ['$50 Credit', '$75 Credit', '$100 Credit'],
             ],
             [
                 'title' => 'Free/Instant Setup',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
         ];
     @endphp

     @php
         $title4 = 'Email Hosting';
         $subtitle4 =
             'Globally incubate next-generation e-services via state of the art technology. Appropriately iterate quality.';

         $plans4 = [
             [
                 'name' => 'Basic Plan',
                 'description' => 'For Small Business',
                 'price' => '$2.5',
                 'badge' => null,
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
             [
                 'name' => 'Baby Plan',
                 'description' => 'For Medium Business',
                 'price' => '$3.99',
                 'badge' => [
                     'text' => 'Popular',
                     'class' => 'color-1 color-1-bg',
                 ],
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
             [
                 'name' => 'Business Plan',
                 'description' => 'For Large Business',
                 'price' => '$5.99',
                 'badge' => null,
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
         ];

         $features4 = [
             [
                 'title' => 'Price',
                 'values' => ['$2.5 <span>/month</span>', '$3.99 <span>/month</span>', '$5.99 <span>/month</span>'],
                 'is_price' => true,
             ],
             [
                 'title' => 'POP3 Accounts',
                 'values' => ['Unlimited', 'Unlimited', 'Unlimited'],
             ],
             [
                 'title' => 'Web Mail',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Email Alias',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Auto Responders',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Mailing Lists',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Spam Assassin',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Mail Forwarding',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'SMTP',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
         ];
     @endphp

     @php
         $title5 = 'Domain/FTP Features';
         $subtitle5 =
             'Globally incubate next-generation e-services via state of the art technology. Appropriately iterate quality.';

         $plans5 = [
             [
                 'name' => 'Basic Plan',
                 'description' => 'For Small Business',
                 'price' => '$2.75',
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
             [
                 'name' => 'Baby Plan',
                 'description' => 'For Medium Business',
                 'price' => '$3.95',
                 'badge' => [
                     'text' => 'Popular',
                     'class' => 'color-1 color-1-bg',
                 ],
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
             [
                 'name' => 'Business Plan',
                 'description' => 'For Large Business',
                 'price' => '$5.95',
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
         ];

         $features5 = [
             [
                 'title' => 'Price',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
                 'is_price' => true,
             ],
             [
                 'title' => 'Subdomains',
                 'values' => ['Unmetered', 'Unmetered', 'Unmetered'],
             ],
             [
                 'title' => 'FTP Accounts',
                 'values' => ['Unmetered', 'Unmetered', 'Unmetered'],
             ],
             [
                 'title' => 'Addon/Parked Domains',
                 'values' => ['<span class="ti-close text-danger"></span>', 'Unmetered', 'Unmetered'],
             ],
             [
                 'title' => 'Anonymous FTP',
                 'values' => [
                     '<span class="ti-close text-danger"></span>',
                     '<span class="ti-close text-danger"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
         ];
     @endphp

     @php
         $title6 = 'Website/FTP Features';
         $subtitle6 =
             'Globally incubate next-generation e-services via state of the art technology. Appropriately iterate quality.';

         $plans6 = [
             [
                 'name' => 'Basic Plan',
                 'description' => 'For Small Business',
                 'price' => '$2.5',
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
             [
                 'name' => 'Baby Plan',
                 'description' => 'For Medium Business',
                 'badge' => [
                     'text' => 'Popular',
                     'class' => 'color-1 color-1-bg',
                 ],
                 'price' => '$3.99',
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
             [
                 'name' => 'Business Plan',
                 'description' => 'For Large Business',
                 'price' => '$5.99',
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
         ];

         $features6 = [
             [
                 'title' => 'Price',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
                 'is_price' => true,
             ],
             [
                 'title' => 'AWStats (Real Time Updates)',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Webalizer',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Raw Logs',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Referrer Logs',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Error Logs',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
         ];
     @endphp

     @php
         $title7 = 'E-Commerce Features';
         $subtitle7 =
             'Globally incubate next-generation e-services via state of the art technology. Appropriately iterate quality.';

         $plans7 = [
             [
                 'name' => 'Basic Plan',
                 'description' => 'For Small Business',
                 'price' => '$2.5',
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
             [
                 'name' => 'Baby Plan',
                 'description' => 'For Medium Business',
                 'badge' => [
                     'text' => 'Popular',
                     'class' => 'color-1 color-1-bg',
                 ],
                 'price' => '$3.99',
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
             [
                 'name' => 'Business Plan',
                 'description' => 'For Large Business',
                 'price' => '$5.99',
                 'button' => '<a href="#" class="btn primary-solid-btn mt-2">Get Started</a>',
             ],
         ];

         $features7 = [
             [
                 'title' => 'Price',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
                 'is_price' => true,
             ],
             [
                 'title' => 'osCommerce',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'ZenCart',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Private SSL Allowed',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
             [
                 'title' => 'Dedicated IP',
                 'values' => [
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                     '<span class="ti-check color-primary"></span>',
                 ],
             ],
         ];
     @endphp

     <div class="main">
         <!--page header section start-->
         @include('components.page-header', [
             'title' => 'Pricing',
             'subtitle' =>
                 'Compellingly matrix cross-platform "outside the box" thinking after equity invested testing procedures. Optimize scalable quality vectors with highly efficient.',
             'background' => 'img/hero-14.jpg',
         ])
         <!--page header section end-->

         <!--breadcrumb bar start-->
         @include('components.breadcrumb', [
             'items' => [['label' => 'Pricing']],
         ])
         <!--breadcrumb bar end-->

         <!--compare pricing table start-->
         <x-pricing-table :title="$title" :subtitle="$subtitle" :plans="$plans" :features="$features" />
         <!--compare pricing table end-->

         <!--compare pricing table start-->
         <x-pricing-table :title="$title2" :subtitle="$subtitle2" :plans="$plans2" :features="$features2" :grayBg="true" />
         <!--compare pricing table end-->

         <!--compare pricing table start-->
         <x-pricing-table :title="$title3" :subtitle="$subtitle3" :plans="$plans3" :features="$features3" />
         <!--compare pricing table end-->

         <!--compare pricing table start-->
         <x-pricing-table :title="$title4" :subtitle="$subtitle4" :plans="$plans4" :features="$features4" :grayBg="true" />
         <!--compare pricing table end-->

         <!--compare pricing table start-->
         <x-pricing-table :title="$title5" :subtitle="$subtitle5" :plans="$plans5" :features="$features5" />
         <!--compare pricing table end-->

         <!--compare pricing table start-->
         <x-pricing-table :title="$title6" :subtitle="$subtitle6" :plans="$plans6" :features="$features6" :grayBg="true" />
         <!--compare pricing table end-->

         <!--compare pricing table start-->
         <x-pricing-table :title="$title7" :subtitle="$subtitle7" :plans="$plans7" :features="$features7" />
         <!--compare pricing table end-->

         <!--faq new style start-->
         @include('components.faq')
         <!--faq new style end-->

         <!--call to action section start-->
         @include('components.call-to-action', [
             'title' => 'Already have a domain dont worry you can keep it.',
             'description' =>
                 "No problem! It's quick and painless to transfer your hosting, domain registrations, or both to EazyJungle.",
         ])
         <!--call to action section end-->

     </div>

 @stop
