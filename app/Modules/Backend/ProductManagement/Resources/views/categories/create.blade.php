@extends('backend.layouts.app')
@section('title','Category - ')
@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/image-uploader/image-uploader.min.css') }}">
    <style>
        .image-uploader.has-files .upload-text {
            display: block;
            text-align: center;
        }
        .image-uploader .upload-text {
            position: relative;
        
        }
        
    </style>
@endpush
@section('content')
    <div class="content-body">
    @include('productmanagement::includes.product_management')
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-category" role="tabpanel" aria-labelledby="add-category-tab">
                <div class="container content-title">
                    <h4>{{__('Category Information')}}</h4>
                </div>
                <div class="container">
                    <form id="categoryForm" method="post" action="@auth('admin'){{route('backend.categories.store')}}@elseauth('seller'){{route('seller.categories.store')}}@endauth" enctype="multipart/form-data" class="add-brand-form ajaxform_instant_reload">
                        @csrf()
                        @include('productmanagement::categories.form')
                        <div class="col-lg-7 offset-3">
                            <div class="from-submit-btn">
                                <button class="submit-btn" type="submit">{{__('Save')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>
@endsection
@push('js')
@include('productmanagement::categories.product-js')

<script src="{{ asset('plugins/image-uploader/image-uploader.min.js') }}"></script>

           <script>
                $(document).ready(function () {
                    "use strict";

                    $('.input-review-images').imageUploader({
                        imagesInputName: 'review_images',
                        preloadedInputName: 'old'
                    });
                });
            </script>

@endpush
