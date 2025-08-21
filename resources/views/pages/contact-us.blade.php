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
@include('components.client-review')
          <!--testimonial and review section end-->

      </div>

  @stop
