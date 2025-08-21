@extends('layouts.default')
@section('title', 'home')
@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height title="Make Selling Easier with WooCommerce"
            subtitle="Web hosting made easy & choose a fine-tuned web hosting services solution for successful personal and business websites."
            :features="[
                'Flexible, Easy to Use Control Panel',
                '<strong>Unmetered</strong> Bandwidth',
                '<strong>Unmetered</strong> Sub Domains, FTP Accounts',
                '<strong>99%</strong> Uptime Guarantee',
                '<strong>45-Day</strong> Money-Back Guarantee',
            ]" offerText="Special intro offer" price="0" decimal="99" regularPrice="$7.99/mo"
            priceNote="Starting at $2.59/mo" buttonText="Get Started Now" buttonUrl="#" backgroundImage="img/hero-14.jpg" />
        <!--hero section end-->

        <!--promo-section section start-->
        @include('components.promo-section', [
            'title' => 'Why Choose Us?',
            'subtitle' =>
                'Completely expedite holistic e-markets without synergistic "outside the box" thinking. Synergistically enable.',
            'align' => 'left',
            'rowClass' => 'row justify-content-between align-items-center',
        ])
        <!--promo-section section end-->

        <!--pricing section start-->
        @include('components.pricing')
        <!--pricing section end-->

        <!--feature section tab style start-->
        <x-feature-section />
        <!--feature section tab style end-->

        <!--call to action new style start-->
        @include('components.call-to-action', [
            'title' => 'Already have a domain that you love?',
            'description' =>
                'Globally parallel task granular alignments through excellent intellectual capital. Globally deploy vertical leadership.',
        ])
        <!--call to action new style end-->

        <!--start and transfer section start-->
        @include('components.start-transfer', [
            'startUrl' => '#',
            'transferUrl' => '#',
            'startTime' => '04:00 PM',
            'transferTime' => '04:57 PM',
        ])
        <!--start and transfer section end-->

        <!--testimonial and review section start-->
        @include('components.client-review')
        <!--testimonial and review section end-->


    </div>

@stop
