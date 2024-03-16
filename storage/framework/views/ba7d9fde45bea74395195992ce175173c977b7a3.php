<?php $__env->startSection('title','Product - '); ?>
<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('backend.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <?php echo $__env->make('productmanagement::includes.flash_deal_management', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="all-product" aria-labelledby="all-product-tab">
                <div class="container">

                    <div class="content-table mt-0">

                        <table id="mDataTable" class="table p-table">
                            <thead>
                            <tr>
                                <th scope="col"><?php echo e(__('ID')); ?></th>
                                <th scope="col"><?php echo e(__('Name')); ?></th>
                                <th scope="col"><?php echo e(__('Image')); ?></th>
                                <th scope="col"><?php echo e(__('Price')); ?></th>
                                <th scope="col"><?php echo e(__('Stock')); ?></th>
                                <th scope="col"><?php echo e(__('Sold')); ?></th>
                                <th scope="col"><?php echo e(__('Viewed')); ?></th>
                                <th scope="col"><?php echo e(__('Status')); ?></th>
                                <th scope="col"><?php echo e(__('Start Date')); ?></th>
                                <th scope="col"><?php echo e(__('End Date')); ?></th>

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
                    ajax: "<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.product.flash-deal-list')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.product.flash-deal-list')); ?><?php endif; ?>",
                    columns: [
                        { data: 'id' },
                        { data: 'name' },
                        { data: 'image',searchable:false,sortable:false },
                        { data: 'unit_price' },
                        { data: 'quantity' },
                        { data: 'sold',searchable:false,sortable:false},
                        { data: 'total_viewed' },
                        { data: 'is_active' },
                        { data: 'start_date' },
                        { data: 'end_date' },
                    ]
                });

            });

            $(document).on('click','#mDataTable .status', function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path +<?php if(auth()->guard('admin')->check()): ?>'/admin/product/flashDealchangeStatus'<?php elseif(auth()->guard('seller')->check()): ?>'/seller/product/flashDealchangeStatus'<?php endif; ?>,
                    data: {'status': status, 'id': id,'field': 'is_active'},
                    success: function(data){
                        notification('success', data.message);
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/app/Modules/Backend/ProductManagement/Resources/views/flash_deal/flash_deal.blade.php ENDPATH**/ ?>