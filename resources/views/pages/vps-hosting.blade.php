@extends('layouts.default')
@section('title', 'home')
@section('content')

    @php
        $plans = [
            [
                'vcpu' => '1 vCPU',
                'memory' => '2GB',
                'cpu_ghz' => '2.4GHz',
                'cpu_cores' => '1 core',
                'storage' => '20GB',
                'score' => 3513,
                'score_percent' => 30,
                'bandwidth' => '1000GB',
                'price' => '$3.95',
                'discount' => 'Save 30%',
                'badge_class' => 'bg-primary',
                'theme' => 'theme-primary',
            ],
            [
                'vcpu' => '2 vCPU',
                'memory' => '4GB',
                'cpu_ghz' => '4.8GHz',
                'cpu_cores' => '2 cores',
                'storage' => '40GB',
                'score' => 5363,
                'score_percent' => 40,
                'bandwidth' => '2000GB',
                'price' => '$8.95',
                'discount' => 'Save 50%',
                'badge_class' => 'bg-danger',
                'theme' => 'theme-primary',
            ],
            [
                'vcpu' => '3 vCPU',
                'memory' => '6GB',
                'cpu_ghz' => '7.2GHz',
                'cpu_cores' => '3 cores',
                'storage' => '60GB',
                'score' => 7545,
                'score_percent' => 60,
                'bandwidth' => '3000GB',
                'price' => '$12.95',
                'discount' => 'Save 10%',
                'badge_class' => 'bg-info',
                'theme' => 'theme-primary',
            ],
            [
                'vcpu' => '4 vCPU',
                'memory' => '8GB',
                'cpu_ghz' => '9.6GHz',
                'cpu_cores' => '4 cores',
                'storage' => '80GB',
                'score' => 8953,
                'score_percent' => 75,
                'bandwidth' => '4000GB',
                'price' => '$15.95',
                'discount' => 'Save 30%',
                'badge_class' => 'bg-primary',
                'theme' => 'theme-primary',
            ],
            [
                'vcpu' => '6 vCPU',
                'memory' => '12GB',
                'cpu_ghz' => '14.4GHz',
                'cpu_cores' => '6 cores',
                'storage' => '120GB',
                'score' => 10789,
                'score_percent' => 85,
                'bandwidth' => '6000GB',
                'price' => '$23.95',
                'discount' => 'Save 40%',
                'badge_class' => 'bg-success',
                'theme' => 'theme-primary',
            ],
            [
                'vcpu' => '8 vCPU',
                'memory' => '16GB',
                'cpu_ghz' => '19.2GHz',
                'cpu_cores' => '8 cores',
                'storage' => '160GB',
                'score' => 12632,
                'score_percent' => 100,
                'bandwidth' => '8000GB',
                'price' => '$29.95',
                'discount' => 'Save 10%',
                'badge_class' => 'bg-info',
                'theme' => 'theme-primary',
            ],
        ];

    @endphp

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height title="VPS Hosting"
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

        <!--vps hosting pricing plane start-->
        <x-vps-pricing-table :plans="$plans" title="VPS Hosting Plans"
            subtitle="Choose the plan that best fits your needs." :payment-methods="[
                ['image' => 'img/payment-amex.svg', 'alt' => 'amex'],
                ['image' => 'img/payment-visa.svg', 'alt' => 'visa'],
                ['image' => 'img/payment-mastercard.svg', 'alt' => 'mastercard'],
                ['image' => 'img/payment-paypal.svg', 'alt' => 'paypal'],
                ['image' => 'img/payment-bitcoin.svg', 'alt' => 'bitcoin'],
            ]" />

        <!--vps hosting pricing plane end-->

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
