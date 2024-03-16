
<?php $__env->startSection('title','Stock Report - '); ?>
<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('backend.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <?php echo $__env->make('backend.pages.reports.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="stock-report" aria-labelledby="stock-report-tab">
                <div class="container">
                    <div class="content-table mt-0">
                        <table id="mDataTable" class="table p-table">
                            <thead>
                            <tr>
                                <th scope="col"><?php echo e(__('Product Name')); ?></th>
                                <th scope="col"><?php echo e(__('Image')); ?></th>
                                <th scope="col"><?php echo e(__('Sku')); ?></th>
                                <th scope="col"><?php echo e(__('Price')); ?></th>
                                <th scope="col"><?php echo e(__('Stock')); ?></th>
                                <th scope="col"><?php echo e(__('Sold')); ?></th>
                                <th scope="col"><?php echo e(__('Viewed')); ?></th>
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
            $.extend( $.fn.dataTable.defaults, {
                buttons: [
                    {
                        extend: 'collection',
                        text: 'Export',
                        buttons: [
                            {
                                extend: 'copy',
                                text: 'copy',
                                exportOptions: {
                                    // columns: 'th:not(:last-child)'
                                }
                            },
                            {
                                extend: 'excel',
                                text: 'excel',
                                exportOptions: {
                                    // columns: 'th:not(:last-child)'
                                }
                            },
                            {
                                extend: 'csv',
                                text: 'csv',
                                exportOptions: {
                                    columns: 'th:not(:last-child)'
                                }
                            },
                            {
                                extend: 'pdf',
                                text: 'pdf',
                                exportOptions: {
                                    // columns: 'th:not(:last-child)'
                                }
                            },
                            {
                                extend: 'print',
                                text: 'print',
                                exportOptions: {
                                    // columns: 'th:not(:last-child)'
                                }
                            }
                        ]
                    }
                ]
            } );
            $(document).ready(function(){
                // DataTable
                var table = $('#mDataTable');
                table.DataTable({
                    ajax: "<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.stock_report.list')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.stock_report.list')); ?><?php endif; ?>",
                    columns: [
                        { data: 'name' },
                        { data: 'image',searchable:false,sortable:false },
                        { data: 'sku' },
                        { data: 'unit_price' },
                        { data: 'quantity' },
                        { data: 'orders_sum_qty' },
                        { data: 'total_viewed' },
                    ]
                });
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/reports/stock_report.blade.php ENDPATH**/ ?>