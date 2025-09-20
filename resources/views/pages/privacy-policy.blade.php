@extends('layouts.default')

{{-- === SEO meta for Privacy Policy === --}}
@section('title', 'Privacy Policy')
@section('meta_description', 'Read EazyJungle’s privacy policy: what data we collect, how we use it, data security, and how to contact us.')
@section('canonical', url('/privacy-policy'))
@section('og_type', 'website')
@section('og_image', asset('img/og/privacy-policy.jpg')) {{-- fallback: img/og/default.jpg --}}

@push('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "PrivacyPolicy",
  "name": "Privacy Policy",
  "url": "{{ url('/privacy-policy') }}",
  "inLanguage": "en",
  "isAccessibleForFree": true,
  "dateModified": "{{ now()->toDateString() }}",
  "publisher": {
    "@type": "Organization",
    "name": "{{ config('app.name', 'EazyJungle') }}",
    "url": "{{ config('app.url', url('/')) }}",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ asset('img/logo.png') }}"
    }
  },
  "mainEntityOfPage": "{{ url('/privacy-policy') }}"
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"BreadcrumbList",
  "itemListElement":[
    {"@type":"ListItem","position":1,"name":"Home","item":"{{ url('/') }}"},
    {"@type":"ListItem","position":2,"name":"Privacy Policy","item":"{{ url('/privacy-policy') }}"}
  ]
}
</script>
@endpush
{{-- === /SEO meta === --}}

@section('content')

<section class="py-5">
  <div class="container">
    <h1>Privacy Policy</h1>
    <p>
      At <strong>Eazy Jungle</strong>, we value your privacy and are committed to protecting your personal information.
      This Privacy Policy explains how we collect, use, and safeguard your data when you interact with our website and services.
    </p>

    <h3>Information We Collect</h3>
    <ul>
      <li>Personal information such as name, email address, and contact details when you register or contact us.</li>
      <li>Non-personal data including browser type, device information, and usage statistics for analytics purposes.</li>
    </ul>

    <h3>How We Use Your Information</h3>
    <ul>
      <li>To provide and improve our services.</li>
      <li>To communicate updates, offers, and service-related information.</li>
      <li>To comply with legal and regulatory obligations.</li>
    </ul>

    <h3>Data Security</h3>
    <p>
      We use industry-standard measures to protect your personal data. However, no online system is 100% secure,
      and we cannot guarantee absolute protection.
    </p>

    <h3>Contact Us</h3>
    <p>
      If you have questions regarding this Privacy Policy, please contact us at
      <a href="mailto:support@eazyjungle.pk">support@eazyjungle.pk</a>.
    </p>
  </div>
</section>

@stop
