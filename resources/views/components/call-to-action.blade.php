@php
    $title = $title ?? 'Default Title';
    $description = $description ?? 'Default Description';
@endphp

<section class="call-to-action ptb-100 gradient-overly-bottom"
    style="background: url('{{ asset('img/hero-bg-4.jpg') }}')no-repeat center center / cover fixed">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="call-to-action-content text-white text-center">
                    <h2 class="text-white">{{ $title }}</h2>
                    <p>{{ $description }}</p>
                    <div class="action-btns d-flex align-items-center justify-content-center gap-3 mt-3">
                        <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                        <a href="#" class="btn outline-white-btn">Send us an email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
