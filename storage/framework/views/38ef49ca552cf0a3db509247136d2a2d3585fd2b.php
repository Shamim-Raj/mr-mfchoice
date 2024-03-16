<div class="row">
    <div class="col-lg-3">
        <p><?php echo e(__('Name')); ?>  <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                   name="name" value="<?php if($user->name): ?><?php echo e($user->name); ?><?php else: ?><?php echo e(old('name')); ?><?php endif; ?>" required
                   autofocus>

            <?php if($errors->has('name')): ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('name')); ?></strong>
            </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('E-Mail Address')); ?>  <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                   name="email" value="<?php if($user->email): ?><?php echo e($user->email); ?><?php else: ?><?php echo e(old('email')); ?><?php endif; ?>" required>

            <?php if($errors->has('email')): ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Password')); ?>  <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input id="password" type="password"
                   class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password"
                   <?php if(!$user->password): ?> required <?php endif; ?>>

            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Confirm Password')); ?>  <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                   <?php if(!$user->password): ?> required <?php endif; ?>>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('User Role')); ?>  <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <select name="role" class="form-control<?php echo e($errors->has('role') ? ' is-invalid' : ''); ?>" required>
                <option value=""><?php echo e(__('Select Role')); ?></option>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($role->name); ?>"
                            <?php if($user->hasRole($role->name)): ?> selected <?php endif; ?> ><?php echo e($role->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div> <div class="col-lg-3">
        <p><?php echo e(__('User Image')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input id="avatar" type="file" class="form-control<?php echo e($errors->has('avatar') ? ' is-invalid' : ''); ?>"
                   name="avatar" accept="image/*" onchange="readURL(this);"
                   value="<?php if($user->avatar): ?><?php echo e($user->avatar); ?><?php else: ?><?php echo e(old('avatar')); ?><?php endif; ?>"
                   autofocus>

            <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <img id="image" src="<?php echo e(asset('uploads/users/'.$user->avatar)); ?>" class="img-wh-100 mt-2">
    </div>

</div>

<?php $__env->startPush('js'); ?>

    <script>

        (function($){
            "use strict";

            $(document).ready(function () {

                $("#usersForm").validate();

            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#image')
                            .attr('src', e.target.result)
                            .width(140)
                            .height(120);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

        })(jQuery)

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/user_permission/users/form.blade.php ENDPATH**/ ?>