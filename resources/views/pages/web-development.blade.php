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
                'Basic 1 Page Static Website - Rs. 10,000',
                'Basic 3 Page Static Website - Rs. 14,000',
                'Basic 5 Page Static Website - Rs. 18,000',
                'Custom Multi-Page Dynamic Website - Starting from Rs. 25,000',
            ]"
            offerText="BLOWOUT PRICES" price="10,000" decimal="00" regularPrice="Rs. 14,000" priceDuration=""
            priceNote="Basic 3 Page Static Website" buttonText="Free Consultation to build a package for your online presence" buttonUrl="https://eazyjungle.pk/public/ezclient/order.php?step=1&productGroup=4"
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
