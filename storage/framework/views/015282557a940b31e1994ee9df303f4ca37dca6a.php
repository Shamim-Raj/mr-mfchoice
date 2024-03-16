<div class="container">
    <div class="add-product-form">
        <div class="row">
            <div class="col-lg-2">
                <p><?php echo e(__('Category')); ?></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group add-input overflow-visible">
                    <select name="category_id"
                            class="form-control category <?php echo e($errors->has('category_id') ? ' is-invalid' : ''); ?>">
                        <option value=""><?php echo e(__('Select Category')); ?></option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat->id); ?>"
                                    <?php if($promo_product->product && $promo_product->product->category_id==$cat->id): ?> selected <?php endif; ?>><?php echo e($cat->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <a class="btn-clone text-center" type="button" href="<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.categories.create')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.categories.create')); ?><?php endif; ?>">+</a>
                    <?php if($errors->has('category_id')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('category_id')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-2">
                <p><?php echo e(__('Brand')); ?></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group add-input overflow-visible">
                    <select name="brand_id"
                    class="form-control brand <?php echo e($errors->has('brand_id') ? ' is-invalid' : ''); ?>">
                        <option value=""><?php echo e(__('Select Brand')); ?></option>
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($brand->id); ?>"
                                    <?php if($promo_product->product && $promo_product->product->brand_id==$brand->id): ?> selected <?php endif; ?>><?php echo e($brand->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <button class="btn-clone">+</button>
                    <a class="btn-clone text-center" type="button" href="<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.brands.create')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.brands.create')); ?><?php endif; ?>">+</a>
                    <?php if($errors->has('brand_id')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('brand_id')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-2">
                <p><?php echo e(__('Product')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group  overflow-visible">
                    <select name="product_id" <?php if(Request::is('admin/promotional_products/create','seller/promotional_products/create')): ?> disabled <?php endif; ?>
                    class="form-control product <?php echo e($errors->has('product_id') ? ' is-invalid' : ''); ?>" required>
                        <option value=""><?php echo e(__('Select Product')); ?></option>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($product->id); ?>"
                                    <?php if($product->id==$promo_product->product_id||$product->id==old('product_id')): ?>
                                    selected <?php endif; ?> ><?php echo e($product->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['product_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <label class="error" id="product_id-error" for="product_id"><?php echo e($message); ?></label>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="col-lg-2">
                <p><?php echo e(__('Promotion Title')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group add-input overflow-visible">
                    <input id="title" type="text"
                           class="form-control<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>"
                           name="title" placeholder="Promotion Title"
                           value="<?php if($promo_product->title): ?><?php echo e($promo_product->title); ?><?php else: ?><?php echo e(old('title')); ?><?php endif; ?>"
                           autofocus required>

                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <label id="title-error" class="error" for="title"><?php echo e($message); ?></label>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="col-lg-2">
                <p><?php echo e(__('Promotion Label')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group add-input overflow-visible">
                    <input id="label" type="text"
                           class="form-control<?php echo e($errors->has('label') ? ' is-invalid' : ''); ?>"
                           name="label" placeholder="Promotion Label"
                           value="<?php if($promo_product->label): ?><?php echo e($promo_product->label); ?><?php else: ?><?php echo e(old('label')); ?><?php endif; ?>"
                           autofocus required>

                    <?php $__errorArgs = ['label'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <label id="label-error" class="error" for="label"><?php echo e($message); ?></label>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="col-lg-2">
                <p><?php echo e(__('Promotion Price')); ?><span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group overflow-visible">
                    <input name="promotion_price" min="0" type="number"
                           class="form-control <?php echo e($errors->has('promotion_price') ? ' is-invalid' : ''); ?>"
                           value="<?php if($promo_product->promotion_price): ?><?php echo e($promo_product->promotion_price); ?><?php else: ?><?php echo e(old('promotion_price')??0); ?><?php endif; ?>"
                           placeholder="0" required>
                    <?php $__errorArgs = ['promotion_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <label class="error " id="promotion_price-error" for="promotion_price">
                        <?php echo e($message); ?>

                    </label>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="col-lg-2">
                <p><?php echo e(__('Expire At')); ?></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group month overflow-visible">
                    <input name="expire_at" type="date"
                           value="<?php if($promo_product->expire_at): ?><?php echo e(date("Y-m-d",strtotime($promo_product->expire_at))); ?><?php else: ?><?php echo e(old('expire_at')); ?><?php endif; ?>"
                           class="form-control <?php $__errorArgs = ['expire_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                </div>
            </div>

            <div class="col-lg-2">
                <p><?php echo e(__('Position')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group  overflow-visible">
                    <select name="position"
                            class="form-select form-control <?php echo e($errors->has('position') ? ' is-invalid' : ''); ?>"
                            required>
                        <option value=""><?php echo e(__('Select Position')); ?></option>
                        <option value="1" data-size="212x120"
                                <?php if($promo_product->position=='1' ||'1'==old('position')): ?> selected <?php endif; ?>><?php echo e(__('position 1')); ?></option>
                        <option value="2" data-size="300x300"
                                <?php if($promo_product->position=='2' ||'2'==old('position')): ?> selected <?php endif; ?>><?php echo e(__('position 2')); ?></option>
                        <option value="3" data-size="1410x250"
                                <?php if($promo_product->position=='3' ||'3'==old('position')): ?> selected <?php endif; ?>><?php echo e(__('position 3')); ?></option>
                        <option value="4" data-size="1304x553"
                                <?php if($promo_product->position=='4' ||'4'==old('position')): ?> selected <?php endif; ?>><?php echo e(__('position 4')); ?></option>
                    </select>
                    <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <label id="position-error" class="error" for="position"><?php echo e($message); ?></label>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="container bg-tr">
    <div class="row">
        <div class="col-lg-12 center-content">
            <div class="card">
                <div class="card-header">
                    <h4><?php echo e(__('Promotion Images')); ?></h4>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="row <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="image">
                            <div class="col-lg-2">
                                <p><?php echo e(__('Image')); ?>

                                    <span class="size"
                                          id="image_size"><?php echo e(old('image_size')?'('.old('image_size').')':''); ?></span>
                                </p>

                            </div>
                            <div class="col-lg-4">
                                <div class="sm-title-group">
                                    <div class="input-group file-upload overflow-visible">
                                        <label class="file-title">Browse</label>
                                        <input type="file" name="image" accept="image/*" onchange="document.getElementById('promo_picture').src = window.URL.createObjectURL(this.files[0])"
                                               class="form-control<?php echo e($errors->has('image') ? ' is-invalid' : ''); ?>">
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
                                    <span class="sm-text"> <?php echo e(__('Use')); ?> <?php echo e(old('image_size')); ?> <?php echo e(__('sizes image')); ?></span>
                                </div>
                                <span class="sm-text small"> <?php echo e(__('212x120 size for position 1, 300x300 size for position 2, 1410x250 size for position 3, 1304x553 size for position 4')); ?> </span>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4">
                                <img id="promo_picture" width="300px" height="150px"
                                     src="<?php echo e(URL::to('uploads/promotions/'.$promo_product->image)); ?>" alt="promotin image"/>
                                <div class="clearfix"></div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function () {
            "use strict";

            $(".category").select2({
                // placeholder: "Type"
            });
            $(".brand").select2({
                // placeholder: "Type"
            });
            $(".product").select2({
                // placeholder: "Type"
            });
            // validate form on keyup and submit
            $("#promo_productsForm").validate();

            $('.category').on('select2:select', function (e) {
                $('.product').val(null).trigger('change');
            });
            $('.category').on('select2:select', function (e) {
                var data = e.params.data;
                if (data.id) {
                    $('.add-product-form').find('.product').prop('disabled', false);
                    var cat_id = data.id;
                    var brand_id = $('.brand').find(':selected').val();
                    let ids;
                    if(brand_id)
                        ids = {'cat_id': cat_id, 'brand_id': brand_id};
                    else
                        ids = {'cat_id': cat_id};
                    if (cat_id) {
                        getProducts(ids);
                    }
                }
            });
            $('.brand').on('select2:select', function (e) {
                var data = e.params.data;
                if (data.id) {
                    $('.add-product-form').find('.product').prop('disabled', false);
                    var brand_id = data.id;
                    var cat_id = $('.category').find(':selected').val();
                    let ids;
                    if(cat_id)
                        ids = {'cat_id': cat_id, 'brand_id': brand_id};
                    else
                        ids = {'brand_id': brand_id};
                    if (brand_id) {
                        getProducts(ids);
                    }
                }
            });

            function getProducts(data){
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path + <?php if(auth()->guard('admin')->check()): ?>'/admin/_products'<?php elseif(auth()->guard('seller')->check()): ?>'/seller/_products'<?php endif; ?>,
                    data: data,
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
            };

            $(document).on('change', 'select[name="position"]', function () {
                let position = $(this).find(':selected').val();
                let size = $(this).find(':selected').data('size');
                if (size && position) {
                    $('select[name=image_size]').val(size);
                    $(document).find('#image_size').html('( ' + size + ' )');
                    $(document).find('.sm-title-group .sm-text').html('Use ' + size + ' sizes image');
                } else {
                    $(document).find('#image_size').html('');
                    $(document).find('.sm-title-group .sm-text').html('');
                }
            });

        });

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/app/Modules/Backend/ProductManagement/Resources/views/promotional_products/form.blade.php ENDPATH**/ ?>