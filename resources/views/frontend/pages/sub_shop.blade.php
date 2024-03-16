@extends('frontend.layouts.front')

@section('title',$title ?? 'Shop')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/sub-page.css') }}">

<style>
    .mid-search, .manu-bar, .top-bar, .maan-mybazar-filter, .mair-right ul {
        display: none !important;
    }
        footer{
            display:none !important;
        }
    

</style>
    <!-- Breadcrumb Start -->
    <nav class="breadcrumb-manu maan-shop-breadcrumb" aria-label="breadcrumb" data-background="{{ asset('frontend/img/breadcrumb.png') }}">
        <h3>{{ $title ?? 'Shop' }}</h3>
    </nav>
    <!-- Breadcrumb End -->
    <section class="product pt-5">
        <div class="container">
            <div class="row pt-5 pb-2 ">
                <div class="coll-lg-12 sub-title">
                   <h3> {{$category->name}} </h3>
                    
                {{-- @foreach($categories as $category)
                    <li>
                        <input type="radio" name="category" data-name="{{ $category->name }}" class="category-check" id="{{ $category->slug }}" value="{{ $category->id }}" {{ $category->slug == Request::segment(2) ? 'checked' : '' }}>
                        <label for="{{ $category->slug }}">{{ $category->name }} ({{ $category->productCount() }})</label>
                    </li>
                @endforeach --}}
                    
                </div>
            </div>
            <div class="row p-1">
                <div class="coll-lg-12 d-flex justify-content-center product-video">
               @foreach($category->products  as $key=> $product)
                {{-- @if($key == 0) --}}
           
                    @if ($product->video)
                        <iframe width="880" height="520" src="{{$product->video->video_link}}" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    @endif
                @endforeach 
                {{-- {{$video->video_link[0]}} --}}
     
                </div>
            </div>
            <div class="row py-4">
                <div class="coll-lg-12 sub-title">
                   <h3> {{$category->meta_title}} </h3>
                </div>
            </div>

            <div class="row p-1">
                <div class="coll-lg-12 d-flex justify-content-center category-img">
                    <img src="{{asset('uploads/categories/200x200/'.$category->banner ?? '' )}}" alt="">
                </div>
            </div>
                    @if($category->title1)
                        <div class="row pt-5">
                            <div class="coll-lg-12 sub-title" style="background:#2C7F12;">
                            <h3 class="text-light"> {{$category->title1 ?? ''}} </h3>
                            </div>
                        </div>
                    @endif        
                    @if($category->description1)
                            <div class="tab-pane fade active show pt-4 px-2 mt-3 description-card" id="description" role="tabpanel" aria-labelledby="description-tab">
                                {!! $category->description1 !!}
                            </div>
                    @endif
                    @if($category->title2)
                        <div class="row pt-5">
                            <div class="coll-lg-12 sub-title" style="background:#2C7F12;">
                            <h3 class="text-light"> {{$category->title2 ?? ''}} </h3>
                            </div>
                        </div>
                    @endif             
                    @if($category->description2)              
                        <div class="tab-pane fade active show pt-4 px-2 mt-3 description-card" id="description" role="tabpanel" aria-labelledby="description-tab">
                            {!! $category->description2 !!}
                        </div>     
                    @endif
                
            {{-- <div class="row p-5">
                <div class="coll-lg-12">
                    @if($category->meta_description)
                      
                           <div class="d-flex justify-content-center">
                                <button class="border-0 px-5 py-2 text-light description-tab" style="background: var(--color-orange)" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">{{ __('Description') }}</button>
                           </div>

                            <div class="tab-pane fade active show pt-4" id="description" role="tabpanel" aria-labelledby="description-tab">
                                {!! $category->meta_description !!}
                            </div>
                    @endif
                </div>
            </div> --}}
        </div>



    <!-- Shop List Start -->
    <section class="shop-list mybazar-product-with-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-lg-last" id="product-area">
                    <!-- ** ajax loader start ** -->
                    <div id="product-loader">
                        <div class="overlay-content">
                            <img src="{{ asset('frontend/img/loader/bar.gif') }}" alt="Loading..." />
                        </div>
                    </div>
                    <!-- ** ajax loader end ** -->
                    <div class="maan-mybazar-filter">
                        <div class="maan-filter-wrapper">
                            <div class="filter-left">
                                <p class="m-0">
                                    @if($products->count() > 0)
                                        {{ $products->firstItem() }} - {{ $products->lastItem() }} {{ __('of') }}
                                    @endif
                                    {{ $products->total() }} {{ __('Results') }}
                                </p>
                            </div>
                            <div class="maan-filter-right">
                                <select name="sorting" id="sorting">
                                    <option selected="selected" disabled>{{ __('SORT BY') }}</option>
                                    <option value="price">{{ __('Price') }}</option>
                                    <option value="popularity">{{ __('Popularity') }}</option>
                                </select>
                                <div class="nav filter-grid">
                                    <h5>{{ __('View') }}</h5>
                                    <a class="active" href="#ShopGrid" data-bs-toggle="tab">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="26" viewBox="0 0 24 26">
                                            <defs>
                                                <clipPath id="clip-path">
                                                    <rect width="24" height="26" fill="none"/>
                                                </clipPath>
                                            </defs>
                                            <g id="Repeat_Grid_1" data-name="Repeat Grid 1" clip-path="url(#clip-path)">
                                                <g transform="translate(-1676 -611)">
                                                    <rect id="Rectangle_146" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1667 -611)">
                                                    <rect id="Rectangle_146-2" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1658 -611)">
                                                    <rect id="Rectangle_146-3" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1676 -601)">
                                                    <rect id="Rectangle_146-4" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1667 -601)">
                                                    <rect id="Rectangle_146-5" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1658 -601)">
                                                    <rect id="Rectangle_146-6" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1676 -591)">
                                                    <rect id="Rectangle_146-7" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1667 -591)">
                                                    <rect id="Rectangle_146-8" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1658 -591)">
                                                    <rect id="Rectangle_146-9" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="#ShopList" data-bs-toggle="tab">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                                            <g id="Group_182" data-name="Group 182" transform="translate(-1430 -578)">
                                                <rect id="Rectangle_147" data-name="Rectangle 147" width="26" height="4" transform="translate(1430 578)" fill="#ff8400"/>
                                                <rect id="Rectangle_148" data-name="Rectangle 148" width="26" height="4" transform="translate(1430 585)" fill="#ff8400"/>
                                                <rect id="Rectangle_149" data-name="Rectangle 149" width="26" height="4" transform="translate(1430 593)" fill="#ff8400"/>
                                                <rect id="Rectangle_150" data-name="Rectangle 150" width="26" height="4" transform="translate(1430 600)" fill="#ff8400"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="ShopGrid">
                            <div class="row auto-margin-3">
                                <!-- ** ajax loader start ** -->
                                <div id="product-loader">
                                    <div class="overlay-content">
                                        <img src="{{ asset('frontend/img/loader/bar.gif') }}" alt="Loading..." />
                                    </div>
                                </div>
                                <!-- ** ajax loader end ** -->
                                @if($products->count() == 0)
                                    <div class="text-center">
                                        <p>{{ __('Not available. Try search with different keyword') }}</p>
                                    </div>
                                @endif
                                @foreach($products as $product)
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                                        <x-frontend.sub-product-card :product="$product"></x-frontend.sub-product-card>
                                    </div>
                                @endforeach
                                <x-frontend.page-navigation-ajax :paginator="$products"></x-frontend.page-navigation-ajax>
                            </div>
                        </div>

                        <!-- shop list items -->
                        <div class="tab-pane fade" id="ShopList">
                            <div class="row auto-margin-3" id="product-area">
                                @if($products->count() == 0)
                                    <div class="text-center">
                                        <p>{{ __('Not available. Try search with different keyword') }}</p>
                                    </div>
                                @endif
                                <div class="col-lg-12">
                                    @foreach($products as $product)
                                        <x-frontend.product-card3 :product="$product"></x-frontend.product-card3>
                                    @endforeach
                                </div>
                                <x-frontend.page-navigation-ajax :paginator="$products"></x-frontend.page-navigation-ajax>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-3">
                    <div class="sidebar">
                        <x-frontend.category-widget :categories="$categories"></x-frontend.category-widget>
                        <x-frontend.brand-widget :brands="$brands"></x-frontend.brand-widget>
                        <x-frontend.price-widget :prices="$prices"></x-frontend.price-widget>
                        <x-frontend.color-widget :colors="$colors"></x-frontend.color-widget>
                        <x-frontend.size-widget :sizes="$sizes"></x-frontend.size-widget>
                        <div class="sidebar-widget">
                            <x-frontend.product-widget :title="'Popular Today'" :products="$populars"></x-frontend.product-widget>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Shop List End -->

    <section class="product-review">
        <div class="container">
            <h3 class="text-center pb-5"> Product Review </h3>
            <div class="row">
                @foreach($review_images as $review_image)
                   @if($review_image->deleted_at == null)
                    <div class="col-6 review-image col-lg-3">
                        <img src="{{asset('uploads/review/'.$review_image->image)}}" alt="">
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>   
@stop
