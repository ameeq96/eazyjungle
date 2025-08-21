@php
    $alignmentClass = match ($align ?? 'center') {
        'left' => 'text-start',
        'right' => 'text-end',
        default => 'text-center',
    };

    $sectionClass = $sectionClass ?? 'client-review-section ptb-100 gray-light-bg';
    $rowClass = $rowClass ?? 'row justify-content-center';

    $reviews = [
        [
            'name' => 'skylinkmbc.com',
            'title' => 'Reliable Service with Great Support',
            'message' =>
                'We are very satisfied with the hosting speed and customer support. Everything works smoothly and any issue is resolved quickly.',
            'time' => '5 days ago',
        ],
        [
            'name' => 'voiceawareness.ca',
            'title' => 'Professional and Affordable',
            'message' =>
                'Their services are affordable without compromising on quality. The uptime and technical assistance have been outstanding.',
            'time' => '2 days ago',
        ],
        [
            'name' => 'eazyjungle.com',
            'title' => 'Fast, Secure, and Easy to Use',
            'message' =>
                'Setting up our website was simple and hassle-free. The platform is secure, reliable, and perfect for scaling our business.',
            'time' => '7 days ago',
        ],
    ];
@endphp

<section class="{{ $sectionClass }}">
    <div class="container">
        <div class="{{ $rowClass }}">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading {{ $alignmentClass }} mb-5">
                    <h2>{{ $title ?? 'What Our Customers Say About Us?' }}</h2>
                    <p class="lead">{{ $subtitle ?? 'Authoritatively reinvent client-centric e-markets via fully tested process.' }}</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($reviews as $review)
                <div class="col-md-6 col-xl-4">
                    <div class="single-testimonial white-bg shadow-sm rounded p-5 mt-4">
                        <ul class="list-inline ratting-list mb-2">
                            @for ($i = 0; $i < 5; $i++)
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            @endfor
                        </ul>
                        <div class="ratting-content">
                            <h5>{{ $review['title'] }}</h5>
                            <p>{{ $review['message'] }}</p>
                        </div>
                        <div class="ratting-author mt-3">
                            <h6>{{ $review['name'] }}</h6>
                            <small class="text-right">{{ $review['time'] }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
