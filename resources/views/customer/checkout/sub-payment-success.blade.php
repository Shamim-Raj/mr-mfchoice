@extends('frontend.layouts.front')

@section('title','Success')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/sub-page.css') }}">

<style>
    .mid-search, .manu-bar, .top-bar, .maan-mybazar-filter, .mair-right ul {
        display: none !important;
    }
    </style>
    
    <section class="shop-list">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 text-center">
                    <h3>{{ __('Thank you for your purchase') }}</h3>
                    <p class="h4">{{ __('Your order no is') }} <b>{{ $order->order_no }}</b></p>
                    <h3>{{ currency(($order->total_amount), 2) }}</h3>
                    <p class="mt-5"></p>
                    <table class="table table-bordered">
                        @foreach($order->items as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset('uploads/products/galleries') }}/{{ CartItem::thumbnail($item->product_id) }}" height="75" alt="{{ CartItem::thumbnail($item->product_id) }}">
                                    <br>
                                    {{ CartItem::name($item->product_id) }}
                                </td>
                                <td>{{ __('Estimated shipping ') }} {{ CartItem::estimatedShippingDays($item->product_id)  }}</td>
                            </tr>
                        @endforeach
                    </table>
                   
                    <p class="my-5">{{ __('We have sent you an email at ') }}{{ auth('customer')->user()->email }}</p>
                </div>
            </div>
        </div>
    </section>

@stop
