@php
    $title = $title ?? 'Need Some Help?';
    $description = $description ?? 'We are not just service providers! We will work with you to understand your needs and build solutions within your budget.<br>Start Now, Book a truly free up to 30 minutes consultation with our technology experts.';
@endphp

<section class="call-to-action ptb-100 gradient-overly-bottom"
    style="background: url('{{ asset('img/hero-bg-4.jpg') }}')no-repeat center center / cover fixed">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="call-to-action-content text-white text-center">
                    <h2 class="text-white">{{ $title }}</h2>
                    <p>{!! $description !!}</p>
                    <div class="action-btns d-flex align-items-center justify-content-center gap-3 mt-3">
                        <a href="[Link for Calander booking]" class="btn solid-white-btn mr-3">Start Now Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
