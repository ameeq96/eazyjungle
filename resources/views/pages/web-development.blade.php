@extends('layouts.default')
@section('title', 'home')
@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height title="Web Development"
            subtitle="As Always, Eazyjungle Provides Simplified Solutions for your Web Presence" :showRightImage="false" :showPriceBox="true" :features="[
                'We Work With You to Understand Your business or professional profile',
                'We will make your preliminary functional website in 24-36 hours',
                'We Provide a large collection of royalty free pre-made templates to choose from',
                'No Complex Pricing',
                'Free One Page Website for Quick Start',
                'Basic 3 Page Static Website – Rs. 3000',
                'Basic 5 Page Static Website – Rs. 4000',
                'Custom Multi-Page Dynamic Website – Starting from Rs. 20,000',
            ]"
            offerText="BLOWOUT PRICES" price="3000" decimal="00" regularPrice="Rs. 5000" priceDuration=""
            priceNote="Basic 3 Page Static Website" buttonText="Free Consultation to build a package for your online presence" buttonUrl="https://wa.me/923122114325"
            backgroundImage="img/hero-14.jpg" />


        <!--hero section end-->

        <!--pricing section start-->
        {{-- @include('components.pricing') --}}
        <!--pricing section end-->


        @include('components.promo-features')

        <!--feature section start-->
        {{-- <x-feature-section /> --}}
        <!--feature section end-->

        <!--call to action new section start-->
        @include('components.call-to-action')
        <!--call to action new section end-->

        <!--faq section start-->
        @include('components.faq')
        <!--faq section end-->

        <!--testimonial and review section start-->
        @include('components.client-review')
        <!--testimonial and review section end-->

    </div>

@stop
