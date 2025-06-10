@extends('layouts.default')
@section('title', 'home')
@section('content')

    <body>

        <div class="main">
            <!--hero section start-->
            @include('components.hero')
            <!--hero section end-->

            <!--promo-section section start-->
            @include('components.promo-section', [
                'title' => 'EazyJungle Helps You Succeed',
                'subtitle' =>
                    'Grow your website faster by using EazyJungle as your foundation. Dynamically streamline principle-centered technologies.',
                'align' => 'center',
            ])
            <!--promo-section section end-->

            <!--services section start-->
            @include('components.our-services')
            <!--services section end-->

            <!--call to action section start-->
            @include('components.call-to-action', [
                'title' => 'Need Some Help?',
                'description' =>
                    'Whether you’re stuck or just want some tips on where to start, hit up our experts anytime. Sales Chat: MON-FRI 8AM-4PM PT | Customer Support Chat: Every Day 5:30AM–9:30PM PT',
            ])
            <!--call to action section end-->

            <!--pricing with switch section start-->
            @include('components.pricing')
            <!--pricing with switch section end-->

            <!--feature section start-->
            <x-feature-section :grayBg="true" />
            <!--feature section end-->

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


        <!--bottom to top button start-->
        @include('components.scroll-top')
        <!--bottom to top button end-->

    </body>

@stop
