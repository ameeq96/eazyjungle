@props(['title', 'subtitle', 'plans', 'features', 'grayBg' => false])
<section class="compare-pricing-section ptb-100 {{ $grayBg ? 'gray-light-bg' : 'bg-white' }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2>{{ $title }}</h2>
                    <p class="lead">{{ $subtitle }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="table-responsive">
                    <table class="table w-100 table-hover table-bordered comparision-table text-center">
                        <thead class="comparision-table-head">
                            <tr class="active">
                                <th class="text-left">
                                    <p class="mb-0"><strong>Choose your plan</strong></p>
                                    <small><a class="text-decoration-none" href="#">Or Chat with an
                                            expert</a></small>
                                </th>
                                @foreach ($plans as $plan)
                                    <th>
                                        <strong class="h5 mb-0">
                                            {{ $plan['name'] }}
                                            @if (isset($plan['badge']))
                                                <span
                                                    class="badge {{ $plan['badge']['class'] }}">{{ $plan['badge']['text'] }}</span>
                                            @endif
                                        </strong>
                                        <p class="text-muted text-sm">{{ $plan['description'] }}</p>
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="comparision-table-body">
                            <tr>
                                <td>
                                    <p class="mb-0 comparision-price-title text-left"><strong>Price</strong></p>
                                </td>
                                @foreach ($plans as $plan)
                                    <td class="py-4">
                                        <h4 class="mb-0 comparision-price">{{ $plan['price'] }} <span>/month</span></h4>
                                        <a href="#" class="btn primary-solid-btn mt-2">Get Started</a>
                                    </td>
                                @endforeach
                            </tr>

                            @foreach ($features as $feature)
                                <tr>
                                    <td>
                                        <p class="text-left">{{ $feature['title'] }}</p>
                                    </td>
                                    @foreach ($feature['values'] as $value)
                                        <td>{!! $value !!}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
