@extends('layouts.default')

@section('title', 'Contact Us')
@section('meta_description', 'Get in touch with EazyJungle for consultations, support and custom solutions. Quick responses via WhatsApp and email.')
@section('canonical', url('/contact-us'))
@section('og_type', 'website')
@section('og_image', asset('img/og/contact-us.jpg'))

@push('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "{{ config('app.name', 'EazyJungle') }}",
  "url": "{{ config('app.url', url('/')) }}",
  "logo": "{{ asset('img/logo.png') }}",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+92 312 2114325",
    "contactType": "customer support",
    "areaServed": "PK",
    "availableLanguage": ["en"]
  }],
  "sameAs": ["https://wa.me/923122114325"]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Us",
  "url": "{{ url('/contact-us') }}"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
    { "@type": "ListItem", "position": 2, "name": "Contact Us", "item": "{{ url('/contact-us') }}" }
  ]
}
</script>
@endpush

@section('content')

    <div class="main">

        <!--page header section start-->
        @include('components.page-header', [
            'title' => 'Contact Us',
            'subtitle' => 'Get in touch with EazyJungle for consultations, support and custom solutions. Quick responses via WhatsApp and email.',
            'background' => 'img/hero-14.jpg',
        ])
        <!--page header section end-->

        <!--breadcrumb bar start-->
        @include('components.breadcrumb', [
            'items' => [['label' => 'Contact Us']],
        ])
        <!--breadcrumb bar end-->

        <!--contact us promo-section start-->
        @include('components.contact-promo')
        <!--contact us promo-section end-->

        <!--contact us section start-->
        @include('components.contact')
        <!--contact us section end-->

        <!--testimonial and review section start-->
        @include('components.client-review')
        <!--testimonial and review section end-->

    </div>

@stop
