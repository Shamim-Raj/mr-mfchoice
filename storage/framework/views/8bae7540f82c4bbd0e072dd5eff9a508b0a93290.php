<div class="row">
    <div class="col-lg-3">
        <p><?php echo e(__('Category')); ?> <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <select name="category_id"
                    class="form-select category form-control<?php echo e($errors->has('category_id') ? ' is-invalid' : ''); ?>"
                    required>
                <option value=""><?php echo e(__('Select Category')); ?></option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($cat->id); ?>" data-id="<?php echo e($cat->id); ?>"
                            <?php if($cat->id==$banner->category_id || $cat->id==old('category_id')): ?> selected <?php endif; ?> ><?php echo e($cat->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if($errors->has('category_id')): ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('category_id')); ?></strong>
            </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Title')); ?> <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input name="title" type="text" required
                   class="form-control <?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>"
                   value="<?php if($banner->title): ?><?php echo e($banner->title); ?><?php else: ?><?php echo e(old('title')); ?><?php endif; ?>"
                   placeholder="Banner Title">
            <?php if($errors->has('title')): ?>
                <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('title')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Sub-Title')); ?> </p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input name="sub_title" type="text"
                   class="form-control <?php echo e($errors->has('sub_title') ? ' is-invalid' : ''); ?>"
                   value="<?php if($banner->sub_title): ?><?php echo e($banner->sub_title); ?><?php else: ?><?php echo e(old('sub_title')); ?><?php endif; ?>"
                   placeholder="Banner Sub-Title">
            <?php if($errors->has('sub_title')): ?>
                <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('sub_title')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Offer-Title')); ?> <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input name="offer_title" type="text"
                   class="form-control <?php echo e($errors->has('offer_title') ? ' is-invalid' : ''); ?>"
                   value="<?php if($banner->offer_title): ?><?php echo e($banner->offer_title); ?><?php else: ?><?php echo e(old('offer_title')); ?><?php endif; ?>"
                   placeholder="Offer-Title" required>
            <?php $__errorArgs = ['offer_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <label id="offer_title-error" class="invalid-feedback error" for="offer_title"><?php echo e($message); ?></label>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Target')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <select name="target"
                    class="form-select form-control<?php echo e($errors->has('target') ? ' is-invalid' : ''); ?>">
                <option value=""><?php echo e(__('Select Target')); ?></option>
                <option value="_self" selected >_Self</option>
                <option value="_blank" <?php if('_blank'==$banner->target): ?>) selected <?php endif; ?> >_Blank</option>
                <option value="_top" <?php if('_top'==$banner->target): ?>) selected <?php endif; ?> >_Top</option>
                <option value="_parent" <?php if('_parent'==$banner->target): ?>) selected <?php endif; ?> >_Parent</option>
            </select>

            <?php $__errorArgs = ['target'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <label id="target-error" class="invalid-feedback error" for="target"><?php echo e($message); ?></label>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Type')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <select name="type"
                    class="form-select form-control<?php echo e($errors->has('type') ? ' is-invalid' : ''); ?>"
                    required>
                <option value=""><?php echo e(__('Select Type')); ?></option>
                <option value="banner"  selected >Banner</option>
            </select>
            <?php if($errors->has('type')): ?>
                <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('type')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Description')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <textarea name="description"
                      class="form-control"><?php if($banner->description): ?><?php echo e($banner->description); ?><?php else: ?><?php echo e(old('description')); ?><?php endif; ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Expire At')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group month overflow-visible">
            <input name="expire_at" type="date" min="<?php echo e(date("Y-m-d")); ?>"
                   value="<?php if($banner->expire_at): ?><?php echo e(date("Y-m-d",strtotime($banner->expire_at))); ?><?php else: ?><?php echo e(old('expire_at')); ?><?php endif; ?>"
                   class="form-control <?php $__errorArgs = ['expire_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

            <?php $__errorArgs = ['expire_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Image')); ?> <?php if(Request::is('admin/banners/create','seller/banners/create')): ?> <span class="text-red">*</span> <?php endif; ?> </p>
    </div>
    <div class="col-lg-7">
        <div class="sm-title-group">
            <div class="input-group file-upload overflow-visible">
                <label class="file-title">Browse</label>
                <input type="file" name="image"
                       class="form-control<?php echo e($errors->has('image') ? ' is-invalid' : ''); ?>"
                       <?php if(Request::is('admin/banners/create','seller/banners/create')): ?> required <?php endif; ?>>
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <label id="image-error" class="error" for="image"><?php echo e($message); ?></label>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('js'); ?>
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {

                // validate form on keyup and submit
                $("#bannerForm").validate();

                $(document).on("change", '.category', function () {
                    $(".subcategory option").removeAttr("disabled");
                    var id = ($(this).find(":selected").data("id"));
                    $("#bannerForm .subcategory option[data-id]:not([data-id='" + id + "'])").attr("disabled", "true");
                });
                $(".category").select2({
                    // placeholder: "Type"
                });
                $(".brand").select2({
                    // placeholder: "Type"
                });
                $(".product").select2({
                    // placeholder: "Type"
                });

                $('.category').on('select2:select', function (e) {
                    $('.add-product-form').find('.brand').prop('disabled', false);
                    $('.brand').val(null).trigger('change');
                    $('.product').val(null).trigger('change');
                });
                $('.brand').on('select2:select', function (e) {
                    var data = e.params.data;
                    if (data.id) {
                        $('.add-product-form').find('.product').prop('disabled', false);
                        var brand_id = data.id;
                        var cat_id = $('.category').find(':selected').val();
                        if (cat_id && brand_id) {
                            $.ajax({
                                type: "GET",
                                dataType: "json",
                                url: public_path + '/_products',
                                data: {'cat_id': cat_id, 'brand_id': brand_id},
                                success: function (data) {
                                    if (data.success) {
                                        $('.product option').remove();
                                        var option = new Option('Select Product', '', false, false);
                                        $('.product').append(option);
                                        data.products.forEach(function (product, index) {
                                            var option = new Option(product.name, product.id, false, false);
                                            $('.product').append(option);
                                        });
                                        $('.product').val(null).trigger('change');
                                    }
                                }
                            });
                        }
                    } else {
                        $('.add-product-form').find('.product').prop('disabled', true);
                    }
                });
            });
        })(jQuery);

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/content_management/banners/form.blade.php ENDPATH**/ ?>