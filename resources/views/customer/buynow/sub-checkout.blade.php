
    <!-- Billing Details Start -->
    <section class="billing-details bg-light">
        {{-- @if (Auth::guard('customer')->check())
        <form action="{{ route('buynow.store', ['product_id' => $product->id]) }}" method="post" class="ajaxform_instant_reload">
    @else --}}
        <form action="{{ url('buynow-without-auth?product_id='. $product->id .'') }}" method="post" class="ajaxform_instant_reload">
    {{-- @endif --}}
       
            {{-- <form action="{{ url('buynow-without-auth?product_id='. $product->id .'') }}" method="post" class="ajaxform_instant_reload"> --}}

        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow rounded-3">
                        <div class="card-body">
                            <div class="buy-more-check">
                                <h4 class="text-center">অর্ডার করতে নিচের ফর্মটি পূরণ করুন</h4>
                                {{-- <h5 class="text-center"><a class="text-primary" href="">অর্ডার করতে নিচের ফর্মটি পূরণ করুন</a> <span class="animation-pulse"></span></h5> --}}
                            </div>
                        
                            <div class="login-form mt-4">
                             
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" name="first_name" value="{{ ($billing->first_name) ?? (auth('customer')->user()->first_name) ?? ''}}" placeholder="">
                                            <span class="label">{{ __('আপনার নাম') }} <span class="text-danger">*</span></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="number" name="mobile" value="{{ ($billing->mobile) ?? (auth('customer')->user()->mobile) ?? ''}}">
                                            <span class="label">{{ __('মোবাইল নাম্বার') }} <span class="text-danger">*</span></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" name="shipping_address" value="">
                                            <span class="label">{{ __('সম্পূর্ণ ঠিকানা দিন') }} <span class="text-danger">*</span></span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none">
                                        <div class="input-group">
                                            <input type="text" name="billing_address" value="null">
                                            <span class="label">{{ __('Billing Address') }} <span class="text-danger">*</span></span>
                                        </div>
                                    </div>
                                    <div class="layout-items col-12">
                                    
                                        <div class="contact-infos my-3">
                                            {{-- <div class="details-meta-items my-2">
                                                <p class="fw-bold">
                                                    <i class="fas fa-thumbs-up"></i>
                                                    {{ __('Quality Product') }}
                                                </p>
                                            </div>
                                            @if (optional($product->details)->is_cash_on_delivery)
                                                <div class="details-meta-items my-2">
                                                    <p class="fw-bold"><i class="fa-solid fa-hand-holding-dollar"></i> {{ __('Cash on Delivery Available') }}</p>
                                                </div>
                                            @endif --}}
                                            <div class="details-meta-items justify-content-between d-flex flex-wrap my-1">
                                                <p class="fw-bold">
                                                    <i class="fa-solid fa-truck"></i>
                                                    {{ __('Delivery Charge') }}
                                                </p>
                                            </div>
                                            <div class="details-meta-items justify-content-between d-flex flex-wrap my-2">
                                                <div class="form-check ps-0">
                                                    <input class="form-check-input" type="radio" value="{{(($product->details)->is_free_shipping==1 ? 0 : $product->shipping_cost) ?? 0 }}" onclick="shippingCharge(this.value)" name="delivery_charge" id="insideCharge" checked >
                                                    <label class="form-check-label" for="insideCharge">
                                                        {{ __('Inside Dhaka') }} ({{ optional($product->details)->inside_shipping_days }})
                                                    </label>
                                                </div>
                                                <b>
                                                    @if(($product->details)->is_free_shipping==1)
                                                    {{ 'Free' }}
                                                    @else
                                                    {{$product->shipping_cost ?? 00 }}
                                                    @endif
                                                </b>
                                            </div>
                                            <div class="details-meta-items justify-content-between d-flex flex-wrap my-2">
                                                <div class="form-check ps-0">
                                                    <input class="form-check-input" type="radio" value=" {{(($product->details)->is_free_shipping==1 ? 0 :  $product->outside_shipping_cost) ?? 0 }}" onclick="shippingCharge(this.value)" name="delivery_charge" id="outsideCharge" >
                                                    <label class="form-check-label" for="outsideCharge">
                                                        {{ __('Outside Dhaka') }} ({{ optional($product->details)->outside_shipping_days }})
                                                    </label>
                                                </div>
                                                <b>
                                                    @if(($product->details)->is_free_shipping==1)
                                                    {{ 'Free' }}
                                                    @else
                                                    {{$product->outside_shipping_cost ?? 00 }}
                                                    @endif
                                                </b>
                                            </div>
                                        </div>
                                        {{-- <div class="contact-infos my-3">
                                            @foreach (getContactsInfos() as $item)
                                                <div class="single-item">
                                                    <h6 class="d-inline-block my-1">{{ $item->value['number'] ?? '' }}</h6> <small class="d-inline-block ms-2">{{ $item->value['title'] ?? '' }}</small>
                                                </div>
                                            @endforeach
                                        </div> --}}
                                    </div>
                                    <div class="col-sm-12 mb-4">
                                        <span class="label">{{ __('Payment Method') }} <span class="text-danger">*</span></span>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <input type="radio" name="payment_method" id="cashOnDelivery" class="d-none" checked="checked" value="COD">
                                                <label for="cashOnDelivery" class="payment-title"><i class="fa-solid fa-hand-holding-dollar"></i> Cash On Delivery</label>
                                            </div>
                                            <div class="col-6">
                                                <input type="radio" name="payment_method" id="payment_method" class="d-none" value="Mobile Banking">
                                                <label for="payment_method" class="payment-title mobile-banking"><i class="fa-solid fa-building-columns"></i> Mobile Banking</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mb-3">
                                        <button type="submit" class="btn-anime w-50 submit-btn">{{ __('CONFIRM ORDER') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4 class="text-center">{{ __('ORDER SUMMARY') }}</h4>
                            <div class="right-form mt-2">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Items') }}</th>
                                            <th>{{ __('Quantity') }}</th>
                                            <th>{{ __('Amount') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">
                                                <img height='70px' width="70px" class="rounded-circle" src="{{ asset('uploads/products/galleries') }}/{{ $product->images->first()->image ?? '' }}" class="b-1" alt="{{ $product->name }}">
                                                <p>
                                                    {{ $product->name }}

                                                    <span id="product_color"></span>
                                                <input type="hidden" id="color_input" name="color" value="">

                                                <span id="product_size"></span>
                                                <input type="hidden" id="size_input" name="size" value="">
                                                    {{-- @if (request('color'))
                                                        <span class="badge bg-light text-dark">
                                                            ({{ request('color') }})
                                                        </span>
                                                    @endif
                                                    @if (request('size'))
                                                        - <span class="badge bg-light text-dark">
                                                            ({{ request('size') }})
                                                            a
                                                        </span>
                                                    @endif --}}
                                                </p>
                                            </td>
                                            <td>
                                                <span id="qnty">1</span>
                                                <input type="hidden" id="qty_input" name="qty" value="1">
                                            </td>
                                            <td>
                                                 {{-- @if(hasPromotion($product->id))
                                                    {{promotionPrice($product->id,2) }}
                                                @else
                                                    {{ number_format(userCurrency('exchange_rate') * $product->sale_price,2)}}
                                                @endif   --}}
                                                <div class="new-quantity-item">
                                  
                                                    <h5>{{userCurrency('symbol')}}<span class="order_total_price">
                                                        {{$product->sale_price}}
               
                                                        </span></h5>
                                                    <small>{{$product->unit}}</small>
                                                </div>
                                            </td>
                                            <td class="table-close-btn">
                                                <a href="{{ route('product', $product->slug) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.995 511.995">
                                                        <path d="M437.126,74.939c-99.826-99.826-262.307-99.826-362.133,0C26.637,123.314,0,187.617,0,256.005s26.637,132.691,74.993,181.047c49.923,49.923,115.495,74.874,181.066,74.874s131.144-24.951,181.066-74.874C536.951,337.226,536.951,174.784,437.126,74.939z M409.08,409.006c-84.375,84.375-221.667,84.375-306.042,0c-40.858-40.858-63.37-95.204-63.37-153.001s22.512-112.143,63.37-153.021c84.375-84.375,221.667-84.355,306.042,0C493.435,187.359,493.435,324.651,409.08,409.006z" />
                                                        <path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046 c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>



                                
                                <div class="order-cart mt-4">
                                    <ul id="order-details">
                                        <li>{{ __('Subtotal') }}
                                            <span style="position: relative; left:-70px;">৳ </span><span class="order_total_price"> 
                                            {{$product->sale_price}}
                                            </span>
                                            <input type="hidden"  name="subtotal" id="sub_total_input" class="sub-total" value="{{$product->sale_price}}"></li>
                                        <li>{{ __('Shipping Charge') }}
                                            <span style="position: relative; left:-70px;">৳ </span><span id="shipping_cost">
                                                @if(($product->details)->is_free_shipping==1)
                                                        {{00}}
                                    
                                                @else
                                                {{$product->shipping_cost ?? 0}}
                                                @endif         
                                            </span>
                                            <input type="hidden" id="shipping_cost_input" name="shipping_cost_input" value="{{$product->shipping_cost ?? 0}}"></li>

                                        
                                            {{-- @if( request('area') == 'inside'){{ __('(inside dhaka)') }}
                                            @else {{ __('(outside dhaka)') }} @endif
                                            @php
                                                $shipping_cost = request('area') == 'inside' ? $product->shipping_cost : $product->outside_shipping_cost;
                                            @endphp
                                            @if(optional($product->details)->is_free_shipping)
                                                <span class="total-shipping">{{ __('Free') }}</span>
                                                <input type="hidden" id="shipping_cost" value="{{ $shipping_cost ?? '0'}}"/>
                                                
                                            @else
                                                <span class="total-shipping">{{ currency($shipping_cost) }}</span>
                                                <input type="hidden" id="shipping_cost" value="{{ $shipping_cost ?? '0'}}"/>
                                            @endif --}}
                                        </li>
                                        @if (Cookie::get('coupon_discount'))
                                        <li>{{ __('Coupon') }}<span>{{ currency(Cookie::get('coupon_discount')) }}</span></li>
                                        @endif
                                        <li>{{ __('Total') }} <span style="position: relative; left:-70px;">৳ </span> <span class="grand-total" id="grand_total">
                                                @if(($product->details)->is_free_shipping==1)
                                                 <span class="order_total_price">
                                                        {{$product->sale_price}}
                                                        </span>
                                                   
                                                    {{-- {{ currency(($product->sale_price * request('qty') ) - Cookie::get('coupon_discount')) }} --}}
                                                @else
                                              
                                                    {{-- {{ currency(($product->sale_price * request('qty') + $shipping_cost) - Cookie::get('coupon_discount')) }} --}}

                                                @endif
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                {{-- <h5 class="mb-2">{{ __('Promotional Code') }} ({{ __('Have a coupon?') }})</h5>
                                @if (Cookie::get('coupon_infos'))
                                    @php
                                        $coupon_infos = json_decode(Cookie::get('coupon_infos'));
                                    @endphp
                                    <div class="right-search input-group mb-0">
                                        <input type="text" name="code" id="code" placeholder="Enter your coupon code" value="{{ $coupon_infos->code }}">
                                        <button type="button" class="btn-anime" id="apply-coupon">{{ __('Apply Coupon') }}</button>
                                    </div>
                                    <div class="row mb-2 coupon-infos">
                                        <div class="col-11">
                                            <h5 class="text-warning">{{ $coupon_infos->code }}</h5>
                                        </div>
                                        <div class="col-1">
                                            <h5><a href="javascript:void(0)" onclick="removeCoupon()"><i class="fa-solid fa-xmark text-danger"></i></a></h5>
                                        </div>
                                    </div>
                                @else
                                <div class="right-search input-group mb-0">
                                    <input type="text" name="code" id="code" placeholder="Enter your coupon code">
                                    <button type="button" class="btn-anime" id="apply-coupon">{{ __('Apply Coupon') }}</button>
                                </div>
                                <div class="row mb-2 coupon-infos">
                                     
                                </div>
                                @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--       @push('modal')--}}
        <div class="modal fade" id="pay-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pay amount <span class="pay-amount"></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="bank" class="col-form-label">Select Bank</label>
                            <select name="bank" id="bank" class="form-control">
                                <option value="bKash">bKash</option>
                                <option value="Rocket">Rocket</option>
                                <option value="Nagad">Nagad</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="paid_amount" class="col-form-label">Paid Amount</label>
                            <input type="number" step="any" class="form-control" name="paid_amount" id="paid_amount">
                        </div>
                        <div class="mb-3">
                            <label for="transaction_id" class="col-form-label">Transaction Id</label>
                            <input type="text" id="transaction_id" step="any" class="form-control" name="transaction_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn border-danger text-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn theme-btn completed">Complete</button>
                    </div>
                </div>
            </div>
        </div>

{{--            @endpush--}}

    </form>
</section>
<!-- Billing Details End -->



@push('script')
<script>
    $("#apply-coupon").click(function(){
        var code = $("#code").val();
        var csrf = "{{ @csrf_token() }}"
        $.ajax({
            url : "{{ route('customer.coupon') }}",
            data: {_token:csrf,code:code},
            type: 'post'
        }).done(function(res){
            if(res.status !== 'error'){
                $('.coupon-infos').html(res.coupon_infos)
                $("#order-details").html(res.after_coupon);
                swal("Yes!",res.message,"success");
            }else{
                swal("Oops!",res.msg,"error");
            }
        });
    })

    function removeCoupon() {
        var csrf = "{{ @csrf_token() }}"
        $.ajax({
            url : "{{ route('customer.coupon.remove') }}",
            data: {_token:csrf},
            type: 'post'
        }).done(function(res){
            $("#code").val('');
            $('.coupon-infos').html('');
            $("#order-details").html(res.data);
            swal("Yes!",res.message,"success");
        });
    }

    $('.mobile-banking').on('click', function() {
        $('#pay-modal').modal('show');
        const amount_text = $('.grand-total').text();
        const amount = amount_text.replace('৳', '');
        $('.pay-amount').text(parseFloat(amount));
    })

    $('.completed').on('click', function() {
        let bank = $('#bank').val();
        let paid_amount = $('#paid_amount').val();
        let transaction_id = $('#transaction_id').val();

        if (bank == '' || paid_amount == '' || transaction_id == '') {
            Notify('error', null, 'All fields are required.');
        } else {
            $('#pay-modal').modal('hide');
        }
    })
</script>
@endpush
