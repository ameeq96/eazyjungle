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
            " buttonUrl="https://wa.me/923122114325"
            rightImage="img/business-model.png" backgroundImage="img/hero-14.jpg" />



        <!--hero section end-->

        @include('components.promo-features')

        <!--call to action new section start-->
        @include('components.call-to-action')
        <!--call to action new section end-->

        <!--faq section start-->
        @include('components.faq')
        <!--faq section end-->

@include('components.client-review')

    </div>

@stop
