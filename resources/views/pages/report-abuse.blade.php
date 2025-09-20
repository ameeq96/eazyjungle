@extends('layouts.default')

{{-- === SEO meta for Report Abuse === --}}
@section('title', 'Report Abuse')
@section('meta_description', 'Report inappropriate, illegal, or harmful use of EazyJungle services. Email details with URLs, screenshots and your contact so we can investigate promptly.')
@section('canonical', url('/report-abuse'))
@section('og_type', 'website')
@section('og_image', asset('img/og/report-abuse.jpg')) {{-- fallback: img/og/default.jpg --}}

@push('structured_data')
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"WebPage",
  "name":"Report Abuse",
  "url":"{{ url('/report-abuse') }}",
  "description":"How to report abuse of EazyJungle services and what happens next."
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"Organization",
  "name":"{{ config('app.name', 'EazyJungle') }}",
  "url":"{{ config('app.url', url('/')) }}",
  "logo":"{{ asset('img/logo.png') }}",
  "contactPoint":[{
    "@type":"ContactPoint",
    "contactType":"abuse",
    "email":"support@eazyjungle.pk",
    "areaServed":"PK",
    "availableLanguage":["en"]
  }]
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"BreadcrumbList",
  "itemListElement":[
    {"@type":"ListItem","position":1,"name":"Home","item":"{{ url('/') }}"},
    {"@type":"ListItem","position":2,"name":"Report Abuse","item":"{{ url('/report-abuse') }}"}
  ]
}
</script>
@endpush
{{-- === /SEO meta === --}}

@section('content')

<section class="py-5">
  <div class="container">
    <h1>Report Abuse</h1>
    <p>
      Eazy Jungle takes abuse of its services seriously. If you encounter inappropriate, illegal, or harmful use of our services,
      please report it immediately so we can investigate and take necessary action.
    </p>

    <h3>How to Report Abuse</h3>
    <ul>
      <li>Email us at <a href="mailto:support@eazyjungle.pk">support@eazyjungle.pk</a>.</li>
      <li>Provide detailed information about the abuse, including URLs, screenshots, and any supporting evidence.</li>
      <li>Include your contact information so we may follow up if additional details are needed.</li>
    </ul>

    <h3>What Happens Next?</h3>
    <p>
      Once a report is submitted, our compliance team will review the case promptly.
      Action may include warnings, account suspension, or termination, depending on the severity of the violation.
    </p>
  </div>
</section>

@stop
