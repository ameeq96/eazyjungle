@props([
    'heading' => '',
    'description' => '',
    'features' => [],
])

<section class="promo-feature ptb-100 gray-light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2>{{ $heading }}</h2>
                    <p class="lead">{{ $description }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($features as $feature)
                <div class="col-md-6 col-lg-3">
                    <div class="feature-feature-list p-3 text-center">
                        <span class="{{ $feature['icon'] }} icon-md d-block color-primary mb-3"></span>
                        <h5 class="mb-2">{{ $feature['title'] }}</h5>
                        <p>{{ $feature['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
