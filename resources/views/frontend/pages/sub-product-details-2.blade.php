@extends('frontend.layouts.front')

@section('title',$product->name)

@section('meta_title',$product->meta_title ?? $product->name)

@section('meta_description',$product->meta_description ?? '')

@section('meta_image',$product->meta_image)

@section('meta_url',url()->full())

@section('meta_price',currency($product->unit_price,2))

@section('meta_color','Black')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/sub-page.css') }}">

<style>
    .mid-search, .manu-bar, .top-bar,.mair-right{
        display: none;
    }
    
</style>
    
    <!-- Shop Details Start -->
    <section class="shop-details multivendor-shop-details-section ">
        <div class="container">
            <div class="product-details-layout d-flex justify-content-center">
                <div class="layout-items">

                    <h2 class="product-name">
                        {{ $product->name }}
                       
                    </h2>

                    <!-- Primary carousel image -->

                    @if($product->images->first()->image ?? false)
                        <div class="show product-zoom-thumb" href="{{ asset('uploads/products/galleries/'.$product->images->first()->image ?? '') }}" >
                            <img src="{{ asset('uploads/products/galleries/'.$product->images->first()->image ?? '') }}" id="show-img" alt="{{ $product->name }}">
                        </div>
                    @endif


                    <!-- Secondary carousel image thumbnail gallery -->

                    <div class="small-img">
                        <div class="icon-left" id="prev-img"><i class="fas fa-chevron-left"></i></div>
                            <img src="images/next-icon.png"  alt="" id="prev-img">
                            <div class="small-container">
                                <div id="small-img-roll">
                                    @foreach($product->images as $image)
                                        <img src="{{ asset('uploads/products/galleries/'.$image->image) }}" class="show-small-img" alt="product-thumbnail-sm">

                                    @endforeach
                                </div>
                            </div>
                        <div class="icon-right" id="next-img"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="layout-items position-center">
                    <div class="multiventors-details-middle new-product-detais">
                        <div class="title-area">
                            <h2>
                                {{ $product->name }}
                                {{-- @if ($product->video->video_link ?? false)
                                    <a target="_blank" href="{{ $product->video->video_link ?? '' }}" class="text-danger"><i class="fa-solid fa-circle-play"></i></a>
                                @endif --}}
                            </h2>

                            <div class="multivendor-price" data-product-quantity="{{$product->quantity}}">
                                @if ($product->quantity && $product->is_manage_stock)
                                    <small class="m-2">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="19" height="19" rx="9.5" fill="#13E291"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0301 6.45179L8.44376 10.2687L6.97682 8.78573C6.64346 8.44873 6.09956 8.44725 5.76435 8.78244C5.43125 9.11552 5.43032 9.65528 5.76228 9.98953L8.44378 12.6896L13.2404 7.6623C13.5746 7.32807 13.5747 6.78613 13.2404 6.45189C12.9062 6.11764 12.3643 6.11759 12.0301 6.45179Z" fill="white"/>
                                        </svg>
                                        {{ __('In Stock') }}
                                    </small>
                                @else
                                    <small class="m-2">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="19" height="19" rx="9.5" fill="red"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0301 6.45179L8.44376 10.2687L6.97682 8.78573C6.64346 8.44873 6.09956 8.44725 5.76435 8.78244C5.43125 9.11552 5.43032 9.65528 5.76228 9.98953L8.44378 12.6896L13.2404 7.6623C13.5746 7.32807 13.5747 6.78613 13.2404 6.45189C12.9062 6.11764 12.3643 6.11759 12.0301 6.45179ZM5.76228 6.45179L12.0301 12.7196M5.76228 12.7196L12.0301 6.45179" stroke="white" stroke-width="1.5"/>
                                        </svg>

                                        {{ __('Sold Out') }}
                                    </small>
                                @endif

                                <div class="sku-text m-2">{{__('Code:')}} {{ $product->sku }}</div>
                                @if($product->details->is_show_stock_quantity)
                                    <div class=" m-2">{{__('Stock Qty:')}} {{ $product->quantity }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="new-price-wrapper">
                            <div class="new-product-details-button-group">
                                @foreach($wholesales as $index=>$wholesale)
                                    <button class="product-qty-btn"><span class="product-min-qty">{{$wholesale->min_range}} </span>{{__('-')}}<span class="product-max-qty">{{$wholesale->max_range}} </span><span> {{__('pcs :')}}</span> <strong>{{ userCurrency('symbol') }} <span class="product-price-all">{{ userCurrency('exchange_rate') * $wholesale->price }} </span> </strong></button>
                                @endforeach
                            </div>
                            <div class="price">
                                <small>Price: </small>

                                <span>{{ userCurrency('symbol')}}
                                    @if(hasPromotion($product->id))
                                        <span id="current_price">{{promotionPrice($product->id,2) }}</span> <del>{{ currency($product->unit_price,2) }}</del>

                                        <small class="offer-percent">{{__('-')}}{{ round((($product->unit_price-promotionPrice($product->id))/$product->unit_price) *100) }} {{__('%')}}</small>

                                    @else
                                        <span id="current_price">{{ number_format(userCurrency('exchange_rate') * $product->sale_price,2) }}</span>@if ($product->discount>0) <del>{{ currency($product->unit_price,2) }}</del>

                                        <small class="offer-percent">{{__('-')}}{{ round((($product->unit_price - $product->sale_price)/$product->unit_price) *100) }} {{__('%')}}</small>
                                        @endif
                                    @endif

                                </span>
                            </div>
                        </div>

                        @if($product->productstock->count() > 0)
                            @if ($product->productstock[0]->color ?? false)
                                <div class="product-size-wrap product-size-v2">
                                    <h6>Color:</h6>
                                    <ul>
                                        @foreach($product->productstock->unique('color_id') ?? [] as $productstock)
                                        @if ($productstock->color->name ?? false)
                                            <li>
                                                <label class="product-size">
                                                    <input name="color" {{--{{ $loop->first ? 'checked':'' }}--}} value="{{ $productstock->color->name }}" type="radio" data-color_id="{{ $productstock->color->id }}" onclick="colorFunction(this.value)" class="color-variation" >
                                                    <span class="checkmark product-color" style="background-color: {{ $productstock->color->hex }}"></span>
                                                </label>
                                            </li>
                                        @endif
                                    @endforeach
                                      
                                    </ul>
                                </div>
                            @endif
                            @if ($product->productstock[0]->size ?? false)
                                <div class="product-size-wrap product-size-v2">
                                    <h6>Size:</h6>
                                    <ul>
                                        @foreach($product->productstock->unique('size_id') ?? [] as $productstock)
                                            @if ($productstock->size->name ?? false)
                                                <li>
                                                    <label class="product-size" >
                                                        <input type="radio" {{--{{ $loop->first ? 'checked':'' }}--}} name="size"  onclick="sizeFunction(this.value)" value="{{ $productstock->size->name ?? '' }}" data-size_id="{{ $productstock->size->id }}" class="size-variation">
                                                        <span class="checkmark">{{ $productstock->size->name ?? '' }}</span>
                                                    </label>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        @endif
                        <div class="new-quantity-area">
                            {{-- <div class="new-quantity-item">
                                <select name="courier" class="form-control" id="courier">
                                    <option disabled selected value="">-{{ __('Select courier') }}-</option>
                                    @if ($product->courieres != 'null' && $product->courieres)
                                        @foreach ($product->courieres as $courier)
                                            <option value="{{ $courier }}">{{ $courier }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div> --}}

                            <div class="new-quantity-item">
                                <h5>{{__('Total Price:')}}</h5>
                                <h5>{{userCurrency('symbol')}}<span id="total_price">
                                        @if(hasPromotion($product->id))
                                            {{promotionPrice($product->id,2) }}
                                        @else
                                            {{ number_format(userCurrency('exchange_rate') * $product->sale_price,2) }}
                                        @endif</span></h5>
                                <small>{{$product->unit}}</small>
                            </div>
                        </div>

                        <div class="new-quantity-area">
                            <div class="new-quantity-item">
                                <h5>{{__('Quantity:')}}</h5>
                                <div class="product-quantity multivents-number">
                                    <form>
                                        <div class="quantity">
                                            <button type="button" class="minus" id="whole_minus" data-key="{{$product->id}}" data-id="{{ $product->id }}"><i class="fal fa-minus"></i></button>
                                            <input type="number" class="input-number" min="1" name="quantity" id="qnty_value"  value="1"  data-id="{{ $product->id }}" @unless ($product->quantity && $product->is_manage_stock) readonly @endunless>
                                            <button type="button" class="plus" id="whole_plus"  data-id="{{ $product->id }}" @unless ($product->quantity && $product->is_manage_stock) disabled @endunless ><i class="fal fa-plus"></i></button>
                                        </div>
                                    </form>
                                </div>
                                @unless ($product->quantity>0)
                                    <strong><span class="text-danger">Out of stock</span></strong>
                                @endunless

                            </div>

                        </div>
                        <div class="cart-button-wrapper" onclick="myFunction()">
                            {{--@if ($product->quantity && $product->is_manage_stock)--}}
                            {{-- <a href="javascript:addToCart({{ $product->id }})" class="btn maan-cartbtn m-2 @unless ($product->quantity && $product->is_manage_stock) disabled @endunless">{{ __('Add to Cart') }}</a> --}}
                            {{-- <a href="javascript:void(0)" data-buynow-url="{{ route('buynow.index', ['product_id' => $product->id]) }}" class="btn buynow-btn m-2 @unless ($product->quantity && $product->is_manage_stock) disabled @endunless">{{ __('Order Now') }}</a> --}}
                            <a href="#billing"class="btn order-now-btn m-2 p-2 @unless ($product->quantity && $product->is_manage_stock) disabled @endunless" style="background:#ff8400; color:#fff; font-weight:600">{{ __('অর্ডার করতে চাই') }}</a>
                            {{-- <a href="javascript:addToWishlist({{ $product->id }})" class="maan-wishlist-btn m-2">
                                <i class="fa-solid fa-heart"></i>
                            </a> --}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-info">
                    <div class="tab-content " id="myTabContent">
                        @if($product->description)
                                <div class="tab-pane fade active show  description-card" id="description" role="tabpanel" aria-labelledby="description-tab">
                                   
                                    {!! $product->description !!}
                                
                                </div>
                        @endif
                        @if($product->pdf_specification)
                            <ul class="nav nav-tabs d-flex justify-content-center" id="myTab">
                                <li class="nav-item d-flex justify-content-center" role="presentation">
                                    <button class="nav-link active" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="false">{{ __('Specifications') }}</button>
                                </li>
                            </ul>
                            <div class="tab-pane fade show active" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                                @if ($product->pdf_specification)
                                    <div class="row">
                                        <div class="col-12">
                                            <embed src="{{ URL::to('uploads/products/pdf').'/'.$product->pdf_specification ?? '' }}" type="application/pdf" width="100%" height="350">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif


                        @if($product->reviews)
                            <ul class="nav nav-tabs d-flex justify-content-center" id="myTab">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">
                                        {{ __('Reviews') }} ({{ $product->reviews->count() }})</button>
                                </li>
                            </ul>
                            <div class="tab-pane fade active show" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                @if($product->reviews->count() == 0)
                                    <p class="woocommerce-noreviews">{{__('There are no reviews yet.')}}</p>
                                @endif
                                <div class="star-rating">
                                    <div class="rateit" data-rateit-value="{{ productRating($product->reviews) }}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                </div>
                                @foreach($product->reviews as $review)
                                    <b>{{ $review->user->first_name }}</b>
                                    <div class="rateit" data-rateit-value="{{ $review->review_point }}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                    <p>{{ $review->review_note }}</p>
                                    <hr>
                                @endforeach
                                @if(auth('customer')->check())
                                    @if(canReview(auth('customer')->id(),$product->id))
                                        <form class="contact-form ajaxform_instant_reload" action="{{ route('customer.review') }}" method="post">
                                            @csrf
                                            <div class="mb-2">
                                                <!-- Product Rating -->
                                                <input type="range" name="review_point" value="5" step="1" id="backing5" required>
                                                <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <div class="col-12">
                                                    <div class="input-group mb-1">
                                                        <textarea class="form-control" name="review_note" ></textarea>
                                                        <span class="label">{{ __('Please write your experience here') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn-anime submit-btn mt-2">{{ __('Submit') }}</button>
                                        </form>
                                    @elseif($pendingReview)
                                        <b>{{ __('Your review is pending') }}</b>
                                    @else
                                        <p>{{ __('You are not eligible to review this product') }}</p>
                                    @endif
                                @else
                                    <p>{{ __('Login to review this product') }}</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>


            {{-- <div class="tab-info">
                <ul class="nav nav-tabs" id="myTab">

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">{{ __('Description') }}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="false">{{ __('Specifications') }}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">
                            {{ __('Reviews') }} ({{ $product->reviews->count() }})</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                        @if ($product->pdf_specification)
                            <div class="row">
                                <div class="col-12">
                                    <embed src="{{ URL::to('uploads/products/pdf').'/'.$product->pdf_specification ?? '' }}" type="application/pdf" width="100%" height="350">
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                        {!! $product->description !!}
                    </div>

                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        @if($product->reviews->count() == 0)
                            <p class="woocommerce-noreviews">{{__('There are no reviews yet.')}}</p>
                        @endif
                        <div class="star-rating">
                            <div class="rateit" data-rateit-value="{{ productRating($product->reviews) }}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                        </div>
                        @foreach($product->reviews as $review)
                            <b>{{ $review->user->first_name }}</b>
                            <div class="rateit" data-rateit-value="{{ $review->review_point }}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                            <p>{{ $review->review_note }}</p>
                            <hr>
                        @endforeach
                        @if(auth('customer')->check())
                            @if(canReview(auth('customer')->id(),$product->id))
                                <form class="contact-form ajaxform_instant_reload" action="{{ route('customer.review') }}" method="post">
                                    @csrf
                                    <div class="mb-2">
                                        <!-- Product Rating -->
                                        <input type="range" name="review_point" value="5" step="1" id="backing5" required>
                                        <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <div class="col-12">
                                            <div class="input-group mb-1">
                                                <textarea class="form-control" name="review_note" required></textarea>
                                                <span class="label">{{ __('Please write your experience here') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-anime submit-btn mt-2">{{ __('Submit') }}</button>
                                </form>
                            @elseif($pendingReview)
                                <b>{{ __('Your review is pending') }}</b>
                            @else
                                <p>{{ __('You are not eligible to review this product') }}</p>
                            @endif
                        @else
                            <p>{{ __('Login to review this product') }}</p>
                        @endif
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    </section>
    <section id="billing"  style="display: none;">
        <br>
        <br>
        <br>
        @include('customer.buynow.sub-checkout')
    </section>
 
    <!-- Shop Details End -->
    <!-- Similar Product Start -->
    {{-- <section class="similar-product pt-5">
        <div class="container">
            <div class="title-center">
                <h4>{{ __('Similar Products') }}</h4>
                <p>{{ __('The Standard chunk of lorem ipsum reproduced below those interested.') }}</p>
            </div>
            <div class="row auto-margin-3">
                @foreach($similarProducts as $similar)
                    <div class="col-sm-6 col-lg-2 col-md-4 col-6">
                        <x-frontend.product-card4 :product="$similar"></x-frontend.product-card4>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <!-- Similar Product End -->

@stop

@push('script')
    <script>
        $('.buynow-btn').on('click', function() {

            let size = $('input[name="size"]:checked').val();
            let color = $('input[name="color"]:checked').val();
            let size_id = $('input[name="size"]:checked').data('size_id');
            let color_id = $('input[name="color"]:checked').data('color_id');
            let buynow_qty = $('.input-number').val();
            let buynow_url = $(this).data('buynow-url');
            let area = $('[name="delivery_charge"]:checked').val();
            if ($('.color-variation').val()){
                if($("input[name='color']:checked").length == 0){
                    swal("{{ __('Please select a color') }}");
                    return false;
                }
            }
            if ($('.color-variation').val()){
                if($("input[name='size']:checked").length == 0){
                    swal("{{ __('Please select a size') }}");
                    return false;
                }
            }
            if($("input[name='delivery_charge']:checked").length == 0){
                swal("{{ __('Please select delivery charge') }}");
                return false;
            }

            let url = buynow_url + '&qty=' + buynow_qty + '&area=' + area + '&color_id=' + color_id + '&color=' + color + '&size_id=' + size_id + '&size=' + size;
            window.location.href = url;
        });
        $('.maan-cartbtn').on('click', function() {

            let size = $('.size-variation').val();
            let color = $('.color-variation').val();
            if (color){
                if($("input[name='color']:checked").length == 0){
                    swal("{{ __(' Please select a color') }}");
                    return false;
                }
            }
            if (size){
                if($("input[name='size']:checked").length == 0){
                    swal("{{ __(' Please select a size') }}");
                    return false;
                }
            }
            if($("input[name='delivery_charge']:checked").length == 0){
                swal("{{ __('Please select delivery charge') }}");
                return false;
            }

        });

    </script>
    <script> 
        function myFunction() {
          document.getElementById('billing').style.display= "block";

          var x = document.getElementById("qnty_value").value;
          var y = document.getElementById("total_price").textContent;
          document.getElementById("qnty").innerHTML = x;
          document.getElementById('qty_input').value = x;
          document.getElementById('sub_total_input').value = y;
          var shipping_cost = document.getElementById("shipping_cost").textContent;
          var grand_total=parseInt(y) + parseInt(shipping_cost);
          document.getElementById('grand_total').innerHTML = grand_total;
       
    

          document.getElementsByClassName("order_total_price").innerHTML = y;
          
          const collection = document.getElementsByClassName("order_total_price");
            for (let i = 0; i < collection.length; i++) {
            collection[i].innerHTML = y;
            }
      
        }
        
        

        function sizeFunction(product_size){
            // var y = document.getElementById("total_price").textContent;

            document.getElementById("product_size").innerHTML = product_size;
            document.getElementById("size_input").value = product_size;
          
            }
            
        function colorFunction(product_color){
            // var y = document.getElementById("total_price").textContent;

            document.getElementById("product_color").innerHTML = product_color;
            document.getElementById("color_input").value = product_color;
          
            }
    function shippingCharge(osc){
        var sub_total=  document.getElementById('sub_total_input').value;
        var shipping_cost_input =  document.getElementById('shipping_cost').value


        var shipping_charge= osc;
        if(shipping_charge==1){
            document.getElementById("shipping_cost").innerHTML = 0;
        }

        else{
          document.getElementById("shipping_cost").innerHTML = shipping_charge;
          var grand_total=parseInt(sub_total) + parseInt(shipping_charge);
          var shipping_cost_input= document.getElementById('shipping_cost_input').value=shipping_charge;
          document.getElementById('grand_total').innerHTML = grand_total;
        }

        console.log(shipping_cost_input);
               
}
      
    </script>
@endpush
