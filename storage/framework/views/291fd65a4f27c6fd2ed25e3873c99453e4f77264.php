
<?php $__env->startSection('title', 'Stock List'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5><?php echo e(__('Manage Stock')); ?></h5>
                    <table class="table p-0 p-table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-light">
                            <tr>
                                <th><?php echo e(__('ID')); ?></th>
                                <th><?php echo e(__('Name')); ?></th>
                                <th><?php echo e(__('Price')); ?></th>
                                <th><?php echo e(__('Stock')); ?></th>
                                <th><?php echo e(__('Sold')); ?></th>
                                <th><?php echo e(__('Viewed')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                <td>
                                    <a href="<?php echo e(route('backend.stocks.show', $product->id)); ?>" class="text-warning">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="row float-end pt-3">
                        <div class="col-12 text-center">
                            <?php echo e($products->links('vendor.pagination.bootstrap-4')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/stocks/index.blade.php ENDPATH**/ ?>