
<?php $__env->startSection('title','Withdraws List'); ?>
<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('backend.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container order-manu">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="maan-counter-box">
                        <div class="maan-icon maan-radius maan-icon-clr-lightdanger">
                            <i> <img src="<?php echo e(asset('icons/withdraw.png')); ?>" alt="Icon"></i>
                        </div>
                        <div class="maan-desc">
                            <div class="maan-counter">
                                <div class="maan-counter">
                                        <span class="count-icon">৳</span>
                                    <span class="maan-counter-title timer"><?php echo e($total_withdraws); ?></span>
                                </div>
                                <p class="maan-counter-content"><?php echo e(__('Total Withdraws')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="maan-counter-box">
                        <div class="maan-icon maan-radius maan-icon-clr-lightdanger">
                            <i> <img src="<?php echo e(asset('icons/success-withdraw.png')); ?>" alt="Icon"></i>
                        </div>
                        <div class="maan-desc">
                            <div class="maan-counter">
                                <div class="maan-counter">
                                        <span class="count-icon">৳</span>
                                    <span class="maan-counter-title timer"><?php echo e($approved_withdraws); ?></span>
                                </div>
                                <p class="maan-counter-content"><?php echo e(__('Approved Withdraws')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="maan-counter-box">
                        <div class="maan-icon maan-radius maan-icon-clr-lightblue">
                            <i> <img src="<?php echo e(asset('icons/pending-withdraw.png')); ?>" alt="Icon"></i>
                        </div>
                        <div class="maan-desc">
                            <div class="maan-counter">
                                <div class="maan-counter">
                                        <span class="count-icon">৳</span>
                                    <span class="maan-counter-title timer"><?php echo e($pending_withdraws); ?></span>
                                </div>
                                <p class="maan-counter-content"><?php echo e(__('Pending Withdraws')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="maan-counter-box">
                        <div class="maan-icon maan-radius maan-icon-clr-lightblue">
                            <i> <img src="<?php echo e(asset('icons/cancle-withdraw.png')); ?>" alt="Icon"></i>
                        </div>
                        <div class="maan-desc">
                            <div class="maan-counter">
                                <div class="maan-counter">
                                        <span class="count-icon">৳</span>
                                    <span class="maan-counter-title timer"><?php echo e($rejected_withdraws); ?></span>
                                </div>
                                <p class="maan-counter-content"><?php echo e(__('Rejected Withdraws')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <h5 class="py-3"><?php echo e(__('Withdraws List')); ?></h3>
            <div class="content-table mt-0">
                <table id="mDataTable" class="table p-table">
                    <thead>
                    <tr>
                        <th scope="col"><?php echo e(__('Trx Id')); ?></th>
                        <th scope="col"><?php echo e(__('Seller')); ?></th>
                        <th scope="col"><?php echo e(__('Account Holder')); ?></th>
                        <th scope="col"><?php echo e(__('Account No.')); ?></th>
                        <th scope="col"><?php echo e(__('Amount')); ?></th>
                        <th scope="col"><?php echo e(__('Withdraw Date')); ?></th>
                        <th scope="col"><?php echo e(__('Status')); ?></th>
                        <th scope="col"><?php echo e(__('Action')); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
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
                    ajax: "<?php echo e(route('backend.withdraws.data', ['withdraw' => request('withdraw')])); ?>",
                    columns: [
                        { data: 'trx_id'},
                        { data: 'seller'},
                        { data: 'account_holder'},
                        { data: 'account'},
                        { data: 'amount'},
                        { data: 'withdraw_date'},
                        { data: 'status'},
                        { data: 'action'},
                    ]
                });
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/withdraws/index.blade.php ENDPATH**/ ?>