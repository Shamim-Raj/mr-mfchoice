<div class="container">
    <div class="content-tab-title">
        <h4><?php echo e(__('Seller Management')); ?></h4>
    </div>
    <!-- Tab Manu Start -->
    <div class="nav nav-tabs p-tab-manu" id="nav-tab" role="tablist">
        <button class="nav-link <?php if(Request::is('admin/sellers/create')): ?> active <?php endif; ?>" id="create-seller-tab"
                data-bs-toggle="tab" data-bs-target="#create-seller"
                type="button" role="tab" aria-controls="create-seller" aria-selected="false"
                <?php if(url()->full()!=route('backend.sellers.create')): ?> onclick="location.href='<?php echo e(route('backend.sellers.create')); ?>'" <?php endif; ?>
        ><?php echo e(__('Create Seller')); ?>

        </button>
        <button class="nav-link  <?php if(Request::is('admin/sellers')): ?> active <?php endif; ?>" id="seller-list-tab" data-bs-toggle="tab"
                data-bs-target="#seller-list"
                type="button" role="tab" aria-controls="seller-list" aria-selected="false"
                <?php if(url()->full()!=route('backend.sellers.index')): ?> onclick="location.href='<?php echo e(route('backend.sellers.index')); ?>'" <?php endif; ?>
        ><?php echo e(__('Seller list')); ?>

        </button>
    </div>
    <!-- Tab Manu End -->
</div>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/app/Modules/Backend/SellerManagement/Resources/views/includes/tab_menu.blade.php ENDPATH**/ ?>