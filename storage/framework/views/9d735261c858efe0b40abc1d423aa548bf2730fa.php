<div class="container">
    <div class="content-tab-title">
        <h4><?php echo e(__('Product Management')); ?></h4>
    </div>
    <!-- Tab Manu Start -->
    <div class="nav nav-tabs p-tab-manu" id="nav-tab" role="tablist">
        <?php
            $product_index_route = auth('seller')->user() ? route('seller.products.flash-deal') : route('backend.products.flash-deal');

        ?>
        <?php if(auth()->user()->can('browse_products') || auth()->user()->hasRole('super-admin')): ?>
            <button class="nav-link <?php if(Request::is('admin/flash-deal','seller/flash-deal')): ?>active <?php endif; ?>"
                    id="all-product-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#all-product"
                    type="button" role="tab" aria-controls="all-product" aria-selected="true"
                    <?php if(url()->full()!=$product_index_route): ?> onclick="location.href='<?php echo e($product_index_route); ?>'" <?php endif; ?>>
                <?php echo e(__('Flash Deal')); ?>

            </button>
        <?php endif; ?>

    </div>
    <!-- Tab Manu End -->
</div>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/app/Modules/Backend/ProductManagement/Resources/views/includes/flash_deal_management.blade.php ENDPATH**/ ?>