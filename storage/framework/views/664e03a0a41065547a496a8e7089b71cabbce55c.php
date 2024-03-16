

<?php $__env->startSection('title','Wishlist'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb Start -->
    <nav class="breadcrumb-manu" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Wishlist')); ?></li>
            </ol>
        </div>
    </nav>
    <!-- Breadcrumb End -->
    <!-- Card Table Start -->
    <section class="card-table">
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"><?php echo e(__('Items')); ?></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"><?php echo e(__('Price')); ?></th>
                    <th scope="col"><?php echo e(__('Status')); ?></th>
                    <th scope="col"><?php echo e(__('Add to Cart')); ?></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $wishlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($wish->product): ?>
                        <tr id="wish-<?php echo e($wish->id); ?>">
                            <th scope="row">
                                <img src="<?php echo e(asset('uploads/products/galleries')); ?>/<?php echo e($wish->product->images->first()->image); ?>" class="b-1" alt="<?php echo e($wish->product->name); ?>">
                            </th>
                            <td colspan="2" class="item-name"><?php echo e($wish->product->name); ?></td>
                            <td>
                                <?php if($wish->product->promotions->count() > 0): ?>
                                    <?php echo e(currency($wish->product->promotion_price,2)); ?>

                                <?php else: ?>
                                    <?php echo e(currency(($wish->product->unit_price - $wish->product->discount),2)); ?>

                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($wish->product->details): ?>
                                    <?php if($wish->product->details->is_show_stock_quantity == 0): ?>
                                        <?php echo e(__('Out of Stock')); ?>

                                    <?php else: ?>
                                        <?php echo e(__('In Stock')); ?>

                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php echo e(__('No Details')); ?>

                                <?php endif; ?>
                            </td>
                            <td>
                                <a class="link-anime" href="javascript:wishToCart(<?php echo e($wish->id); ?>)"><?php echo e(__('Add to Cart')); ?></a>
                            </td>
                            <td class="table-close-btn"><button onclick="removeFromWishlist(<?php echo e($wish->id); ?>)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.995 511.995"><path d="M437.126,74.939c-99.826-99.826-262.307-99.826-362.133,0C26.637,123.314,0,187.617,0,256.005
			s26.637,132.691,74.993,181.047c49.923,49.923,115.495,74.874,181.066,74.874s131.144-24.951,181.066-74.874
			C536.951,337.226,536.951,174.784,437.126,74.939z M409.08,409.006c-84.375,84.375-221.667,84.375-306.042,0
			c-40.858-40.858-63.37-95.204-63.37-153.001s22.512-112.143,63.37-153.021c84.375-84.375,221.667-84.355,306.042,0
			C493.435,187.359,493.435,324.651,409.08,409.006z"/><path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
			c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
			c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
			c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
			c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/></svg></button></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Card Table End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/frontend/pages/wishlist.blade.php ENDPATH**/ ?>