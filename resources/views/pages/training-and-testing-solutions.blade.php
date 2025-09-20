@extends('layouts.default')

{{-- === SEO meta for Training & Testing Solutions === --}}
@section('title', 'Training And Testing Solutions')
@section('meta_description', 'Upskill your team with expert-led training and reliable testing solutions designed to ensure growth, performance, and measurable results.')
@section('canonical', url('/training-testing-solutions')) {{-- apne actual slug ke mutabiq update kar sakte hain --}}
@section('og_type', 'website')
@section('og_image', asset('img/og/training-testing-solutions.jpg')) {{-- fallback: img/og/default.jpg --}}

@push('structured_data')
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"Service",
  "name":"Training & Testing Solutions",
  "serviceType":"Corporate Training & Testing",
  "description":"Interactive training modules, industry-standard testing frameworks, customized learning paths, certified trainers and real-world case studies.",
  "provider":{
    "@type":"Organization",
    "name":"{{ config('app.name', 'EazyJungle') }}",
    "url":"{{ config('app.url', url('/')) }}",
    "logo":"{{ asset('img/logo.png') }}"
  },
  "areaServed":["PK","CA"],
  "offers":{
    "@type":"Offer",
    "url":"{{ url('/training-testing-solutions') }}",
    "price":"4.99",
    "priceCurrency":"USD",
    "priceSpecification":{
      "@type":"UnitPriceSpecification",
      "price":"4.99",
      "priceCurrency":"USD",
      "unitText":"session"
    },
    "availability":"https://schema.org/InStock"
  }
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"BreadcrumbList",
  "itemListElement":[
    {"@type":"ListItem","position":1,"name":"Home","item":"{{ url('/') }}"},
    {"@type":"ListItem","position":2,"name":"Training & Testing Solutions","item":"{{ url('/training-testing-solutions') }}"}
  ]
}
</script>
@endpush
{{-- === /SEO meta === --}}

@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height
            title="Training & Testing Solutions"
            :showRightImage="false"
            :showPriceBox="false"
            subtitle="Upskill your team with expert-led training and reliable testing solutions designed to ensure growth, performance, and measurable results."
            :features="[
                'Interactive and Flexible Training Modules',
                '<strong>Industry-Standard</strong> Testing Frameworks',
                '<strong>Customized</strong> Learning Paths',
                '<strong>Certified</strong> Trainers and Assessments',
                '<strong>100%</strong> Practical, Real-World Case Studies',
            ]"
            offerText="Special Training Offer"
            price="4" decimal="99"
            regularPrice="$15.99/session"
            priceNote="Starting at just $4.99/session"
            buttonText="Join Training Now"
            buttonUrl="https://wa.me/923122114325"
            backgroundImage="img/hero-14.jpg"
        />
        <!--hero section end-->

        <!--pricing section start-->
        {{-- @include('components.pricing') --}}
        <!--pricing section end-->

        @include('components.promo-features')

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
        @include('components.client-review')
        <!--testimonial and review section end-->

    </div>

@stop
