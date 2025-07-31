@extends('layouts.default')
@section('title', 'home')
@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height title="Computing & Client Management"
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
