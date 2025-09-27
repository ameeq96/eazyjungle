@extends('layouts.default')

{{-- === SEO meta for Home === --}}
@section('title', 'Web Hosting, Domains, Email And Security')
@section('meta_description', 'EazyJungle builds your online presence: hosting, domains, email, web development and cybersecurity — simple pricing, fast setup and 24/7 support.')
@section('canonical', config('app.url'))
@section('og_type', 'website')
@section('og_image', asset('img/logo-color.png')) {{-- fallback: img/og/default.jpg --}}

@push('structured_data')
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"Organization",
  "name":"{{ config('app.name', 'EazyJungle') }}",
  "url":"{{ config('app.url', url('/')) }}",
  "logo":"{{ asset('img/logo.png') }}"
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"WebSite",
  "name":"{{ config('app.name', 'EazyJungle') }}",
  "url":"{{ config('app.url', url('/')) }}"
}
</script>
</script>
@endpush
{{-- === /SEO meta === --}}

@section('content')

    <div class="main">
        <!--hero section start-->
        @include('components.hero')
        <!--hero section end-->

        <!--promo-section section start-->
        {{-- @include('components.promo-section', [
            'title' => 'EazyJungle Helps You Succeed',
            'subtitle' => 'Grow your website faster by using EazyJungle as your foundation. Dynamically streamline principle-centered technologies.',
            'align' => 'center',
        ]) --}}
        <!--promo-section section end-->

        <!--services section start-->
        @include('components.our-services')
        <!--services section end-->

        <!--call to action section start-->
        @include('components.call-to-action')
        <!--call to action section end-->

        <!--pricing with switch section start-->
        {{-- @include('components.pricing') --}}
        <!--pricing with switch section end-->

        <!--feature section start-->
        {{-- <x-feature-section :grayBg="true" /> --}}
        <!--feature section end-->

        <!--faq section start-->
        @include('components.faq')
        <!--faq section end-->

        <!--testimonial and review section start-->
        @include('components.client-review')
        <!--testimonial and review section end-->

        <!--bottom to top button start-->
        @include('components.scroll-top')
        <!--bottom to top button end-->
    </div>

@stop
