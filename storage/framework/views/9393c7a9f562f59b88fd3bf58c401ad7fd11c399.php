
<?php $__env->startSection('title','Customer Report - '); ?>
<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('backend.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <?php echo $__env->make('backend.pages.reports.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="order-report" aria-labelledby="order-report-tab">
                <div class="container">
                    <div class="content-table mt-0">
                        <table id="mDataTable" class="table p-table">
                            <thead>
                            <tr>
                                <th scope="col"><?php echo e(__('Invoice#')); ?></th>
                                <th scope="col"><?php echo e(__('Customer')); ?></th>
                                <th scope="col"><?php echo e(__('Phone')); ?></th>
                                <th scope="col"><?php echo e(__('Email')); ?></th>
                                <th scope="col"><?php echo e(__('Location')); ?></th>
                                <th scope="col"><?php echo e(__('Quantity')); ?></th>
                                <th scope="col"><?php echo e(__('Amount')); ?></th>
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
                                }
                            },
                            {
                                extend: 'excel',
                                text: 'excel',
                                exportOptions: {
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
                                }
                            },
                            {
                                extend: 'print',
                                text: 'print',
                                exportOptions: {
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
                    ajax: "<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.customer_report.list')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.customer_report.list')); ?><?php endif; ?>",
                    columns: [
                        { data: 'order_no' },
                        { data: 'last_name' },
                        { data: 'mobile' },
                        { data: 'email' },
                        { data: 'shipping_address_1' },
                        { data: 'details_sum_qty' },
                        { data: 'total_price' },
                    ]
                });
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/reports/customer_report.blade.php ENDPATH**/ ?>