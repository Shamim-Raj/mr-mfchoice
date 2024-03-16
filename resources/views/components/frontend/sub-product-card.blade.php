<div class="product-card">
    <div class="product-img">
        <a href="{{ url('product-details',$product->slug) }}">
            @if($product->images->first()->image ?? false)
            <img src="{{ asset('uploads/products/galleries/'.$product->images->first()->image ?? '') }}" class="b-1" alt="{{ $product->name }}" >
         <button class="want-order">অর্ডার করতে চাই</button>

            @endif

            @if ($product->quantity <= 0 && $product->is_manage_stock)
                <small class="sold-out">Sold out</small>
            @endif
        </a>
        @isset($product->details->flash_deal_title)
            @if($product->details->flash_deal_title == '')
                <span></span>
            @else
                <span class="tag">{{ $product->details->flash_deal_title }}</span>
            @endif
        @endisset
        @if($product->quantity <= 0 && $product->is_manage_stock)
            <div class="stock-out">
                <p>Stock Out</p>
            </div>
        @endif
        <ul class="product-cart">
            <li><a href="javascript:addToWishlist({{ $product->id }})"><span class="icon"><i class="fa-regular fa-heart"></i></span></a></li>
            <li><a href="javascript:buyNow({{$product->id}})"><span class="text">{{ __('BUY NOW') }}</span></a></li>
            <li><a href="javascript:addToCart({{ $product->id }})"><span class="icon"><i class="fas fa-{{ $product->quantity ? 'cart-shopping' : 'circle-xmark text-danger' }}"></i></span></a></li>
        </ul>
    </div>
    <div class="product-card-details">

        <h5 class="title"><a href="{{ url('product-details',$product->slug) }}">{{ $product->name }}</a></h5>
        @if(hasPromotion($product->id))
            <span class="price">{{ currency(promotionPrice($product->id)) }}</span>
            <span class=""><del class="text-secondary">{{ currency($product->unit_price) }}</del> <small class="text-secondary">{{__('-')}} {{ round((($product->unit_price-promotionPrice($product->id))/$product->unit_price) *100) }}{{__('%')}}</small></span>
        @else
            @if($product->discount > 0)
            <span class="price">{{ currency(($product->sale_price)) }} </span>
                <span class=""><del class="text-secondary">{{ currency($product->unit_price) }}</del> <small class="text-secondary"> {{__('-')}}@if($product->discount_type=='percentage'){{$product->discount}}@elseif($product->discount_type=='fixed'){{ round(($product->discount/$product->unit_price) *100) }} @endif{{__('%')}}</small></span>
            @else
                <span class="price">{{ currency($product->unit_price) }}</span>
            @endif
        @endif
        {{-- <div class="d-flex justify-content-between">
            <div class="star-rating">
                <div class="rateit" data-rateit-value="{{ productRating($product->reviews) }}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
            </div>
        </div> --}}
    </div>
</div>
