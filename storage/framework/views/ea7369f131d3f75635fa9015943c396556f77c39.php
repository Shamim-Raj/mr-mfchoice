
<?php $__env->startSection('title','Product Review - '); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="create-product_review" role="tabpanel"
                 aria-labelledby="create-product_review-tab">
                <div class="container content-title">
                    <h4><?php echo e(__('Product Review')); ?></h4>
                </div>
                <div class="container">
                    <div class="row">
                        <form class="add-brand-form">
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><?php echo e(__('Product Name')); ?></p>
                                </div>
                                <div class="col-lg-7">
                                    <?php echo e($product_review->product->name??''); ?>

                                </div>
                                <div class="col-lg-3">
                                    <p><?php echo e(__('Customer')); ?></p>
                                </div>
                                <div class="col-lg-7">
                                    <?php echo e($product_review->customer?$product_review->customer->full_name():''); ?>

                                </div>
                                <div class="col-lg-3">
                                    <p><?php echo e(__('Point')); ?></p>
                                </div>
                                <div class="col-lg-7">
                                    <?php echo e($product_review->review_point??''); ?>

                                </div>
                                <div class="col-lg-3">
                                    <p><?php echo e(__('Comment')); ?></p>
                                </div>
                                <div class="col-lg-7">
                                    <?php echo e($product_review->review_note??''); ?>

                                </div>
                                <div class="col-lg-3">
                                    <p><?php echo e(__('Status')); ?></p>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-switch">
                                        <input class="form-check-input status" type="checkbox"
                                               data-id="<?php echo e($product_review->id); ?>"
                                               <?php if($product_review->is_active): ?>checked <?php endif; ?>>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <p><?php echo e(__('Publish')); ?></p>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-switch">
                                        <input class="form-check-input publish" type="checkbox"
                                               data-id="<?php echo e($product_review->id); ?>"
                                               <?php if($product_review->publish_stat): ?>checked <?php endif; ?>>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        $(function () {

            "use strict";
            $(document).on('click', '.status', function () {
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
            $(document).on('click', '.publish', function () {
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/content_management/product_review/show.blade.php ENDPATH**/ ?>