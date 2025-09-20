<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}" data-textdirection="ltr">

<head>
    @include('includes._head')
</head>

<body>

    @include('includes._header')

    <div class="body_wrap">

        @yield('content')

    </div>

    @include('includes._footer')

    @yield('script')

    </div>

    @include('includes._scripts')

    @push('structured_data')
        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ config('app.name', 'EazyJungle') }}",
            "url": "{{ config('app.url', url('/')) }}",
            "logo": "{{ asset('img/logo.png') }}"
            }
            </script>

        <script type="application/ld+json">
        {
        "@context":"https://schema.org",
        "@type":"WebSite",
        "name":"{{ config('app.name', 'EazyJungle') }}",
        "url":"{{ config('app.url', url('/')) }}",
        "potentialAction":{
            "@type":"SearchAction",
            "target":"{{ config('app.url', url('/')) }}/search?q={query}",
            "query-input":"required name=query"
        }
        }
        </script>
    @endpush

</body>

</html>
