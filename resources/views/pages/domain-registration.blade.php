@extends('layouts.default')

{{-- === SEO meta for Domain Registration === --}}
@section('title', 'Domain Registration And Management')
@section('meta_description', 'Find cheap domain names for your website. EazyJungle brings competitive prices and full setup—DNS, email and SSL—so your domain is functional end-to-end. Set up your online presence with Hosting, Email and SSL in one place.')
@section('canonical', url('/domain-registration')) {{-- slug aapke route ke mutabiq update kar len --}}
@section('og_type', 'website')
@section('og_image', asset('img/og/domain-registration.jpg')) {{-- fallback: img/og/default.jpg --}}

@push('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Domain Registration & Management",
  "serviceType": "Domain Registration",
  "description": "Competitive domain pricing with complete setup and management: DNS, email, SSL and guidance for individuals and businesses.",
  "provider": {
    "@type": "Organization",
    "name": "{{ config('app.name', 'EazyJungle') }}",
    "url": "{{ config('app.url', url('/')) }}",
    "logo": "{{ asset('img/logo.png') }}"
  },
  "areaServed": ["PK","CA"],
  "offers": {
    "@type": "Offer",
    "url": "https://eazyjungle.pk/public/ezclient/order.php?step=1&productGroup=2",
    "availability": "https://schema.org/InStock"
  }
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"BreadcrumbList",
  "itemListElement":[
    {"@type":"ListItem","position":1,"name":"Home","item":"{{ url('/') }}"},
    {"@type":"ListItem","position":2,"name":"Domain Registration & Management","item":"{{ url('/domain-registration') }}"}
  ]
}
</script>
@endpush
{{-- === /SEO meta === --}}

@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height 
            title="Domain Registration & Management"
            subtitle="Find cheap domain names for your website. EazyJungle brings competitive prices and full setup—DNS, email and SSL—so your domain is functional end-to-end. Set up your online presence with Hosting, Email and SSL in one place."
            :showRightImage="false"
            :showPriceBox="true"
            buttonText="Choose a Domain Name"
            buttonUrl="https://eazyjungle.pk/public/ezclient/order.php?step=1&productGroup=2"
            backgroundImage="img/hero-14.jpg"
            noteText="Prices in PKR will be converted to CAD and processed via our Canada head office. Contact us for PKR payment arrangements." 
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
