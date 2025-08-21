@extends('layouts.default')
@section('title', 'home')
@section('content')

    <div class="main">

        <!--hero section start-->
       <x-hero-equal-height 
    title="Cyber Security Solutions"
    subtitle="Protect your business from digital threats with advanced cyber security solutions designed to secure data, networks, and applications."
    :features="[
        '24/7 <strong>Threat Monitoring</strong> and Detection',
        '<strong>Advanced Firewall</strong> & Intrusion Prevention',
        '<strong>Data Encryption</strong> and Secure Backups',
        '<strong>Vulnerability</strong> Assessments & Penetration Testing',
        '<strong>Incident Response</strong> and Recovery Support',
    ]" 
    offerText="Comprehensive Security Package" 
    price="19" 
    decimal="99" 
    regularPrice="$49.99/mo"
    priceNote="Starting at just $19.99/mo" 
    buttonText="Secure Your Business" 
    buttonUrl="https://wa.me/923122114325" 
backgroundImage="img/hero-14.jpg"
    :showRightImage="false" :showPriceBox="false"
/>

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
