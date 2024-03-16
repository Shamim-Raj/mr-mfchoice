<div class="container">
    <div class="content-tab-title">
        <h4><?php echo e(__('Report')); ?></h4>
    </div>
    <!-- Tab Manu Start -->
    <div class="nav nav-tabs p-tab-manu" id="nav-tab" role="tablist">
        <button class="nav-link <?php if(Request::is('admin/stock_report') || Request::is('seller/stock_report')): ?>active <?php endif; ?>" id="stock-report-tab" data-bs-toggle="tab" data-bs-target="#stock-report" type="button" role="tab" aria-controls="stock-report" aria-selected="false" <?php if(url()->full()!=route('backend.stock_report')): ?> onclick="location.href='<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.stock_report')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.stock_report')); ?><?php endif; ?>'" <?php endif; ?>
        ><?php echo e(__('Stock Report')); ?>

        </button>
        <button class="nav-link <?php if(Request::is('admin/customer_report') || Request::is('seller/customer_report')): ?>active <?php endif; ?>" id="customer-report-tab" data-bs-toggle="tab" data-bs-target="#customer-report" type="button" role="tab" aria-controls="customer-report" aria-selected="false" <?php if(url()->full()!=route('backend.customer_report')): ?> onclick="location.href='<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.customer_report')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.customer_report')); ?><?php endif; ?>'" <?php endif; ?>
        ><?php echo e(__('Customer Report')); ?>

        </button>
        <?php if(auth('admin')->user()): ?>
        <button class="nav-link <?php if(Request::is('admin/seller_report')): ?> active <?php endif; ?>" id="seller-report-tab" data-bs-toggle="tab" data-bs-target="#seller-report" type="button" role="tab" aria-controls="seller-report" aria-selected="false"
        <?php if(url()->full()!=route('backend.seller_report')): ?> onclick="location.href='<?php echo e(route('backend.seller_report')); ?>'" <?php endif; ?>><?php echo e(__('Seller Report')); ?></button> 
        <?php endif; ?>
    </div>
</div><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/reports/nav.blade.php ENDPATH**/ ?>