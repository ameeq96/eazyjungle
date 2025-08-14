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
            offerText="BLOWOUT PRICES" price="3000" decimal="00" regularPrice="Rs. 5000"
            priceNote="Basic 3 Page Static Website" buttonText="Free Consultation to build a package for your online presence" buttonUrl="#"
            backgroundImage="img/hero-14.jpg" />


        <!--hero section end-->

        <!--pricing section start-->
        {{-- @include('components.pricing') --}}
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
        {{-- <x-feature-section /> --}}
        <!--feature section end-->

        <!--call to action new section start-->
        @include('components.call-to-action')
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
