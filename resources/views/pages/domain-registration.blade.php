@extends('layouts.default')
@section('title', 'home')
@section('content')

    <div class="main">


        <x-hero-equal-height title="Domain Registration & Management" :showRightImage="false" :showPriceBox="true"
            subtitle="Find cheap domain names for your website Eazyjungle brings the most competitive prices for domain names Our mission is to provide tailored solutions for your personal or business needs We will not just register a domain for you - We will set it up for you and make sure it is functional by all means Take advantage of our Hosting, Email and SSL solutions to set up your online presence all under one"
            buttonText="Choose a Domain Name"
            buttonUrl="https://eazyjungle.pk/public/ezclient/order.php?step=1&productGroup=2"
            backgroundImage="img/hero-14.jpg"
            noteText="Prices in PAK RS will be converted to equivalent CAD and processed through our head office in Canada. Contact us for payment arrangement in PAK RS." />



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
