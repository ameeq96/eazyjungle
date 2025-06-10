  @extends('layouts.default')
  @section('title', 'home')
  @section('content')

      <div class="main">

          <!--page header section start-->
          @include('components.page-header', [
              'title' => 'Services',
              'subtitle' =>
                  'Credibly transform low-risk high-yield strategic theme areas through market positioning interfaces. Rapidiously synthesize cutting-edge bandwidth.',
              'background' => 'img/hero-bg-3.jpg',
          ])
          <!--page header section end-->

          <!--breadcrumb bar start-->
          @include('components.breadcrumb', [
              'items' => [['label' => 'Services']],
          ])
          <!--breadcrumb bar end-->

          <!--why choose us section start-->
          @include('components.promo-section', [
              'title' => 'Why Choose Us?',
              'subtitle' =>
                  'Completely expedite holistic e-markets without synergistic "outside the box" thinking. Synergistically enable.',
              'align' => 'left',
              'rowClass' => 'row justify-content-between align-items-center',
          ])
          <!--why choose us section end-->

          <!--services section start-->
          @include('components.our-services')
          <!--services section end-->

          <!--call to action section start-->
          @include('components.call-to-action', [
              'title' => 'Already have a domain that you love?',
              'description' =>
                  "No problem! It's quick and painless to transfer your hosting, domain registrations, or both to EazyJungle maximize market positioning solutions and enterprise services.",
          ])
          <!--call to action section end-->

          <!--feature section start-->
          @include('components.our-services')
          <!--feature section end-->

          <!--testimonial and review section start-->
          @include('components.client-review', [
              'title' => 'What Our Customers Say About Us?',
              'subtitle' => 'Authoritatively reinvent client-centric e-markets via fully tested process.',
              'align' => 'center',
              'sectionClass' => 'client-review-section ptb-100',
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
