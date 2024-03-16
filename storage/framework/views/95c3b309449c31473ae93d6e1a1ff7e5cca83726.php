<?php if($paginator->hasPages()): ?>
    <nav class="page-navigation justify-content-center d-flex" aria-label="page-navigation">
        <ul class="pagination">
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item">
                    <a class="page-link active" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                    </a>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php $__currentLoopData = $paginator->getUrlRange(1,$paginator->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($paginator->currentPage() == $key): ?>
                    <li class="page-item"><a class="page-link active"><?php echo e($key); ?></a></li>
                <?php else: ?>
                    <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($key); ?></a></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" aria-label="Next">
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
    </nav>
<?php endif; ?>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/components/frontend/page-navigation.blade.php ENDPATH**/ ?>