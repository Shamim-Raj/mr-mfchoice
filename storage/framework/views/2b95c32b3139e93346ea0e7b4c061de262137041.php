<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="maan-mybazar-order-details">
            <h3><?php echo e(__('Order Details')); ?></h3>
            <div class="maan-order-heading">
                <div class="order-side">
                    <h6><?php echo e(__('Order')); ?> #<?php echo e($order->order->order_no); ?></h6>
                    <p><?php echo e(__('Placed On')); ?> <span><?php echo e($order->created_at->format('d M Y')); ?></span> <span><?php echo e($order->created_at->format('H:i:s')); ?></span></p>
                </div>
                <div class="price-side">
                    <p><?php echo e(__("Total")); ?>: <span><?php if($order->coupon_discount>0): ?>
                                <?php echo e(currency($order->grand_total-($order->coupon_discount??0),2)); ?>

                            <?php else: ?>
                                <?php echo e(currency($order->grand_total-($order->order->coupon_discount??0),2)); ?>

                            <?php endif; ?></span></p>
                </div>
            </div>
            <div class="mybazar-order-processing">
                <div class="processing-heading">
                    <div class="left-side">
                        <p><?php echo e(__('Package 1')); ?></p>
                        <span><?php echo e(__('Sold by')); ?> <a href=""><?php echo e($order->seller->company_name?? null); ?></a></span>
                    </div>
                    
                </div>
                <div class="mybazar-processing-body">
                    <div class="mybazar-delivery-title">
                        <p><?php echo e(__('Estimated Delivery day')); ?> <?php echo e($order->product->inside_shipping_days ?? null); ?></p>
                        <span><?php echo e(__('Standard')); ?></span>
                    </div>
                    <div class="processing-timeline">
                        <ul class="mybazar-timeline">
                            <?php if($order->order_stat == 7): ?>
                                <li class="active-tl"><span><?php echo e(__('Processing')); ?></span></li>
                                <li class="active-tl"><span><?php echo e(__('Canceled')); ?></span></li>
                            <?php else: ?>
                                <li class="active-tl" ><span><?php echo e(__('Processing')); ?></span></li>
                                <li class="<?php echo e($order->order_stat >= 5 ? 'active-tl' : ''); ?>"><span><?php echo e(__('Shipped')); ?></span></li>
                                <li class="<?php echo e($order->order_stat == 6 ? 'active-tl' : ''); ?>"><span><?php echo e(__('Delivered')); ?></span></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="maan-timeline-tab-content">
                        <div class="timeline-content tab-active">
                            <?php $__currentLoopData = $order->timelines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p><?php echo e(date('d M Y - H:i', strtotime($timeline->order_stat_datetime))); ?><span><?php echo e($timeline->status->name); ?> - <?php echo e($timeline->order_stat_desc); ?></span></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="mybazar-product-items-wrp">
                    <div class="mybazar-product-items-with-details">
                        <div class="thumb">
                            <img src="<?php echo e(asset('uploads/products/galleries')); ?>/<?php echo e($order->product->images->first()->image); ?>" alt="<?php echo e($order->product->name); ?>">
                            <div class="text">
                                <p><?php echo e($order->product->name); ?></p>
                                <p>
                                    <?php if($order->color!= null && $order->color!='undefined'): ?>
                                        <span class="badge bg-light text-dark">Color: <?php echo e($order->color); ?></span>
                                    <?php endif; ?>
                                    <?php if($order->size!= null && $order->size!='undefined'): ?>
                                        <span class="badge bg-light text-dark">Size: <?php echo e($order->size); ?></span>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                        <div class="price">
                            <p><?php echo e(currency($order->total_price,2)); ?>  <?php if($order->order->coupon_discount): ?><?php if($order->coupon_discount>0): ?>
                                    - <?php echo e(currency($order?->coupon_discount,2)); ?>

                                <?php else: ?>
                                    - <?php echo e(currency($order?->order?->coupon_discount,2)); ?>

                                <?php endif; ?>

                                <?php endif; ?>+ <?php echo e($order->shipping_cost > 0 ? currency($order->total_shipping_cost,2) : 'Free'); ?> </p>
                        </div>
                        <div class="qty">
                            <p><?php echo e(__('Qty')); ?>: <?php echo e($order->qty); ?></p>
                        </div>
                        <?php if($order->order_stat != 7 && $order->order_stat != 8): ?>
                        <div class="btn-group">
                            <a class="btn btn-warning text-light" class="btn btn-dang" href="<?php echo e(route('order.order-status-change', ['order_id' => $order->id, 'status' => '8'])); ?>"><i class="fa-solid fa-arrow-rotate-left"></i> <?php echo e(__('Return')); ?></a>
                            <?php if($order->order_stat < 6): ?>
                            <a class="btn btn-danger text-light" href="<?php echo e(route('order.order-status-change', ['order_id' => $order->id, 'status' => '7'])); ?>"><i class="fa-solid fa-xmark"></i> <?php echo e(__('Cancel')); ?></a>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\office\mf-final2\main_last\resources\views/customer/pages/order-details.blade.php ENDPATH**/ ?>