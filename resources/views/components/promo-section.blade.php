@php
    $alignmentClass = match($align ?? 'center') {
        'left' => 'text-start',
        'right' => 'text-end',
        default => 'text-center',
    };

    $rowClass = $rowClass ?? 'row justify-content-center';
@endphp

<section class="promo-section ptb-100">
    <div class="container">
        <div class="{{ $rowClass }}">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading {{ $alignmentClass }} mb-md-0 mb-lg-5">
                    <h2>{{ $title }}</h2>
                    <p class="lead">{{ $subtitle }}</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100 mt-3">
                        <div class="circle-icon">
                            <span class="fas fa-bezier-curve text-white"></span>
                        </div>
                        <h5>Super Easy to Use</h5>
                        <p>Increase sales by showing true dynamics of your website.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100 mt-3">
                        <div class="circle-icon">
                            <span class="fas fa-sync-alt text-white"></span>
                        </div>
                        <h5>Fast & Reliable</h5>
                        <p>Build your online store’s trust using Social Proof &amp; Urgency.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100 mt-3">
                        <div class="circle-icon">
                            <span class="fas fa-headset text-white"></span>
                        </div>
                        <h5>24/7 Expert Support</h5>
                        <p>Realize importance of social proof in customer’s purchase decision.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
