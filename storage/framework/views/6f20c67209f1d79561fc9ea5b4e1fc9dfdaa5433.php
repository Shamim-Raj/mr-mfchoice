
<?php $__env->startSection('title','Users - '); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <?php echo $__env->make('backend.pages.user_permission.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-category" role="tabpanel" aria-labelledby="add-category-tab">
                <div class="container content-title">
                    <h4><?php echo e(__('User Information')); ?></h4>
                </div>
                <div class="container">
                    <form id="usersForm" method="post" action="<?php echo e(route('backend.users.store')); ?>" enctype="multipart/form-data" class="add-brand-form">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('backend.pages.user_permission.users.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="col-lg-7 offset-3">
                            <div class="from-submit-btn">
                                <button class="submit-btn" type="submit"><?php echo e(__('Save')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/user_permission/users/create.blade.php ENDPATH**/ ?>