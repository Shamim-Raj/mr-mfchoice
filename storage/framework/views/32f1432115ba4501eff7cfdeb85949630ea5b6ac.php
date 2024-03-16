<li><?php echo e(__('Subtotal')); ?><span class="sub-total"><?php echo e(currency($subTotal,2)); ?></span></li>
<li><?php echo e(__('Shipping Charge')); ?> <?php if( request('area') == 'inside'): ?><?php echo e(__('(inside dhaka)')); ?>

    <?php else: ?> <?php echo e(__('(outside dhaka)')); ?> <?php endif; ?>
    <?php if($totalShipping == 0): ?>
        <span><?php echo e(__('Free')); ?></span>
    <?php else: ?>
        <span><?php echo e(currency($totalShipping,2)); ?></span>
    <?php endif; ?>
</li>
<?php if(isset($discount)): ?>
    <li><?php echo e(__('Coupon')); ?><span><?php echo e(currency($discount ?? 0, 2)); ?> </span></li>
<?php endif; ?>
<li><?php echo e(__('Total')); ?><span class="total"><?php echo e(currency($total,2)); ?></span></li>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/customer/checkout/_order-details.blade.php ENDPATH**/ ?>