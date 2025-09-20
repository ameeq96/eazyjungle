{{-- resources/views/includes/_head.blade.php --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@php
  $siteName   = config('app.name', 'EazyJungle');
  $siteUrl    = config('app.url', url('/'));
  $pageTitle  = trim($__env->yieldContent('title')) ?: $siteName;
  $fullTitle  = $pageTitle === $siteName ? $siteName : "{$pageTitle} | {$siteName}";
  $desc       = trim($__env->yieldContent('meta_description')) ?: 'Fast, secure & affordable hosting and digital services by EazyJungle. WHMCS-ready, 24/7 support.';
  $robots     = trim($__env->yieldContent('meta_robots')) ?: 'index,follow';
  $canonical  = trim($__env->yieldContent('canonical')) ?: url()->current();
  $ogType     = trim($__env->yieldContent('og_type')) ?: 'website';
  $ogImage    = trim($__env->yieldContent('og_image')) ?: asset('img/og/default.jpg');
@endphp

<title>{{ $fullTitle }}</title>
<meta name="description" content="{{ $desc }}">
<meta name="robots" content="{{ $robots }}">
<link rel="canonical" href="{{ $canonical }}">

{{-- Open Graph --}}
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:type" content="{{ $ogType }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:title" content="{{ $pageTitle }}">
<meta property="og:description" content="{{ $desc }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:image:alt" content="{{ $pageTitle }}">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $pageTitle }}">
<meta name="twitter:description" content="{{ $desc }}">
<meta name="twitter:image" content="{{ $ogImage }}">

{{-- Icons / PWA --}}
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
<link rel="manifest" href="{{ asset('site.webmanifest') }}">
<meta name="theme-color" content="#0b5fff">

{{-- Fonts: MUST keep both preconnect AND stylesheet link --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
  href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:wght@400;500;600;700&display=swap"
  rel="stylesheet">

{{-- CSS --}}
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

{{-- Structured data hook --}}
@stack('structured_data')
