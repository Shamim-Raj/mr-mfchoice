
<?php $__env->startSection('title','Promotion - '); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
    <?php echo $__env->make('productmanagement::includes.promotion_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-product" aria-labelledby="add-product-tab">
                <div class="container content-title">
                    <h4><?php echo e(__('Promotion Information')); ?></h4>
                </div>
                <div class="container">
                <form class="add-brand-form" id="promo_productsForm"  action="<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.promotional_products.store')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.promotional_products.store')); ?><?php endif; ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo $__env->make('productmanagement::promotional_products.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="col-lg-7 offset-3">
                        <div class="from-submit-btn">
                            <button class="submit-btn" type="submit"><?php echo e(__('Save')); ?></button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\office\mf-final2\main_last\app/Modules/Backend/ProductManagement\Resources/views/promotional_products/create.blade.php ENDPATH**/ ?>