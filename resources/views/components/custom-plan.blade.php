@props([
    'cores' => 1,
    'memory' => 2,
    'storage' => 10,
    'bandwidth' => 1000,
    'price' => '$20',
    'orderUrl' => '#',
])

<section id="custom-plan" class="custom-plan gray-light-bg pt-5 mt--165">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="custom-plan-box white-bg custom-shadow">
                    <input id="c-plan" type="text" data-slider-min="1" data-slider-max="12"
                        data-slider-step="1" data-slider-value="6" data-currency="$" data-unit="">

                    <ul class="list-inline mt-5 custom-vps-list text-center">
                        <li class="list-inline-item">
                            <div class="single-vps-item rounded text-center">
                                <span class="ti-shield icon-sm color-primary p-2 mb-3"></span>
                                <h6 class="d-block py-1">Core</h6>
                                <h5 class="mb-0 feature vpsCore h5"><span>{{ $cores }}</span> GB</h5>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="single-vps-item rounded text-center">
                                <span class="ti-plug icon-sm color-primary p-2 mb-3"></span>
                                <h6 class="d-block py-1">Memory</h6>
                                <h5 class="mb-0 feature vpsMemory"><span>{{ $memory }}</span> GB</h5>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="single-vps-item rounded text-center">
                                <span class="ti-harddrive icon-sm color-primary p-2 mb-3"></span>
                                <h6 class="d-block py-1">Storage</h6>
                                <h5 class="mb-0 feature vpsStorage"><span>{{ $storage }}</span> GB</h5>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="single-vps-item rounded text-center">
                                <span class="ti-dashboard icon-sm color-primary p-2 mb-3"></span>
                                <h6 class="d-block py-1">Bandwidth</h6>
                                <h5 class="mb-0 feature vpsBandwidth"><span>{{ $bandwidth }}</span> GB</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="custom-plan-info-box p-5 white-bg custom-shadow position-relative">
                    <h5>Order Summary</h5>
                    <p>Flexible hosting platform to deploy your online projects.</p>
                    <div class="price vpsPrice">{{ $price }}</div>
                    <div class="btn-holder">
                        <a href="{{ $orderUrl }}" class="btn primary-solid-btn vpsWHmcsUrl">Order now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
