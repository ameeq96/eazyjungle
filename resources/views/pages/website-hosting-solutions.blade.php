@extends('layouts.default')

{{-- === SEO meta for Web Hosting Solutions === --}}
@section('title', 'Web Hosting Solutions')
@section('meta_description', 'Why Us: We work with you to understand your needs for web presence. We provide need-based solutions, limitless individual attention, teaching, training and support.')
@section('canonical', url('/web-hosting-solutions'))
@section('og_type', 'website')
@section('og_image', asset('img/og/web-hosting-solutions.jpg'))

@push('structured_data')
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"Service",
  "name":"Web Hosting Solutions",
  "serviceType":"Web Hosting",
  "description":"Flexible, easy-to-use control panel with unmetered bandwidth, 99% uptime, 45-day money-back guarantee, and freebies like Divi Builder, templates and Softaculous.",
  "provider":{
    "@type":"Organization",
    "name":"{{ config('app.name', 'EazyJungle') }}",
    "url":"{{ config('app.url', url('/')) }}",
    "logo":"{{ asset('img/logo.png') }}"
  },
  "areaServed":["PK","CA"],
  "offers":{
    "@type":"AggregateOffer",
    "url":"{{ url('/web-hosting-solutions') }}",
    "priceCurrency":"PKR",
    "lowPrice":"500",
    "highPrice":"4500",
    "offerCount":"2",
    "offers":[
      {
        "@type":"Offer",
        "name":"Monthly Plan",
        "price":"500",
        "priceCurrency":"PKR",
        "url":"https://eazyjungle.pk/public/ezclient/order.php?step=1&productGroup=1&product=1",
        "availability":"https://schema.org/InStock"
      },
      {
        "@type":"Offer",
        "name":"Yearly Plan",
        "price":"4500",
        "priceCurrency":"PKR",
        "url":"https://eazyjungle.pk/public/ezclient/order.php?step=1&productGroup=1&product=1",
        "availability":"https://schema.org/InStock"
      }
    ]
  }
}
</script>

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"BreadcrumbList",
  "itemListElement":[
    {"@type":"ListItem","position":1,"name":"Home","item":"{{ url('/') }}"},
    {"@type":"ListItem","position":2,"name":"Web Hosting Solutions","item":"{{ url('/web-hosting-solutions') }}"}
  ]
}
</script>
@endpush
{{-- === /SEO meta === --}}

@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height 
            title="Eazyjungle Provides All Types of Web Hosting Solutions"
            :showRightImage="false"
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
            ]"
            offerText="Special Intro Offer"
            price="500" 
            decimal="00" 
            regularPrice="Rs. 4,500/year"
            priceNote="Rs. 500/month or Rs. 4,500/year"
            buttonText="Free Consultation to build a package"
            buttonUrl="https://wa.me/923122114325"
            backgroundImage="img/hero-14.jpg"
            showSecondButton="true"
            secondButtonText="Buy Now"
            secondButtonUrl="https://eazyjungle.pk/public/ezclient/order.php?step=1&productGroup=1&product=1"
            noteText="Prices in PAK RS will be converted to equivalent CAD and processed through our head office in Canada. Contact us for payment arrangement in PAK RS."
        />
        <!--hero section end-->

        <!--pricing section start-->
        {{-- @include('components.pricing') --}}
        <!--pricing section end-->

        {{-- @include('components.promo-features') --}}

        <!--feature section start-->
        <x-feature-section />
        <!--feature section end-->

        <!--call to action new section start-->
        @include('components.call-to-action', [
            'title' => '30-day Money-back Guarantee',
            'description' => 'Globally parallel task granular alignments through excellent intellectual capital. Globally deploy vertical leadership.',
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
