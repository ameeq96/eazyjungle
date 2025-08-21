@extends('layouts.default')
@section('title', 'home')
@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height title="Training & Testing Solutions" :showRightImage="false" :showPriceBox="false"
            subtitle="Upskill your team with expert-led training and reliable testing solutions designed to ensure growth, performance, and measurable results."
            :features="[
                'Interactive and Flexible Training Modules',
                '<strong>Industry-Standard</strong> Testing Frameworks',
                '<strong>Customized</strong> Learning Paths',
                '<strong>Certified</strong> Trainers and Assessments',
                '<strong>100%</strong> Practical, Real-World Case Studies',
            ]" offerText="Special Training Offer" price="4" decimal="99" regularPrice="$15.99/session"
            priceNote="Starting at just $4.99/session" buttonText="Join Training Now" buttonUrl="https://wa.me/923122114325"
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
