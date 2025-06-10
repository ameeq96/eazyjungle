@props([
    'startUrl' => '#',
    'transferUrl' => '#',
    'startTime' => '04:00 PM',
    'transferTime' => '04:57 PM',
])

<section class="start-transfer ptb-100 gray-light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2>Easy to Start and Hassle free Transfer</h2>
                    <p class="lead">Get Immediate Activation or Express Transfer service free of charge.
                        Enthusiastically enhance testing procedures and cross.</p>
                </div>
            </div>
        </div>
        <div class="row g-0 start-website-box">
            <div class="col-xl-6 col-12 pr-lg-0">
                <div class="left-box white-bg">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <span class="ti-vector icon-sm text-white primary-bg p-2 rounded mr-3"></span>
                        <h5 class="mb-0">Start a New Website <span class="badge color-1 color-1-bg">Easy to start</span></h5>
                    </div>
                    <ul>
                        <li>
                            <strong>One-click App Marketplace</strong>
                            <p>Over 450 Apps ready to be installed in seconds</p>
                        </li>
                        <li>
                            <strong>The best DIY solution</strong>
                            <p>20+ Frameworks and your favorite dev tools</p>
                        </li>
                        <li>
                            <strong>Step by Step Tutorials</strong>
                            <p>3000+ pages of tutorials to get you started</p>
                        </li>
                        <li>
                            <strong>Unlimited 24/7 Priority Support</strong>
                            <p>Always-free in-house technical support</p>
                        </li>
                    </ul>
                    <div class="btn-holder mt-4">
                        <a class="btn primary-solid-btn" href="{{ $startUrl }}">Start now</a>
                    </div>
                    <p class="mt-3">
                        <small>Sign up today before <span class="text-blue" data-role="site-activation-timer"
                                data-type="new">{{ $startTime }}</span> and get Immediate Account
                            Activation and Free Website Setup!
                        </small>
                    </p>
                </div>
            </div>
            <div class="col-xl-6 col-12 pl-lg-0">
                <div class="right-box primary-bg">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <span class="ti-loop icon-sm color-primary white-bg p-2 rounded mr-3"></span>
                        <h5 class="mb-0 text-white">Express Transfer</h5>
                    </div>
                    <ul>
                        <li>
                            <strong>People-powered site transfer</strong>
                            <p>No messy automation - get it done by experts</p>
                        </li>
                        <li>
                            <strong>No downtime, Fast and Painless</strong>
                            <p>Express Transfer service included in all plans</p>
                        </li>
                        <li>
                            <strong>Free Domain Transfer</strong>
                            <p>Free one-year domain renewal after transfer</p>
                        </li>
                        <li>
                            <strong>Free months of hosting</strong>
                            <p>Up to six months unused time compensation</p>
                        </li>
                    </ul>
                    <div class="btn-holder mt-4">
                        <a class="btn solid-white-btn" href="{{ $transferUrl }}">Transfer Now</a>
                    </div>
                    <p class="mt-3">
                        <small>Sign up now and get your website transferred by <span class="text-yellow"
                                data-role="site-activation-timer" data-type="transfer">{{ $transferTime }}</span>
                            today with free Express Transfer!
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
