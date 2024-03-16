<!-- Product Tab Start -->
<section class="product-tab">
    <div class="container">

        <div class="tab-title">
            <h4>{{ __('Deal of the week') }}</h4>
        </div>

        <div class="row product-tab-top">
            <div class="flash-offer-count col-4">
                <div class=" offer-text py-3">
                    <div class="offer-wrap">
                        <div class="countdown">
                            <h6>{{ __('Ending in') }}</h6>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-item-tab" data-bs-toggle="tab" data-bs-target="#all-item" type="button" role="tab" aria-controls="all-item" aria-selected="true">{{ __('Flash Sale') }}</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="new-arrivals-tab" data-bs-toggle="tab" data-bs-target="#new-arrivals" type="button" role="tab" aria-controls="new-arrivals" aria-selected="false">{{ __('New Arrivals') }}</button>
                </li>
            </ul>
        </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="all-item" role="tabpanel" aria-labelledby="all-item-tab">
                <div class="row auto-margin-3">
                    @if($flashDeals->count() == 0)
                        <div class="col-12">
                            <p class="text-center">{{ __('UPCOMING...') }}</p>
                        </div>
                    @endif
                    @foreach($flashDeals as $product)
                        <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                            <x-frontend.product-card2 :product="$product"></x-frontend.product-card2>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="new-arrivals" role="tabpanel" aria-labelledby="new-arrivals-tab">
                <div class="row auto-margin-3">
                    @if($newArrivals->count() == 0)
                        <div class="col-12">
                            <p class="text-center">{{ __('UPCOMING...') }}</p>
                        </div>
                    @endif
                    @foreach($newArrivals as $product)
                        <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                            <x-frontend.product-card2 :product="$product"></x-frontend.product-card2>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Product Tab End -->
@if($flashDeals)
@push('script')
    <script>
        countDown();
        function countDown() {
            $(".countdown").countdown({
                year: {{ date('Y', strtotime($flashDeals->max('details.flash_end_at'))) }},
                month: {{ date('m', strtotime($flashDeals->max('details.flash_end_at')))}},
                day: {{ date('d', strtotime($flashDeals->max('details.flash_end_at')))}},
                hour: {{ date('H', strtotime($flashDeals->max('details.flash_end_at')))}},
                minute: {{ date('i', strtotime($flashDeals->max('details.flash_end_at')))}},
                second: {{ date('s', strtotime($flashDeals->max('details.flash_end_at')))}},

            });
        }

    </script>
@endpush
@endif
