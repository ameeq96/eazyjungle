@extends('layouts.default')

{{-- === SEO meta for Cyber Security Solutions === --}}
@section('title', 'Cyber Security Solutions')
@section('meta_description', 'Protect your business from digital threats with advanced cyber security solutions designed to secure data, networks, and applications.')
@section('canonical', url('/cyber-security-solutions'))
@section('og_type', 'website')
@section('og_image', asset('img/og/cyber-security-solutions.jpg')) {{-- fallback: img/og/default.jpg --}}

@push('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Cyber Security Solutions",
  "serviceType": "Managed Cybersecurity",
  "description": "24/7 threat monitoring, advanced firewall & IPS, data encryption, vulnerability assessments & penetration testing, incident response and recovery.",
  "provider": {
    "@type": "Organization",
    "name": "{{ config('app.name', 'EazyJungle') }}",
    "url": "{{ config('app.url', url('/')) }}",
    "logo": "{{ asset('img/logo.png') }}"
  },
  "areaServed": "PK",
  "offers": {
    "@type": "Offer",
    "url": "{{ url('/cyber-security-solutions') }}",
    "price": "19.99",
    "priceCurrency": "USD",
    "priceSpecification": {
      "@type": "UnitPriceSpecification",
      "price": "19.99",
      "priceCurrency": "USD",
      "billingIncrement": 1,
      "unitCode": "MON"  // per month
    },
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
    {"@type":"ListItem","position":2,"name":"Cyber Security Solutions","item":"{{ url('/cyber-security-solutions') }}"}
  ]
}
</script>
@endpush
{{-- === /SEO meta === --}}

@section('content')

    <div class="main">

        <!--hero section start-->
        <x-hero-equal-height 
            title="Cyber Security Solutions"
            subtitle="Protect your business from digital threats with advanced cyber security solutions designed to secure data, networks, and applications."
            :features="[
                '24/7 <strong>Threat Monitoring</strong> and Detection',
                '<strong>Advanced Firewall</strong> & Intrusion Prevention',
                '<strong>Data Encryption</strong> and Secure Backups',
                '<strong>Vulnerability</strong> Assessments & Penetration Testing',
                '<strong>Incident Response</strong> and Recovery Support',
            ]"
            offerText="Comprehensive Security Package"
            price="19" 
            decimal="99" 
            regularPrice="$49.99/mo"
            priceNote="Starting at just $19.99/mo"
            buttonText="Secure Your Business"
            buttonUrl="https://wa.me/923122114325"
            backgroundImage="img/hero-14.jpg"
            :showRightImage="false"
            :showPriceBox="false"
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
