

<?php $__env->startSection('title','Announcement'); ?>

<?php $__env->startSection('content'); ?>
    <!-- User Panel Content Start -->
    <div class="user-panel-content">
        <div class="announce">
            <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="post-img">
                                <img src="<?php echo e(asset('uploads/announcements')); ?>/<?php echo e($announcement->thumbnail); ?>" alt="<?php echo e($announcement->title); ?>">
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="post-text">
                                <h5><?php echo e($announcement->title); ?></h5>
                                <p><?php echo e($announcement->description); ?></p>
                                <div class="post-btns">
                                    <button class="btn btn-warning"><?php echo e(__('BUY NOW')); ?></button>
                                    <span><strike><?php echo e(currency($announcement->old_price)); ?></strike></span>
                                    <span><?php echo e(currency($announcement->sale_price)); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <!-- User Panel Content End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/frontend/pages/announcement.blade.php ENDPATH**/ ?>