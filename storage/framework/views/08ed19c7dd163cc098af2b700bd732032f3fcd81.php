<div class="row">
    <div class="col-lg-3">
        <p><?php echo e(__('Name')); ?> <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7 mb-2">
        <input id="name" type="text" class="form-control" name="name" value="<?php if($category->name): ?><?php echo e($category->name); ?><?php else: ?><?php echo e(old('name')); ?><?php endif; ?>" required placeholder="Name" autofocus>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Parent Category')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="overflow-visible">
            <select name="category_id" class="parent form-select form-control">
                <option value=""><?php echo e(__('Select Category')); ?></option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($cat->id); ?>">
                        <?php echo e($cat->name); ?>

                    </option>
                    <?php if(isset($cat->children)): ?>
                        <?php echo $__env->make('productmanagement::includes.category_option', [
                            'child' => 1,
                            'categories' => $cat->children,
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Slug')); ?> <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input id="slug" type="text" class="form-control" name="slug" value="<?php echo e($category->slug); ?>" required="" placeholder="Slug" autofocus="">
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(('Ordering Number')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="sm-title-group">
            <div class="oder-input">
                <input name="order" min="0" max="1000" type="number" class="form-control" placeholder="Order Level" value="<?php if($category->order): ?><?php echo e($category->order); ?><?php else: ?><?php echo e(old('order')); ?><?php endif; ?>">
            </div>
            <span class="sm-text"><?php echo e(__('Higher number has high priority')); ?></span>
        </div>
    </div>

    <div class="col-lg-3 has-parent">
        <p><?php echo e(__('Banner(200x200)')); ?></p>
    </div>
    <div class="col-lg-7 mb-2 has-parent">
        <div class="input-group file-upload">
            <label class="file-title">Browse</label>
            <input id="banner" type="file" class="form-control" name="banner" accept="image/*">
        </div>
    </div>
    <div class="col-lg-3 has-parent">
        <p><?php echo e(__('Image(32x32)')); ?></p>
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
                        <h4><?php echo e(__('Review Images')); ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <p><?php echo e(__('Review Images')); ?> <span class="text-red">*</span></p>
                            </div>
                            <div class="col-lg-8">
                                <div class="sm-title-group">
                                    <div class="input-review-images"></div>
                                    <span class="sm-text product_image"><?php echo e(__('Use 330x430 size image for Best Fit.Minimum 1 and maximum 4 image.These images are visible in product details page gallery.')); ?></span>
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
                        <h6><?php echo e(__('Shipping Configuration')); ?></h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <p><?php echo e(__('Free Shipping')); ?></p>
                            </div>
                            <div class="col-3">
                                <div class="form-switch">
                                    <input type="hidden" value="0" name="is_free_shipping">
                                    <input name="is_free_shipping" value="1" class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="col-9">
                                <p><?php echo e(__('Flat Rate')); ?></p>
                            </div>
                            <div class="col-3">
                                <div class="form-switch">
                                    <input type="hidden" value="0" name="is_flat_rate">
                                    <input name="is_flat_rate" value="1" class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="col-9">
                                <p><?php echo e(__('Product Wise Shipping')); ?></p>
                            </div>
                            <div class="col-3">
                                <div class="form-switch">
                                    <input type="hidden" value="0" name="is_product_wise_shipping">
                                    <input name="is_product_wise_shipping" value="1" class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="col-9">
                                <p><?php echo e(__('Is Product Quantity Multiply')); ?></p>
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
        <p><?php echo e(__('Description Title - 1')); ?></p>
    </div>
    <div class="col-lg-7">
        <input name="title1" type="text"  class="form-control" value="<?php if($category->title1): ?><?php echo e($category->title1); ?><?php else: ?><?php echo e(old('title1')); ?><?php endif; ?>" placeholder="Title">
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Description - 1')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <textarea name="description1" class="editor" id="textEditor">
                <?php if($category->description1 != "''"): ?>
                <?php echo e($category->description1); ?><?php else: ?><?php echo e(old('description1')); ?>

                <?php endif; ?>
            </textarea>
        </div>
    </div>


    <div class="col-lg-3">
        <p><?php echo e(__('Description Title - 2')); ?></p>
    </div>
    <div class="col-lg-7">
        <input name="title2" type="text"  class="form-control" value="<?php if($category->title2): ?><?php echo e($category->title2); ?><?php else: ?><?php echo e(old('title2')); ?><?php endif; ?>" placeholder="Title">
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Description - 2')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <textarea name="description2" class="editor" id="textEditor">
                <?php if($category->description2 != "''"): ?>
                <?php echo e($category->description2); ?><?php else: ?><?php echo e(old('description2')); ?>

                <?php endif; ?>
            </textarea>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Meta Title')); ?></p>
    </div>
    <div class="col-lg-7">
        <input name="meta_title" type="text" class="form-control" value="<?php if($category->meta_title): ?><?php echo e($category->meta_title); ?><?php else: ?><?php echo e(old('meta_title')); ?><?php endif; ?>" placeholder="Meta Title">
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Meta description')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <textarea name="meta_description" class="form-control"><?php if($category->meta_description): ?><?php echo e($category->meta_description); ?><?php else: ?><?php echo e(old('meta_description')); ?><?php endif; ?></textarea>
        </div>
    </div>




    <div class="col-lg-3">
        <p><?php echo e(__('Commission Rate')); ?> <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group commission-group overflow-visible">
            <input type="number" min="0" step="0.1" max="100" name="commission_rate" class="commission-input" placeholder="Commission Rate" value="<?php if($category->commission_rate): ?><?php echo e($category->commission_rate); ?><?php else: ?><?php echo e(old('commission_rate')??0); ?><?php endif; ?>" min="1" required>
            <span class="commission-persent">%</span>
        </div>
    </div>
    <div class="col-lg-3">
    </div>
    <div class="col-lg-7">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="for_menu" name="for_menu" <?php if($category->for_menu): ?> checked <?php endif; ?>>
            <label class="form-check-label" for="for_menu">
                <?php echo e(__("Would you like to add this to the top menu?")); ?>

            </label>
        </div>
    </div>
</div>

<?php $__env->startPush('js'); ?>
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
<?php $__env->stopPush(); ?>

 <?php /**PATH D:\office\mf-final2\main_last\app/Modules/Backend/ProductManagement\Resources/views/categories/form.blade.php ENDPATH**/ ?>