
<?php $__env->startSection('title','Withdraws View'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                        <h5><a class="btn btn-sm btn-primary text-light rounded-pill" href="<?php echo e(route('backend.withdraws.index')); ?>"> <i class="fa fa-backward" aria-hidden="true"></i> <?php echo e(__('Back')); ?></a> <?php echo e(__('Withdraw view')); ?></h4>
                        <div>
                            <?php if($withdraw->status != 'approved'): ?>
                            <a class="action-confirm btn btn-success text-light" data-type="GET" data-action="<?php echo e(route('backend.withdraws.approved', ['withdraw' => $withdraw->id])); ?>" data-content="You want to approve this withdraw?" data-icon="success">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <?php echo e(__('Approve')); ?>

                            </a>
                            <?php endif; ?>
                            <?php if($withdraw->status != 'rejected'): ?>
                            <a class="action-confirm btn btn-danger text-light" data-type="GET" data-action="<?php echo e(route('backend.withdraws.reject', ['withdraw' => $withdraw->id])); ?>" data-content="You want to reject this withdraw?" data-icon="warning">
                                <i class="fa fa-ban" aria-hidden="true"></i>
                                <?php echo e(__('Reject')); ?>

                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th><b><?php echo e(__('Amount')); ?></b></th>
                                <td><?php echo e(currency($withdraw->amount,2)); ?></td>
                                <th><b><?php echo e(__('Created At')); ?></b></th>
                                <td><?php echo e(date("d M Y", strtotime($withdraw->created_at)) . ' at ' . date("h:i A", strtotime($withdraw->created_at))); ?></td>
                            </tr>
                            <tr>
                                <th><b><?php echo e(__('Trx Id')); ?></b></th>
                                <td><?php echo e($withdraw->trx_id); ?></td>
                                <th><b><?php echo e(__('Seller')); ?></b></th>
                                <td><?php echo e($withdraw->seller->first_name .' '. $withdraw->seller->last_name); ?></td>
                            </tr>
                            <tr>
                                <th><b><?php echo e(__('Status')); ?></b></th>
                                <td>
                                    <?php if($withdraw->status == 'pending'): ?>
                                        <span class="badge bg-warning"><?php echo e(__('Pending')); ?></span>
                                    <?php elseif($withdraw->status == 'rejected'): ?>
                                        <span class="badge bg-danger"><?php echo e(__('Rejected')); ?></span>
                                    <?php elseif($withdraw->status == 'approved'): ?>
                                        <span class="badge bg-success"><?php echo e(__('Approved')); ?></span>
                                    <?php endif; ?>
                                </td>
                                <th><b><?php echo e(__('Bank name')); ?></b></th>
                                <td><?php echo e($withdraw->bank_name); ?></td>
                            </tr>
                            <tr>
                                <th><b><?php echo e(__('Bank branch')); ?></b></th>
                                <td><?php echo e($withdraw->bank_name); ?></td>
                                <th><b><?php echo e(__('Account holder')); ?></b></th>
                                <td><?php echo e($withdraw->account_holder); ?></td>
                            </tr>
                            <tr>
                                <th><b><?php echo e(__('Account')); ?></b></th>
                                <td><?php echo e($withdraw->account); ?></td>
                                <th><b><?php echo e(__('Account Type')); ?></b></th>
                                <td><?php echo e($withdraw->account_type); ?></td>
                            </tr>
                            <tr>
                                <th><b><?php echo e(__('Routing number')); ?></b></th>
                                <td><?php echo e($withdraw->routing_number); ?></td>
                                <th><b><?php echo e(__('Swift code')); ?></b></th>
                                <td><?php echo e($withdraw->swift_code); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/withdraws/show.blade.php ENDPATH**/ ?>