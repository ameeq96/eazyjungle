  @extends('layouts.default')
  @section('title', 'home')
  @section('content')

      <div class="main">

          <!--page header section start-->
          @include('components.page-header', [
              'title' => 'Contact Us',
              'subtitle' => 'Enthusiastically provide access to multidisciplinary communities and reliable quality vectors. Globally administrate robust.',
              'background' => 'img/hero-14.jpg',
          ])
          <!--page header section end-->

          <!--breadcrumb bar start-->
          @include('components.breadcrumb', [
              'items' => [['label' => 'Contact Us']],
          ])
          <!--breadcrumb bar end-->


          <!--contact us promo-section start-->
          <!--contact us promo-section start-->
          @include('components.contact-promo')
          <!--contact us promo-section end--> <!--contact us promo-section end-->

          <!--contact us section start-->
          @include('components.contact')
          <!--contact us section end-->

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
