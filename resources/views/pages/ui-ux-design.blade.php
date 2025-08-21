@extends('layouts.default')
@section('title', 'home')
@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height title="UI/UX Design"
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
