
<?php $__env->startSection('title', 'Stock List'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2"><?php echo e(__('Product details')); ?> <a class="btn btn-primary btn-sm rounded-pill text-light" href="<?php echo e(route('backend.stocks.index')); ?>"><i class="fa fa-backward" aria-hidden="true"></i> <?php echo e(__('Back')); ?></a></h6>

                    <table class="table p-0 p-table table-bordered table-striped table-hover text-center">
                        <thead class="bg-secondary text-light text-center">
                            <tr>
                                <th><?php echo e(__('ID')); ?></th>
                                <th><?php echo e(__('Name')); ?></th>
                                <th><?php echo e(__('Price')); ?></th>
                                <th><?php echo e(__('Stock')); ?></th>
                                <th><?php echo e(__('Sold')); ?></th>
                                <th><?php echo e(__('Viewed')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="borderd">
                                <td><?php echo e($product->id); ?></td>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e(currency($product->unit_price, 2)); ?></td>
                                <td>
                                    <div class="badge bg-success">
                                        <?php echo e($product->quantity); ?>

                                    </div>
                                </td>
                                <td><?php echo e($product->orders_sum_qty); ?></td>
                                <td><?php echo e($product->total_viewed); ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <h5 class="my-2 mt-3"><?php echo e(__('Product Variations')); ?></h5>
                    <table class="table p-0 p-table table-bordered table-striped table-hover text-center">
                        <thead class="bg-secondary text-light text-center">
                            <tr>
                                <th><?php echo e(__('#')); ?></th>
                                <th><?php echo e(__('Color')); ?></th>
                                <th><?php echo e(__('Size')); ?></th>
                                <th><?php echo e(__('Stock')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $product->productstock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="borderd">
                                <td><?php echo e($loop->index+1); ?></td>
                                <td><?php echo e($stock->color->name ?? ''); ?></td>
                                <td><?php echo e($stock->size->name ?? ''); ?></td>
                                <td>
                                    <div class="badge bg-primary">
                                        <?php echo e($stock->quantities); ?>

                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/stocks/show.blade.php ENDPATH**/ ?>