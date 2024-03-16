
<?php $__env->startSection('title','Sellers - '); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
    <?php echo $__env->make('sellermanagement::includes.tab_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="create-seller" role="tabpanel" aria-labelledby="create-seller-tab">
                <div class="container content-title">
                    <h4><?php echo e(__('Seller Information')); ?></h4>
                </div>
                <div class="container">
                    <form id="sellerForm" class="add-brand-form" action="<?php echo e(route('backend.sellers.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('sellermanagement::sellers.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/app/Modules/Backend/SellerManagement/Resources/views/sellers/create.blade.php ENDPATH**/ ?>