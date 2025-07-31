  @extends('layouts.default')
  @section('title', 'home')
  @section('content')

      <div class="main">

          <!--page header section start-->
          @include('components.page-header', [
              'title' => 'About Us',
              'subtitle' =>
                  'We are group of professionals based in Canada, USA and Pakistan.  We spent years doing research on technologies related to cyber presence, online business models, marketing structures and strategies, and cyber security. ',
              'background' => 'img/hero-14.jpg',
          ])
          <!--page header section end-->

          <!--breadcrumb bar start-->
          @include('components.breadcrumb', [
              'items' => [['label' => 'About Us']],
          ])
          <!--breadcrumb bar end-->

          <!--feature section tab style start-->
          @include('components.feature-tab')
          <!--feature section tab style end-->

          <!--network map section start-->
          {{-- @include('components.network-map') --}}
          <!--network map section end-->

          <!--call to action section start-->
          @include('components.call-to-action', [
              'title' => 'Already have a domain that you love?',
              'description' =>
                  "No problem! It's quick and painless to transfer your hosting, domain registrations, or both to EazyJungle maximize market positioning solutions and enterprise services.",
          ])
          <!--call to action section end-->

          <!--feature section start-->
          {{-- <x-feature-section :grayBg="true" /> --}}
          <!--feature section end-->

          <!--meet our team carousel style start-->
          @include('components.our-team')
          <!--meet our team carousel style end-->

          <!--testimonial and review section start-->
          @include('components.client-review', [
              'title' => 'What Our Customers Say About Us?',
              'subtitle' => 'Authoritatively reinvent client-centric e-markets via fully tested process.',
              'align' => 'center',
              'sectionClass' => 'client-review-section ptb-100 gray-light-bg',
              'reviews' => [
                  [
                      'name' => 'Alex Khamer',
                      'title' => 'Awesome support from technical',
                      'message' =>
                          'Objectively envisioneer magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships whereas process-centric.',
                      'time' => '6 days ago',
                  ],
                  [
                      'name' => 'Peter Anderson',
                      'title' => 'Awesome Design Quality with Support',
                      'message' =>
                          'Objectively envisioneer magnetic manufactured products and dynamic models maximize 2.0 relationships whereas methodologies.',
                      'time' => '3 days ago',
                  ],
                  [
                      'name' => 'Jolio Darix',
                      'title' => 'Contacted support after Midnight',
                      'message' =>
                          'Objectively envisioneer magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships whereas process-centric.',
                      'time' => '8 days ago',
                  ],
              ],
          ])

          <!--testimonial and review section end-->

      </div>

  @stop
