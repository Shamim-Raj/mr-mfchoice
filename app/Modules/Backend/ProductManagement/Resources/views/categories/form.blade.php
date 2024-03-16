<div class="row">
    <div class="col-lg-3">
        <p>{{__('Name')}} <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7 mb-2">
        <input id="name" type="text" class="form-control" name="name" value="@if($category->name){{$category->name}}@else{{ old('name') }}@endif" required placeholder="Name" autofocus>
    </div>
    <div class="col-lg-3">
        <p>{{__('Parent Category')}}</p>
    </div>
    <div class="col-lg-7">
        <div class="overflow-visible">
            <select name="category_id" class="parent form-select form-control">
                <option value="">{{ __('Select Category') }}</option>
                @foreach ($categories as $key => $cat)
                    <option value="{{ $cat->id }}">
                        {{ $cat->name }}
                    </option>
                    @if (isset($cat->children))
                        @include('productmanagement::includes.category_option', [
                            'child' => 1,
                            'categories' => $cat->children,
                        ])
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-3">
        <p>{{ __('Slug') }} <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input id="slug" type="text" class="form-control" name="slug" value="{{ $category->slug }}" required="" placeholder="Slug" autofocus="">
        </div>
    </div>
    <div class="col-lg-3">
        <p>{{('Ordering Number')}}</p>
    </div>
    <div class="col-lg-7">
        <div class="sm-title-group">
            <div class="oder-input">
                <input name="order" min="0" max="1000" type="number" class="form-control" placeholder="Order Level" value="@if($category->order){{$category->order}}@else{{ old('order') }}@endif">
            </div>
            <span class="sm-text">{{__('Higher number has high priority')}}</span>
        </div>
    </div>

    <div class="col-lg-3 has-parent">
        <p>{{__('Banner(200x200)')}}</p>
    </div>
    <div class="col-lg-7 mb-2 has-parent">
        <div class="input-group file-upload">
            <label class="file-title">Browse</label>
            <input id="banner" type="file" class="form-control" name="banner" accept="image/*">
        </div>
    </div>
    <div class="col-lg-3 has-parent">
        <p>{{__('Image(32x32)')}}</p>
    </div>
    <div class="col-lg-7 mb-3 has-parent">
        <div class="input-group file-upload">
            <label class="file-title">Browse</label>
            <input id="icon" type="file" class="form-control" name="icon" accept="image/*">
        </div>
    </div>

    <div class="container bg-tr">
        <div class="row">
            <div class="col-lg-8 center-content">

                <div class="card">
                    <div class="card-header">
                        <h4>{{ __('Review Images') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <p>{{ __('Review Images') }} <span class="text-red">*</span></p>
                            </div>
                            <div class="col-lg-8">
                                <div class="sm-title-group">
                                    <div class="input-review-images"></div>
                                    <span class="sm-text product_image">{{ __('Use 330x430 size image for Best Fit.Minimum 1 and maximum 4 image.These images are visible in product details page gallery.') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
     </div>
            


     

                <div class="card">
                    <div class="card-header">
                        <h6>{{ __('Shipping Configuration') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <p>{{ __('Free Shipping') }}</p>
                            </div>
                            <div class="col-3">
                                <div class="form-switch">
                                    <input type="hidden" value="0" name="is_free_shipping">
                                    <input name="is_free_shipping" value="1" class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="col-9">
                                <p>{{ __('Flat Rate') }}</p>
                            </div>
                            <div class="col-3">
                                <div class="form-switch">
                                    <input type="hidden" value="0" name="is_flat_rate">
                                    <input name="is_flat_rate" value="1" class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="col-9">
                                <p>{{ __('Product Wise Shipping') }}</p>
                            </div>
                            <div class="col-3">
                                <div class="form-switch">
                                    <input type="hidden" value="0" name="is_product_wise_shipping">
                                    <input name="is_product_wise_shipping" value="1" class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="col-9">
                                <p>{{ __('Is Product Quantity Multiply') }}</p>
                            </div>
                            <div class="col-3">
                                <div class="form-switch">
                                    <input type="hidden" value="0" name="is_quantity_multiply">
                                    <input name="is_quantity_multiply" value="1" class="form-check-input" type="checkbox">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        




    <div class="col-lg-3">
        <p>{{__('Description Title - 1')}}</p>
    </div>
    <div class="col-lg-7">
        <input name="title1" type="text"  class="form-control" value="@if($category->title1){{$category->title1}}@else{{ old('title1') }}@endif" placeholder="Title">
    </div>
    <div class="col-lg-3">
        <p>{{__('Description - 1')}}</p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <textarea name="description1" class="editor" id="textEditor">
                @if ($category->description1 != "''")
                {{ $category->description1 }}@else{{ old('description1') }}
                @endif
            </textarea>
        </div>
    </div>


    <div class="col-lg-3">
        <p>{{__('Description Title - 2')}}</p>
    </div>
    <div class="col-lg-7">
        <input name="title2" type="text"  class="form-control" value="@if($category->title2){{$category->title2}}@else{{ old('title2') }}@endif" placeholder="Title">
    </div>
    <div class="col-lg-3">
        <p>{{__('Description - 2')}}</p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <textarea name="description2" class="editor" id="textEditor">
                @if ($category->description2 != "''")
                {{ $category->description2 }}@else{{ old('description2') }}
                @endif
            </textarea>
        </div>
    </div>
    <div class="col-lg-3">
        <p>{{__('Meta Title')}}</p>
    </div>
    <div class="col-lg-7">
        <input name="meta_title" type="text" class="form-control" value="@if($category->meta_title){{$category->meta_title}}@else{{ old('meta_title') }}@endif" placeholder="Meta Title">
    </div>
    <div class="col-lg-3">
        <p>{{__('Meta description')}}</p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <textarea name="meta_description" class="form-control">@if($category->meta_description){{$category->meta_description}}@else{{ old('meta_description') }}@endif</textarea>
        </div>
    </div>




    <div class="col-lg-3">
        <p>{{__('Commission Rate')}} <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group commission-group overflow-visible">
            <input type="number" min="0" step="0.1" max="100" name="commission_rate" class="commission-input" placeholder="Commission Rate" value="@if($category->commission_rate){{$category->commission_rate}}@else{{ old('commission_rate')??0 }}@endif" min="1" required>
            <span class="commission-persent">%</span>
        </div>
    </div>
    <div class="col-lg-3">
    </div>
    <div class="col-lg-7">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="for_menu" name="for_menu" @if($category->for_menu) checked @endif>
            <label class="form-check-label" for="for_menu">
                {{ __("Would you like to add this to the top menu?") }}
            </label>
        </div>
    </div>
</div>

@push('js')
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {
                $(".parent").select2();

                $('#name').keyup(function(event) {
                    $("input[name='slug']").val(clean($(this).val()));
                    $("input[name='meta_title']").val(clean($(this).val()));
                });

                checkCateId();
                $('.parent').on('change', function() {
                    checkCateId();
                })

                function checkCateId() {
                    if (!$('.parent').val()) {
                        $('.has-parent').removeClass('d-none');
                    } else {
                        $('.has-parent').addClass('d-none');
                    }
                }
            });
        })(jQuery);

        $('.editor').summernote({
                tabsize: 2,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview', 'help']]
                ]
            })
    </script>
@endpush

 