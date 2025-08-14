@extends('layouts.default')
@section('title', 'home')
@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height title="Let Eazyjungle Experts Help Model Your Business for Sustainable Growth"
            rightText="You focus on your business and let us focus on the process to activate enablers of your business - 
        <strong>People</strong> - <strong>Products</strong> - <strong>Technology</strong> - <strong>Systems</strong>"
           :showPriceBox="false"
           :features="[
                'Strategic Planning for Startups - Define your business goals, target markets, and competitive advantages',
                'Market Analysis - Research customer needs, market trends, and competitive landscapes',
                'Financial Modeling - Develop projections, revenue models, and pricing strategies',
                'Clarify Value Proposition - Create or refine your business value framework',
                'Identify New Opportunities - Reach new customers and expand into new markets',
                [
                    'title' => 'Improve Overall Business Strategy:',
                    'points' => [
                        'For Startups: We will develop a solid foundation for your business and validate your product-market fit.',
                        'For Growth-Phase Businesses: We will help to expand their market share and improve their competitiveness.',
                        'For Established Businesses: We will help in redefining business strategy to adapt to changing market demands or to explore new business models.',
                    ],
                ],
            ]"
            buttonText="Take advantage of our free consultation - Book Today
            " buttonUrl="#"
            rightImage="img/business-model.png" backgroundImage="img/hero-14.jpg" />



        <!--hero section end-->

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
