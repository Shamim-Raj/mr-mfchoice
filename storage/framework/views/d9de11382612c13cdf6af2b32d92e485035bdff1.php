<div class="content-tab-title">
    <h4><?php echo e(__('FAQ manager')); ?></h4>
</div>
<!-- Tab Manu Start -->
<div class="nav nav-tabs p-tab-manu" id="nav-tab" role="tablist">
    <button class="nav-link <?php if(Request::is('admin/faq_category')): ?>active <?php endif; ?>" id="faq-category-tab" data-bs-toggle="tab"
            data-bs-target="#faq-category" type="button" role="tab" aria-controls="faq-category"
            aria-selected="false"
            <?php if(url()->full()!=route('backend.faq_category.index')): ?> onclick="location.href='<?php echo e(route('backend.faq_category.index')); ?>'" <?php endif; ?>
    ><?php echo e(__('FAQ Category')); ?>

    </button>
    <button class="nav-link <?php if(Request::is('admin/faq_subcategory')): ?>active <?php endif; ?>" id="faq-subcategory-tab" data-bs-toggle="tab"
            data-bs-target="#faq-subcategory" type="button" role="tab" aria-controls="faq-subcategory"
            aria-selected="false"
            <?php if(url()->full()!=route('backend.faq_subcategory.index')): ?> onclick="location.href='<?php echo e(route('backend.faq_subcategory.index')); ?>'" <?php endif; ?>
    ><?php echo e(__('FAQ SubCategory')); ?>

    </button>
    <button class="nav-link <?php if(Request::is('admin/faq_content','admin/faq_content/*')): ?>active <?php endif; ?>" id="questions-and-answer-tab" data-bs-toggle="tab"
            data-bs-target="#questions-and-answer" type="button" role="tab"
            aria-controls="questions-and-answer" aria-selected="false"
            <?php if(url()->full()!=route('backend.faq_content.index')): ?> onclick="location.href='<?php echo e(route('backend.faq_content.index')); ?>'" <?php endif; ?>
    ><?php echo e(__('Questions and Answer')); ?>

    </button>

</div>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/faq_manager/nav.blade.php ENDPATH**/ ?>