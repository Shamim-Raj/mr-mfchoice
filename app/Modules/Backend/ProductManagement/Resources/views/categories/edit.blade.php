@extends('backend.layouts.app')
@section('title','Category - ')
@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/image-uploader/image-uploader.min.css') }}">
@endpush

<style>
    .image-uploader.has-files .upload-text {
        display: block !important;
        text-align: center !important;
    }
    .image-uploader .upload-text {
        position: relative !important;
    
    }
</style>

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
                    <form id="categoryForm" class="add-brand-form ajaxform_instant_reload" action="@auth('admin'){{route('backend.categories.update',$category->id)}}@elseauth('seller'){{route('seller.categories.update',$category->id)}}@endauth" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('productmanagement::categories.form')
                        <div class="col-lg-7 offset-3">
                            <div class="from-submit-btn">
                                <button class="submit-btn" type="submit">{{ __('Update') }}</button>
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
<script src="{{ asset('plugins/image-uploader/image-uploader.min.js') }}"></script>
<script>
    $(function() {
        "use strict";
        $(document).ready(function() {
            let preloaded = [];
            let review_preloaded = [];
            var review_images = <?php echo json_encode($review_images); ?>;

            review_images.forEach(image => {
                review_preloaded.push({
                    id: image.id,
                    src: public_path + '/uploads/review/' + image.image
                });
            });




            $('.input-review-images').imageUploader({
                preloaded: review_preloaded,
                imagesInputName: 'review_images',
                preloadedInputName: 'old_review_images',
                maxSize: 1024 * 10240,
                maxFiles: 4,
                mimes: ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'],
                extensions: undefined
            });
        });
    });
</script>
@endpush
