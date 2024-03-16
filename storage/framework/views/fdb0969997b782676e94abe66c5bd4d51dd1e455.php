<?php if($paginator->hasPages()): ?>
    <nav class="page-navigation justify-content-center d-flex" aria-label="page-navigation">
        <ul class="pagination" id="pagination">
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item">
                    <span class="page-link" aria-label="Previous" aria-hidden="true">«</span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" aria-label="Previous">«</a>
                </li>
            <?php endif; ?>

            <?php
                $totalPages = $paginator->lastPage();
                $currentPage = $paginator->currentPage();
                $visiblePageCount = 3;
                $halfVisible = floor($visiblePageCount / 2);

                // Determine the start and end of the visible page range
                $start = max($currentPage - $halfVisible, 1);
                $end = min($start + $visiblePageCount - 1, $totalPages);
            ?>

            <?php if($start > 1): ?>
                <li class="page-item"><a class="page-link" href="<?php echo e($paginator->url(1)); ?>">1</a></li>
                <?php if($start > 2): ?>
                    <li class="page-item disabled"><span class="page-link" aria-hidden="true">...</span></li>
                <?php endif; ?>
            <?php endif; ?>

            <?php for($i = $start; $i <= $end; $i++): ?>
                <?php if($i == $currentPage): ?>
                    <li class="page-item active"><span class="page-link active"><?php echo e($i); ?></span></li>
                <?php else: ?>
                    <li class="page-item"><a class="page-link" href="<?php echo e($paginator->url($i)); ?>"><?php echo e($i); ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if($end < $totalPages): ?>
                <?php if($end < $totalPages - 1): ?>
                    <li class="page-item disabled"><span class="page-link" aria-hidden="true">...</span></li>
                <?php endif; ?>
                <li class="page-item"><a class="page-link" href="<?php echo e($paginator->url($totalPages)); ?>"><?php echo e($totalPages); ?></a></li>
            <?php endif; ?>

            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" aria-label="Next">»</a>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <span class="page-link disabled" aria-label="Next" aria-hidden="false">»</span>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/components/frontend/page-navigation-ajax.blade.php ENDPATH**/ ?>