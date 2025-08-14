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
            priceNote="Rs. 500/month or Rs. 4,500/year" buttonText="Free Consultation to build a package for your online presence" buttonUrl="#"
            backgroundImage="img/hero-14.jpg" />


        <!--hero section end-->

        <!--pricing section start-->
        @include('components.pricing')
        <!--pricing section end-->


        <!--promo-section feature section start-->
        <x-promo-features heading="Why Choose This Package"
            description="Distinctively recaptiualize principle-centered core competencies through client-centered core competencies. Enthusiastically provide access."
            :features="[
                [
                    'icon' => 'ti-thumb-up',
                    'title' => '100% Network Uptime',
                    'description' => 'Holisticly whiteboard seamless ideas rather than cross',
                ],
                [
                    'icon' => 'ti-headphone-alt',
                    'title' => '24x7 Tech Support',
                    'description' => 'Collaboratively architect sustainable e-services',
                ],
                [
                    'icon' => 'ti-lock',
                    'title' => 'DDoS Protection',
                    'description' => 'Professionally envisioneer adaptive materials schemas',
                ],
                [
                    'icon' => 'ti-user',
                    'title' => 'Trusted by Millions',
                    'description' => 'Seamlessly pontificate business best practices systems',
                ],
            ]" />

        <!--promo-section feature section end-->

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
        @include('components.client-review', [
            'title' => 'What Our Customers Say About Us?',
            'subtitle' => 'Authoritatively reinvent client-centric e-markets via fully tested process.',
            'align' => 'center',
            'sectionClass' => 'client-review-section ptb-100 gray-light-bg',
            'reviews' => [
                [
                    'name' => 'Alex Khamer',
                    'title' => 'Awesome support from technical',
                    'message' =>
                        'Objectively envisioneer magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships whereas process-centric.',
                    'time' => '6 days ago',
                ],
                [
                    'name' => 'Peter Anderson',
                    'title' => 'Awesome Design Quality with Support',
                    'message' =>
                        'Objectively envisioneer magnetic manufactured products and dynamic models maximize 2.0 relationships whereas methodologies.',
                    'time' => '3 days ago',
                ],
                [
                    'name' => 'Jolio Darix',
                    'title' => 'Contacted support after Midnight',
                    'message' =>
                        'Objectively envisioneer magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships whereas process-centric.',
                    'time' => '8 days ago',
                ],
            ],
        ])
        <!--testimonial and review section end-->

    </div>

@stop
