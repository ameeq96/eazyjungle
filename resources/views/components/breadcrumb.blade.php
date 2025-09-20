<div class="breadcrumb-bar py-3 gray-light-bg border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="custom-breadcrumb">
                    <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0 pl-0">
                        <li class="list-inline-item breadcrumb-item">
                            <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
                        </li>
                        @foreach ($items as $item)
                            @if (!$loop->last)
                                <li class="list-inline-item breadcrumb-item">
                                    <a href="{{ $item['url'] }}" class="text-decoration-none">{{ $item['label'] }}</a>
                                </li>
                            @else
                                <li class="list-inline-item breadcrumb-item active">{{ $item['label'] }}</li>
                            @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

@push('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ url('/') }}"
    }
    @foreach ($items as $index => $item)
    ,{
      "@type": "ListItem",
      "position": {{ $index + 2 }},
      "name": "{{ $item['label'] }}",
      "item": "{{ $item['url'] ?? url()->current() }}"
    }
    @endforeach
  ]
}
</script>
@endpush