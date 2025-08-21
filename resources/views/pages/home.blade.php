@extends('layouts.default')
@section('title', 'home')
@section('content')

    <body>

        <div class="main">
            <!--hero section start-->
            @include('components.hero')
            <!--hero section end-->

            <!--promo-section section start-->
            {{-- @include('components.promo-section', [
                'title' => 'EazyJungle Helps You Succeed',
                'subtitle' =>
                    'Grow your website faster by using EazyJungle as your foundation. Dynamically streamline principle-centered technologies.',
                'align' => 'center',
            ]) --}}
            <!--promo-section section end-->

            <!--services section start-->
            @include('components.our-services')
            <!--services section end-->

            <!--call to action section start-->
            @include('components.call-to-action')
            <!--call to action section end-->

            <!--pricing with switch section start-->
            {{-- @include('components.pricing') --}}
            <!--pricing with switch section end-->

            <!--feature section start-->
            {{-- <x-feature-section :grayBg="true" /> --}}
            <!--feature section end-->

            <!--faq section start-->
            @include('components.faq')
            <!--faq section end-->

            <!--testimonial and review section start-->
          @include('components.client-review')

            <!--testimonial and review section end-->

        </div>


        <!--bottom to top button start-->
        @include('components.scroll-top')
        <!--bottom to top button end-->

    </body>

@stop
