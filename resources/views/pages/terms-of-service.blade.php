@extends('layouts.default')

{{-- === SEO meta for Terms of Service === --}}
@section('title', 'Terms of Service')
@section('meta_description', 'Read EazyJungle’s Terms of Service: acceptable use, IP rights, service changes, liability limits, governing law, and contact information.')
@section('canonical', url('/terms-of-service'))
@section('og_type', 'website')
@section('og_image', asset('img/og/terms-of-service.jpg'))

@push('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TermsOfService",
  "name": "Terms of Service",
  "url": "{{ url('/terms-of-service') }}",
  "inLanguage": "en",
  "isAccessibleForFree": true,
  "dateModified": "{{ now()->toDateString() }}",
  "publisher": {
    "@type": "Organization",
    "name": "{{ config('app.name', 'EazyJungle') }}",
    "url": "{{ config('app.url', url('/')) }}",
    "logo": { "@type": "ImageObject", "url": "{{ asset('img/logo.png') }}" }
  },
  "mainEntityOfPage": "{{ url('/terms-of-service') }}"
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"BreadcrumbList",
  "itemListElement":[
    {"@type":"ListItem","position":1,"name":"Home","item":"{{ url('/') }}"},
    {"@type":"ListItem","position":2,"name":"Terms of Service","item":"{{ url('/terms-of-service') }}"}
  ]
}
</script>
@endpush
{{-- === /SEO meta === --}}

@section('content')

<section class="py-5">
  <div class="container">
    <h1>Terms of Service</h1>
    <p>
      These Terms of Service govern your use of the Eazy Jungle website and services.
      By accessing or using our platform, you agree to the terms outlined below.
    </p>

    <h3>1. Acceptable Use</h3>
    <p>
      You agree not to misuse our services, including engaging in unlawful, harmful, or fraudulent activities.
    </p>

    <h3>2. Intellectual Property</h3>
    <p>
      All content, trademarks, and intellectual property displayed on this website remain the property of Eazy Jungle
      and may not be used without prior written consent.
    </p>

    <h3>3. Service Modifications</h3>
    <p>
      We reserve the right to update, modify, or discontinue services at any time without prior notice.
    </p>

    <h3>4. Limitation of Liability</h3>
    <p>
      Eazy Jungle shall not be held responsible for indirect damages, losses, or downtime caused by third-party systems or external factors.
    </p>

    <h3>5. Governing Law</h3>
    <p>
      These terms shall be governed by and interpreted under the laws of Pakistan.
    </p>

    <h3>6. Contact</h3>
    <p>
      For questions about these Terms, please email us at
      <a href="mailto:support@eazyjungle.pk">support@eazyjungle.pk</a>.
    </p>
  </div>
</section>

@stop
