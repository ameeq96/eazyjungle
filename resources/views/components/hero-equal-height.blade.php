@props([
    'title' => '',
    'subtitle' => '',
    'features' => [],
    'buttonText' => 'Book Today',
    'buttonUrl' => '#',
    'backgroundImage' => 'assets/img/hero-14.jpg',
    'rightImage' => 'assets/img/business-model.png',
    'rightText' => '',
    'offerText' => '',
    'price' => '',
    'decimal' => '',
    'regularPrice' => '',
    'showRightImage' => true,
    'showPriceBox' => true,
    'priceDuration' => '/month',
])


<section class="hero-equal-height pt-165 pb-100 gradient-overly-right"
    style="background: url('{{ asset($backgroundImage) }}') no-repeat center center / cover">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <!-- Left content -->
            <div class="col-md-7 col-lg-7">
                <div class="hero-content-wrap text-white position-relative z-index">
                    <h1 class="text-white">{{ $title }}</h1>
                    <p class="lead">{{ $subtitle }}</p>
                    <ul class="list-unstyled tech-feature-list text-white">
                        @foreach ($features as $feature)
                            @if (is_array($feature))
                                <li class="py-1">
                                    <span class="ti-control-forward mr-2"></span>
                                    <strong>{{ $feature['title'] }}</strong>
                                    <ul class="mt-2 ml-4">
                                        @foreach ($feature['points'] as $point)
                                            <li class="py-1">
                                                <span class="ti-arrow-right me-2"></span>{{ $point }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="py-1 d-flex align-items-center gap-2">
                                    <span class="ti-control-forward mr-2"></span>{!! $feature !!}
                                </li>
                            @endif
                        @endforeach
                    </ul>

                </div>
                <div class="action-btns mt-4">
                    <a class="btn primary-solid-btn animated-btn" href="{{ $buttonUrl }}">{{ $buttonText }}</a>
                </div>
            </div>

            <!-- Right image + text + button -->
            @if ($showRightImage)
            <div class="col-md-5 col-lg-5">
                <div class="text-white text-center py-5 px-4">
                    @if ($rightText)
                        <p class="mb-4">{!! $rightText !!}</p>
                    @endif

                    @if ($showRightImage)
                        <div class="mb-4">
                            <img src="{{ asset($rightImage) }}" alt="Business Model" class="img-fluid rounded shadow">
                        </div>
                    @endif
                </div>
            </div>
            @endif

            @if ($showPriceBox)
                <div class="col-md-5 col-lg-5">
                    <div class="offer-box text-white text-center py-5 px-4 rounded shadow">
                        @if ($offerText)
                            <span class="h6 text-white text-uppercase font-weight-bold d-block mb-2">{{ $offerText }}</span>
                        @endif

                        @if ($price && $decimal)
                            <div class="d-flex justify-content-center align-items-start mb-2">
                                <span class="currency usa-currency display-6 text-white" style="line-height: 1">RS</span>
                                <h2 class="offer-price text-white mb-0 display-3 font-weight-bold">{{ $price }}
                                </h2>
                                <span class="decimal align-self-start"
                                    style="font-size: 1.5rem; margin-top: 10px;">.{{ $decimal }}</span>
                            </div>
                            <small class="text-white-50 d-block mb-3">{{$priceDuration}}</small>
                        @endif

                        @if ($regularPrice)
                            <p class="regular-price mb-4">Regular Price <strong>{{ $regularPrice }}</strong></p>
                        @endif                       
                    </div>
                </div>

            @endif

        </div>
    </div>
</section>
