

<?php $__env->startSection('title','FAQ'); ?>

<?php $__env->startSection('content'); ?>
    <!-- User Panel Content Start -->
    <div class="user-panel-content">
        <div class="faq">
            <div class="title">
                <h4><?php echo e(__('Frequently Asked Questions')); ?></h4>
                <p><?php echo e(__('The Beginning of a new asset class ')); ?></p>
            </div>
            <div class="accordion" id="accordionExample">
                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="accordion-item">
                        <button type="button" class="<?php echo e($key === 0 ? '' : 'collapsed'); ?>" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($key); ?>" aria-expanded="<?php echo e($key === 0 ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo e($key); ?>"><?php echo e($faq->question); ?>

                            <span class="close">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480"><path d="M240,0C107.452,0,0,107.452,0,240s107.452,240,240,240s240-107.452,240-240C479.85,107.514,372.486,0.15,240,0z M240,464
				C116.288,464,16,363.712,16,240S116.288,16,240,16s224,100.288,224,224C463.859,363.653,363.653,463.859,240,464z"/>
			<path d="M341.656,138.344c-3.124-3.123-8.188-3.123-11.312,0L240,228.688l-90.344-90.344c-3.178-3.069-8.243-2.981-11.312,0.197
				c-2.994,3.1-2.994,8.015,0,11.115L228.688,240l-90.344,90.344c-3.178,3.069-3.266,8.134-0.196,11.312
				c3.069,3.178,8.134,3.266,11.312,0.196c0.067-0.064,0.132-0.13,0.196-0.196L240,251.312l90.344,90.344
				c3.178,3.07,8.242,2.982,11.312-0.196c2.995-3.1,2.995-8.016,0-11.116L251.312,240l90.344-90.344
				C344.779,146.532,344.779,141.468,341.656,138.344z"/></svg></span>
                            <span class="open">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480"><path d="M240,0C107.452,0,0,107.452,0,240s107.452,240,240,240c132.486-0.15,239.85-107.514,240-240C480,107.452,372.548,0,240,0
				z M240,464C116.288,464,16,363.712,16,240S116.288,16,240,16c123.653,0.141,223.859,100.347,224,224
				C464,363.712,363.712,464,240,464z"/><path d="M370.112,170.576L240,300.688L109.888,170.576c-3.1-2.994-8.015-2.994-11.115,0c-3.178,3.069-3.266,8.134-0.197,11.312
				l135.768,135.768c1.5,1.5,3.534,2.344,5.656,2.344c2.122,0,4.156-0.844,5.656-2.344l135.768-135.768
				c0.067-0.064,0.132-0.13,0.196-0.196c3.069-3.178,2.982-8.242-0.196-11.312C378.246,167.31,373.182,167.398,370.112,170.576z"/></svg></span>
                        </button>
                        <div id="collapse<?php echo e($key); ?>" class="collapse <?php echo e($key===0?'show':''); ?>" data-bs-parent="#accordionExample">
                            <p><?php echo e($faq->answer); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.page-navigation-ajax','data' => ['paginator' => $faqs]]); ?>
<?php $component->withName('frontend.page-navigation-ajax'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['paginator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faqs)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
    <!-- User Panel Content End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/frontend/pages/faq.blade.php ENDPATH**/ ?>