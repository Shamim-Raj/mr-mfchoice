
<?php $__env->startSection('title','Banner - '); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-category" role="tabpanel" aria-labelledby="add-category-tab">
                <div class="container content-title">
                    <h4><?php echo e(__('Banner Information')); ?></h4>
                </div>
                <div class="container">
                    <form id="bannerForm" method="post" action="<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.banners.store')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.banners.store')); ?><?php endif; ?>" enctype="multipart/form-data" class="add-brand-form">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('backend.pages.content_management.banners.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="col-lg-7 offset-3">
                            <div class="from-submit-btn">
                                <button class="submit-btn" type="submit"><?php echo e(__('Save')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/content_management/banners/create.blade.php ENDPATH**/ ?>