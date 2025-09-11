@extends('layouts.default')
@section('title', 'home')
@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height title="Eazyjungle Provides All Types of Web Hosting Solutions" :showRightImage="false"
            :showPriceBox="true"
            subtitle="Why Us: We work with you to understand your needs for web presence. We provide need-based solutions, limitless individual attention, teaching, training and support. We empower you to control your website with no complex pricing plans. Free trial available! Want a quick start? Take advantage of our Simple-One Site-One Plan-One Price featuring Free Divi Builder, Free Website Templates, and Free Softaculous App Installer."
            :features="[
                'Flexible, Easy to Use Control Panel',
                '<strong>Unmetered</strong> Bandwidth',
                '<strong>Unmetered</strong> Sub Domains, FTP Accounts',
                '<strong>99%</strong> Uptime Guarantee',
                '<strong>45-Day</strong> Money-Back Guarantee',
                'Free Divi Builder',
                'Free Website Templates',
                'Free Softaculous App Installer',
            ]" offerText="Special Intro Offer" price="500" decimal="00" regularPrice="Rs. 4,500/year"
            priceNote="Rs. 500/month or Rs. 4,500/year" buttonText="Free Consultation to build a package for your online presence" buttonUrl="https://eazyjungle.pk/public/ezclient/order.php?step=1&productGroup=1&product=1"
            backgroundImage="img/hero-14.jpg" />


        <!--hero section end-->

        <!--pricing section start-->
        @include('components.pricing')
        <!--pricing section end-->


        @include('components.promo-features')

        <!--feature section start-->
        <x-feature-section />
        <!--feature section end-->

        <!--call to action new section start-->
        @include('components.call-to-action', [
            'title' => '30-day Money-back Guarantee',
            'description' =>
                'Globally parallel task granular alignments through excellent intellectual capital. Globally deploy vertical leadership.',
        ])
        <!--call to action new section end-->

        <!--faq section start-->
        @include('components.faq')
        <!--faq section end-->

        <!--testimonial and review section start-->
        @include('components.client-review')
        <!--testimonial and review section end-->

    </div>

@stop
