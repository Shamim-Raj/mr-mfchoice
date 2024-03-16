
<?php $__env->startSection('title','Product Review - '); ?>
<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('backend.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container">
            <div class="main-content default-manu">
            <?php echo $__env->make('backend.pages.content_management.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Tab Manu End  -->
                <!-- Tab Content Start -->
                <div class="tab-content default-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-review" aria-labelledby="product-review-tab">

                        <div class="content-table mt-0">
                            <table id="mDataTable" class="table p-table">
                                <thead>
                                <tr>
                                    <th scope="col"><?php echo e(__('ID')); ?></th>
                                    <th scope="col"><?php echo e(__('Product Name')); ?></th>
                                    <th scope="col"><?php echo e(__('Customer')); ?></th>
                                    <th scope="col"><?php echo e(__('Point')); ?></th>
                                    <th scope="col"><?php echo e(__('Comment')); ?></th>
                                    <th scope="col"><?php echo e(__('Date')); ?></th>
                                    <th scope="col"><?php echo e(__('Status')); ?></th>
                                    <th scope="col"><?php echo e(__('Publish')); ?></th>
                                    <th scope="col"><?php echo e(__('Action')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Tab Content End  -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <?php echo $__env->make('backend.includes.datatable_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        $(function () {

            "use strict";
            $(document).ready(function(){
                // DataTable
                var table = $('#mDataTable');
                table.DataTable({
                    ajax: "<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.product_review.list')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.product_review.list')); ?><?php endif; ?>",
                    columns: [
                        { data: 'id'},
                        { data: 'product_name' },
                        { data: 'customer_name'},
                        { data: 'review_point' },
                        { data: 'review_note' },
                        { data: 'created_at' },
                        { data: 'is_active' },
                        { data: 'publish_stat' },
                        { data: 'action',searchable:false,sortable:false },
                    ]
                });

            });

            $(document).on('click', '#mDataTable .status', function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path + <?php if(auth()->guard('admin')->check()): ?>'/admin/product_review/changeStatus'<?php elseif(auth()->guard('seller')->check()): ?>'/seller/product_review/changeStatus'<?php endif; ?>,
                    data: {'status': status, 'id': id, 'field': 'is_active'},
                    success: function (data) {
                        notification('success', data.message);
                    }
                });
            });
            $(document).on('click', '#mDataTable .publish', function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path + <?php if(auth()->guard('admin')->check()): ?>'/admin/product_review/changeStatus'<?php elseif(auth()->guard('seller')->check()): ?>'/seller/product_review/changeStatus'<?php endif; ?>,
                    data: {'status': status, 'id': id, 'field': 'publish_stat'},
                    success: function (data) {
                        notification('success', data.message);
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/content_management/product_review/index.blade.php ENDPATH**/ ?>