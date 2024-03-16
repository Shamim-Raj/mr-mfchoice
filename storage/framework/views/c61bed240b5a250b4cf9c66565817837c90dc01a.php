<div class="content-tab-title">
    <h4><?php echo e(__('Variation')); ?></h4>
</div>
<!-- Tab Manu Start  -->
<div class="nav nav-tabs p-tab-manu" id="nav-tab" role="tablist">
    <button class="nav-link <?php if(Request::is('admin/colors')): ?>active <?php endif; ?>" id="header-tab" data-bs-toggle="tab" data-bs-target="#header"
            type="button" role="tab" aria-controls="header" aria-selected="true"
            <?php if(url()->full()!=route('backend.colors.index')): ?> onclick="location.href='<?php echo e(route('backend.colors.index')); ?>'" <?php endif; ?>
    ><?php echo e(__('Color')); ?>

    </button>
    <button class="nav-link <?php if(Request::is('admin/colors/create')): ?>active <?php endif; ?>" id="pages-tab" data-bs-toggle="tab" data-bs-target="#pages" type="button"
            role="tab" aria-controls="pages" aria-selected="false"
            <?php if(url()->full()!=route('backend.colors.create')): ?> onclick="location.href='<?php echo e(route('backend.colors.create')); ?>'" <?php endif; ?>
    ><?php echo e(__('Add Color')); ?>

    </button>
    <button class="nav-link <?php if(Request::is('admin/sizes')): ?>active <?php endif; ?>" id="appearance-tab" data-bs-toggle="tab" data-bs-target="#appearance"
            type="button" role="tab" aria-controls="appearance" aria-selected="false"
            <?php if(url()->full()!=route('backend.sizes.index')): ?> onclick="location.href='<?php echo e(route('backend.sizes.index')); ?>'" <?php endif; ?>
    ><?php echo e(__('Size')); ?>

    </button>
    <button class="nav-link <?php if(Request::is('admin/sizes/create')): ?>active <?php endif; ?>" id="appearance-tab" data-bs-toggle="tab" data-bs-target="#appearance"
            type="button" role="tab" aria-controls="appearance" aria-selected="false"
            <?php if(url()->full()!=route('backend.sizes.create')): ?> onclick="location.href='<?php echo e(route('backend.sizes.create')); ?>'" <?php endif; ?>
    ><?php echo e(__('Add Size')); ?>

    </button>

</div><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/colors/nav.blade.php ENDPATH**/ ?>