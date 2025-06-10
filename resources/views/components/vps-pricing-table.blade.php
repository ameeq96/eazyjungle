<section class="vps-pricing-plane ptb-100 gray-light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2>{{ $title ?? 'VPS Hosting Pricing Plan' }}</h2>
                    <p class="lead">
                        {{ $subtitle ?? 'Uniquely restore open-source products via open-source relationships. Enthusiastically deliver competitive systems and client-centric.' }}
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table vps-hosting-pricing-table">
                    <thead>
                        <tr>
                            <th>VCPU</th>
                            <th>Memory</th>
                            <th>CPU Power</th>
                            <th>Storage</th>
                            <th>Geekbench Score</th>
                            <th>Bandwidth</th>
                            <th colspan="2">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plans as $plan)
                            <tr class="vps-pricing-row {{ $plan['theme'] }}">
                                <td>{{ $plan['vcpu'] }}</td>
                                <td>{{ $plan['memory'] }}</td>
                                <td>
                                    <span>{{ $plan['cpu_ghz'] }}
                                        <span class="cpu-core">{{ $plan['cpu_cores'] }}</span>
                                    </span>
                                </td>
                                <td>{{ $plan['storage'] }}</td>
                                <td>
                                    <div class="score-bar-wrap">
                                        <span class="geekbench-score">{{ $plan['score'] }}</span>
                                        <div class="progress w-100 score-bar-item">
                                            <div class="progress-bar primary-bg" role="progressbar"
                                                style="width: {{ $plan['score_percent'] }}%;"
                                                aria-valuenow="{{ $plan['score_percent'] }}" aria-valuemin="0"
                                                aria-valuemax="100">
                                                {{ $plan['score_percent'] }}%
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $plan['bandwidth'] }}</td>
                                <td>
                                    <p>
                                        <span class="rate">{{ $plan['price'] }}<span>/month</span></span>
                                        <span class="pricing-onsale">On sale -
                                            <span class="badge {{ $plan['badge_class'] }}">
                                                {{ $plan['discount'] }}
                                            </span>
                                        </span>
                                    </p>
                                </td>
                                <td>
                                    <a href="{{ $plan['order_url'] ?? '#' }}" class="btn primary-solid-btn">Order
                                        Now</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-center d-none d-md-block d-lg-block">
            <div class="col-md-10 col-lg-12">
                <div class="payment-method text-center">
                    <ul class="list-inline">
                        @foreach ($paymentMethods as $method)
                            <li class="list-inline-item">
                                <img src="{{ $method['image'] }}" alt="{{ $method['alt'] }}" width="50">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
