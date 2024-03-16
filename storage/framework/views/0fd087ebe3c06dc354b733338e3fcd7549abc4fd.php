<?php if($paginator->hasPages()): ?>
    <div class="pagination-bar justify-content-center d-flex">
        <ul class="pagination">
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item active">
                    <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                    </a>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" aria-label="Previous" data-stat="<?php echo e($stat); ?>">
                        <span aria-hidden="true">«</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php $__currentLoopData = $paginator->getUrlRange(1,$paginator->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($paginator->currentPage() == $key): ?>
                    <li class="page-item active"><a class="page-link" ><?php echo e($key); ?></a></li>
                <?php else: ?>
                    <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>" data-stat="<?php echo e($stat); ?>"><?php echo e($key); ?></a></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" aria-label="Next" data-stat="<?php echo e($stat); ?>">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link active" aria-label="Next">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH D:\office\mf-final2\main_last\resources\views/components/customer/page-navigation.blade.php ENDPATH**/ ?>