<div class="content-tab-title">
    <h4><?php echo e(__('Content Management')); ?></h4>
</div>
<!-- Tab Manu Start  -->
<div class="nav nav-tabs p-tab-manu" id="nav-tab" role="tablist">
    <?php
        $banner_index_route = auth('seller')->user() ? route('seller.banners.index') : route('backend.banners.index');
        $product_review_index_route = auth('seller')->user() ? route('seller.product_review.index') : route('backend.product_review.index');
    ?>
    <?php if(auth()->user()->can('browse_banners') || auth()->user()->hasRole('super-admin')): ?>
        <button class="nav-link <?php if(Request::is('admin/banners')): ?>active <?php endif; ?>" id="banner-tab" data-bs-toggle="tab"
                data-bs-target="#banner" type="button"
                role="tab" aria-controls="banner" aria-selected="true"
                <?php if(url()->full()!=$banner_index_route): ?> onclick="location.href='<?php echo e($banner_index_route); ?>'" <?php endif; ?>
        ><?php echo e(__('Banner')); ?>

        </button>
    <?php endif; ?>
    <?php if(auth()->user()->can('browse_product_review') || auth()->user()->hasRole('super-admin')): ?>
        <button class="nav-link <?php if(Request::is('admin/product_review')): ?>active <?php endif; ?>" id="product-review-tab"
                data-bs-toggle="tab"
                data-bs-target="#product-review" type="button" role="tab" aria-controls="product-review"
                aria-selected="true"
                <?php if(url()->full()!=$product_review_index_route): ?> onclick="location.href='<?php echo e($product_review_index_route); ?>'" <?php endif; ?>
        ><?php echo e(__('Product Review')); ?>

        </button>
    <?php endif; ?>
</div>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/content_management/nav.blade.php ENDPATH**/ ?>