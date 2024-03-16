<!-- Product Tab Start -->
<section class="product-tab">
    <div class="container">

        <div class="tab-title">
            <h4><?php echo e(__('Deal of the week')); ?></h4>
        </div>

        <div class="row product-tab-top">
            <div class="flash-offer-count col-4">
                <div class=" offer-text py-3">
                    <div class="offer-wrap">
                        <div class="countdown">
                            <h6><?php echo e(__('Ending in')); ?></h6>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-item-tab" data-bs-toggle="tab" data-bs-target="#all-item" type="button" role="tab" aria-controls="all-item" aria-selected="true"><?php echo e(__('Flash Sale')); ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="new-arrivals-tab" data-bs-toggle="tab" data-bs-target="#new-arrivals" type="button" role="tab" aria-controls="new-arrivals" aria-selected="false"><?php echo e(__('New Arrivals')); ?></button>
                </li>
            </ul>
        </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="all-item" role="tabpanel" aria-labelledby="all-item-tab">
                <div class="row auto-margin-3">
                    <?php if($flashDeals->count() == 0): ?>
                        <div class="col-12">
                            <p class="text-center"><?php echo e(__('UPCOMING...')); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php $__currentLoopData = $flashDeals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.product-card2','data' => ['product' => $product]]); ?>
<?php $component->withName('frontend.product-card2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="tab-pane fade" id="new-arrivals" role="tabpanel" aria-labelledby="new-arrivals-tab">
                <div class="row auto-margin-3">
                    <?php if($newArrivals->count() == 0): ?>
                        <div class="col-12">
                            <p class="text-center"><?php echo e(__('UPCOMING...')); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php $__currentLoopData = $newArrivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.product-card2','data' => ['product' => $product]]); ?>
<?php $component->withName('frontend.product-card2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Product Tab End -->
<?php if($flashDeals): ?>
<?php $__env->startPush('script'); ?>
    <script>
        countDown();
        function countDown() {
            $(".countdown").countdown({
                year: <?php echo e(date('Y', strtotime($flashDeals->max('details.flash_end_at')))); ?>,
                month: <?php echo e(date('m', strtotime($flashDeals->max('details.flash_end_at')))); ?>,
                day: <?php echo e(date('d', strtotime($flashDeals->max('details.flash_end_at')))); ?>,
                hour: <?php echo e(date('H', strtotime($flashDeals->max('details.flash_end_at')))); ?>,
                minute: <?php echo e(date('i', strtotime($flashDeals->max('details.flash_end_at')))); ?>,
                second: <?php echo e(date('s', strtotime($flashDeals->max('details.flash_end_at')))); ?>,

            });
        }

    </script>
<?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/frontend/_product-tab.blade.php ENDPATH**/ ?>