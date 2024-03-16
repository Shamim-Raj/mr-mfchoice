<div class="row">
    <div class="col-lg-3">
        <p><?php echo e(__('Name')); ?>  <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input type="text" class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" required
                   id="name"
                   name="name" value="<?php if($role->name): ?><?php echo e($role->name); ?><?php else: ?><?php echo e(old('name')); ?><?php endif; ?>" autofocus>

            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>)
            <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Guard Name')); ?>  <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <select class="form-control form-select<?php echo e($errors->has('guard_name') ? ' is-invalid' : ''); ?>" required id="guard_name"
                    name="guard_name">
                <option value=""><?php echo e(__('Select Guard')); ?></option>
                <option value="admin" <?php if($role->guard_name=='admin'||old('guard_name')=='admin'): ?> selected <?php endif; ?>><?php echo e(__('Admin')); ?></option>
                <option value="seller" <?php if($role->guard_name=='seller'||old('guard_name')=='seller'): ?> selected <?php endif; ?>><?php echo e(__('Seller')); ?></option>
            </select>
            <?php $__errorArgs = ['guard_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <label class="error" id="guard_name-error" for="guard_name"><?php echo e($message); ?></label>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Permissions')); ?>  <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <select id="permissions" class="form-control select2" name="permissions[]" multiple="multiple">
                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($perm->name); ?>"
                            <?php if($role->name && $role->hasPermissionTo($perm->name)): ?> selected <?php endif; ?>><?php echo e($perm->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['permissions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>)
            <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
</div>

<?php $__env->startPush('js'); ?>
    <script>
        (function($){
            "use strict";
            $(document).ready(function () {

                $("#rolesForm").validate();

                $('#guard_name').on('change', function(e) {
                    let guard = $(this).val();
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: public_path +'/admin/role_permissions',
                        data: {'guard': guard},
                        success: function(data){
                           if(data.success){
                               $('#permissions').empty();
                               $.each(data.permissions,function(index, perm){
                                   var option = new Option(perm, perm, true, false);
                                   $('#permissions').append(option).trigger('change');
                               });
                           }
                        }
                    });
                });

                $('.select2').select2({
                    tags: true
                });
            });
        })(jQuery)

    </script>
<?php $__env->stopPush(); ?>

<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/user_permission/roles/form.blade.php ENDPATH**/ ?>