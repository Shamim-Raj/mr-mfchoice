<?php $__env->startSection('title',$page->title ?? 'Page Title'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb Start -->
    <nav class="breadcrumb-manu" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($page->title ?? __('Page Title')); ?></li>
            </ol>
        </div>
    </nav>
    <!-- Breadcrumb End -->

    <section class="shop-list">
        <div class="container">
            <h2 class="text-center mb-5"><?php echo e($page->title ?? __('Page Title')); ?></h2>
            <?php echo e($page->description ?? __('No content found')); ?>

        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/frontend/pages/blank.blade.php ENDPATH**/ ?>