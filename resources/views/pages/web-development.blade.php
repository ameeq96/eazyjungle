@extends('layouts.default')

{{-- === SEO meta for Web Development === --}}
@section('title', 'Web Development Services')
@section('meta_description', 'As Always, Eazyjungle Provides Simplified Solutions for your Web Presence.')
@section('canonical', url('/web-development')) {{-- apne actual slug ke mutabiq update kar sakte hain --}}
@section('og_type', 'website')
@section('og_image', asset('img/og/web-development.jpg')) {{-- fallback: img/og/default.jpg --}}

@push('structured_data')
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"Service",
  "name":"Web Development",
  "serviceType":"Website Design & Development",
  "description":"We understand your business profile and deliver a functional website in 24–36 hours. Choose from royalty-free templates or go custom.",
  "provider":{
    "@type":"Organization",
    "name":"{{ config('app.name', 'EazyJungle') }}",
    "url":"{{ config('app.url', url('/')) }}",
    "logo":"{{ asset('img/logo.png') }}"
  },
  "areaServed":["PK","CA"],
  "offers":{
    "@type":"AggregateOffer",
    "url":"{{ url('/web-development') }}",
    "priceCurrency":"PKR",
    "lowPrice":"10000",
    "highPrice":"25000",
    "offerCount":"4",
    "offers":[
      { "@type":"Offer", "name":"Basic 1 Page Static Website", "price":"10000", "priceCurrency":"PKR", "availability":"https://schema.org/InStock" },
      { "@type":"Offer", "name":"Basic 3 Page Static Website", "price":"14000", "priceCurrency":"PKR", "availability":"https://schema.org/InStock" },
      { "@type":"Offer", "name":"Basic 5 Page Static Website", "price":"18000", "priceCurrency":"PKR", "availability":"https://schema.org/InStock" },
      { "@type":"Offer", "name":"Custom Multi-Page Dynamic Website (from)", "price":"25000", "priceCurrency":"PKR", "availability":"https://schema.org/PreOrder" }
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
    {"@type":"ListItem","position":2,"name":"Web Development","item":"{{ url('/web-development') }}"}
  ]
}
</script>
@endpush
{{-- === /SEO meta === --}}

@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height
            title="Web Development"
            subtitle="As Always, Eazyjungle Provides Simplified Solutions for your Web Presence"
            :showRightImage="false"
            :showPriceBox="true"
            :features="[
                'We Work With You to Understand Your business or professional profile',
                'We will make your preliminary functional website in 24-36 hours',
                'We Provide a large collection of royalty free pre-made templates to choose from',
                'No Complex Pricing',
                'Basic 1 Page Static Website - Rs. 10,000',
                'Basic 3 Page Static Website - Rs. 14,000',
                'Basic 5 Page Static Website - Rs. 18,000',
                'Custom Multi-Page Dynamic Website - Starting from Rs. 25,000',
            ]"
            offerText="BLOWOUT PRICES"
            price="10,000" decimal="00"
            regularPrice="Rs. 14,000" priceDuration=""
            priceNote="Basic 3 Page Static Website"
            buttonText="Free Consultation to build a package"
            buttonUrl="https://wa.me/923122114325"
            backgroundImage="img/hero-14.jpg"
            showSecondButton="true"
            secondButtonText="Buy Now"
            secondButtonUrl="https://eazyjungle.pk/public/ezclient/order.php?step=1&productGroup=4"
            noteText="Prices in PAK RS will be converted to equivalent CAD and processed through our head office in Canada. Contact us for payment arrangement in PAK RS."
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
