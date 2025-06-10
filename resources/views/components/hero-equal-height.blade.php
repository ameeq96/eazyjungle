@props([
    'title' => '',
    'subtitle' => '',
    'features' => [],
    'offerText' => '',
    'price' => '',
    'decimal' => '',
    'priceNote' => '',
    'regularPrice' => '',
    'buttonText' => 'Get Started Now',
    'buttonUrl' => '#',
    'backgroundImage' => 'assets/img/hero-14.jpg'
])

<section class="hero-equal-height pt-165 pb-100 gradient-overly-right"
    style="background: url('{{ asset($backgroundImage) }}') no-repeat center center / cover">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-7 col-lg-7">
                <div class="hero-content-wrap text-white position-relative z-index">
                    <h1 class="text-white">{{ $title }}</h1>
                    <p class="lead">{{ $subtitle }}</p>
                    <ul class="list-unstyled tech-feature-list text-white">
                        @foreach ($features as $feature)
                            <li class="py-1 d-flex align-items-center gap-2">
                                <span class="ti-control-forward mr-2"></span>{!! $feature !!}
                            </li>
                        @endforeach
                    </ul>
                    <div class="action-btns mt-4">
                        <p>Get all the essentials features <strong>{{ $priceNote }}</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="offer-box text-white text-center py-5 px-4">
                    <span class="h5 text-white">{{ $offerText }}</span>
                    <h2 class="offer-price text-white">
                        <span class="currency usa-currency">$</span>{{ $price }}
                        <span class="decimal">.{{ $decimal }}</span><small>/month</small>
                    </h2>
                    <p class="regular-price">Regular Price <strong>{{ $regularPrice }}</strong></p>
                    <div class="action-btns mt-4">
                        <a class="btn primary-solid-btn animated-btn" href="{{ $buttonUrl }}">{{ $buttonText }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
