<div class="container">
    <div class="content-tab-title">
        <h4><?php echo e(__('Promotion Management')); ?></h4>
    </div>
    <!-- Tab Manu Start -->
    <div class="nav nav-tabs p-tab-manu" id="nav-tab" role="tablist">
        <?php
            $promotions_index_route = auth('seller')->user() ? route('seller.promotional_products.index') : route('backend.promotional_products.index');
            $promotions_create_route = auth('seller')->user() ? route('seller.promotional_products.create') : route('backend.promotional_products.create');
        ?>
        <?php if(auth()->user()->can('browse_promotional_products') || auth()->user()->hasRole('super-admin')): ?>
        <button class="nav-link <?php if(Request::is('admin/promotional_products','seller/promotional_products')): ?>active <?php endif; ?>" id="all-product-tab" data-bs-toggle="tab"
                data-bs-target="#all-product"
                type="button" role="tab" aria-controls="all-product" aria-selected="true"
                <?php if(url()->full()!=$promotions_index_route): ?> onclick="location.href='<?php echo e($promotions_index_route); ?>'" <?php endif; ?>>
            <?php echo e(__('All Promotion')); ?>

        </button>
        <?php endif; ?>
        <?php if(auth()->user()->can('create_promotional_products') || auth()->user()->hasRole('super-admin')): ?>
        <button class="nav-link <?php if(Request::is('admin/promotional_products/create','seller/promotional_products/create')): ?>active <?php endif; ?>" id="add-product-tab"
                data-bs-toggle="tab" data-bs-target="#add-product"
                type="button" role="tab" aria-controls="add-product" aria-selected="true"
                <?php if(url()->full()!=$promotions_create_route): ?> onclick="location.href='<?php echo e($promotions_create_route); ?>'" <?php endif; ?>>
            <?php echo e(__('Add Promotion')); ?>

        </button>
        <?php endif; ?>
    </div>
    <!-- Tab Manu End -->
</div>
<?php /**PATH D:\office\mf-final2\main_last\app/Modules/Backend/ProductManagement\Resources/views/includes/promotion_nav.blade.php ENDPATH**/ ?>