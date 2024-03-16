
<?php $__env->startSection('title','Shipped Orders - '); ?>
<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('backend.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
    <?php echo $__env->make('ordermanagement::orders.order_overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Tab Content Start -->
        <div class="tab-content order-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="shipped" role="tabpanel" aria-labelledby="shipped-tab">
                <div class="container">
                    <div class="content-table">
                        <table id="mDataTable" class="table p-table">
                            <thead>
                            <tr>
                                <th scope="col"><?php echo e(__('Invoice#')); ?></th>
                                <th scope="col"><?php echo e(__('Name')); ?></th>
                                <th scope="col"><?php echo e(__('Items')); ?></th>
                                <th scope="col"><?php echo e(__('Payment')); ?></th>
                                <th scope="col"><?php echo e(__('Location')); ?></th>
                                <th scope="col"><?php echo e(__('Amount')); ?></th>
                                <th scope="col"><?php echo e(__('Action')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <?php echo $__env->make('backend.includes.datatable_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>

        $(function() {
            "use strict";

            $(document).ready(function(){
                // DataTable
                var table = $('#mDataTable');
                table.DataTable({
                    ajax: "<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.shipped_orders.list')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.shipped_orders.list')); ?><?php endif; ?>",
                    columns: [
                        { data: 'order_no' },
                        { data: 'user_last_name' },
                        { data: 'details_sum_qty'},
                        { data: 'payment_by' },
                        { data: 'user_address_1' },
                        { data: 'total_price' },
                        { data: 'action',searchable:false,sortable:false }
                    ]
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/app/Modules/Backend/OrderManagement/Resources/views/orders/shipped_orders.blade.php ENDPATH**/ ?>