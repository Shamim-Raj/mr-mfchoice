<section class="notice-section">
    <div class="container">
        <div class="notice-section-wrapper">
            <marquee behavior="scroll" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                <span class="px-4"><b><?php echo e($notice->headline ?? ''); ?>:&nbsp;</b><?php echo e($notice->description ?? ''); ?></span>
            </marquee>
        </div>
    </div>
</section>
<?php /**PATH D:\office\mf-final2\main_last\resources\views/frontend/_notice.blade.php ENDPATH**/ ?>