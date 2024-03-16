
<?php $__env->startSection('title','Category - '); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('plugins/image-uploader/image-uploader.min.css')); ?>">
<?php $__env->stopPush(); ?>

<style>
    .image-uploader.has-files .upload-text {
        display: block !important;
        text-align: center !important;
    }
    .image-uploader .upload-text {
        position: relative !important;
    
    }
</style>

<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <?php echo $__env->make('productmanagement::includes.product_management', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-category" role="tabpanel" aria-labelledby="add-category-tab">
                <div class="container content-title">
                    <h4><?php echo e(__('Category Information')); ?></h4>
                </div>
                <div class="container">
                    <form id="categoryForm" class="add-brand-form ajaxform_instant_reload" action="<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.categories.update',$category->id)); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.categories.update',$category->id)); ?><?php endif; ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <?php echo $__env->make('productmanagement::categories.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="col-lg-7 offset-3">
                            <div class="from-submit-btn">
                                <button class="submit-btn" type="submit"><?php echo e(__('Update')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('plugins/image-uploader/image-uploader.min.js')); ?>"></script>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\office\mf-final2\main_last\app/Modules/Backend/ProductManagement\Resources/views/categories/edit.blade.php ENDPATH**/ ?>