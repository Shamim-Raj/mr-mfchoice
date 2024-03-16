<div class="row">
    <form class="add-brand-form">
        <div class="row">
            <div class="col-lg-2">
                <p><?php echo e(__('Shop Name')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" name="first_name" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($seller->first_name ?? old('first_name')); ?>" placeholder="Shop Name" required>
                    <?php $__errorArgs = ['first_name'];
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

            <div class="col-lg-2">
                <p><?php echo e(__('Seller Name')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" name="last_name" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e($seller->last_name ?? old('last_name')); ?>" placeholder="Seller Name" required>
                    <?php $__errorArgs = ['last_name'];
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
            <div class="col-lg-2">
                <p><?php echo e(__('Mobile Number')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" name="mobile" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($seller->mobile ?? old('mobile')); ?>" placeholder="Mobile Number" required>
                    <?php $__errorArgs = ['mobile'];
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
            <input type="hidden" name="user_type" value="1">
            <div class="col-lg-2">
                <p><?php echo e(__('Email')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e($seller->email ?? old('email')); ?>" placeholder="Email" required>
                    <?php $__errorArgs = ['email'];
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

            <div class="col-lg-2">
                <p><?php echo e(__('NID')); ?></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="number" name="nid_no" class="form-control <?php $__errorArgs = ['nid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php if($seller->nid_no): ?><?php echo e($seller->nid_no); ?><?php else: ?><?php echo e(old('nid')); ?><?php endif; ?>" placeholder="NID">
                </div>
            </div>
            <div class="col-lg-2">
                <p><?php echo e(__('Passport')); ?></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" name="passport_no" class="form-control" value="<?php if($seller->passport_no): ?> <?php echo e($seller->passport_no); ?><?php else: ?><?php echo e(old('passport')); ?> <?php endif; ?>" placeholder="Passport">
                </div>
            </div>

            <div class="col-lg-2">
                <p><?php echo e(__('Facebook')); ?></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Facebook" name="facebook" value="<?php echo e($seller->facebook ?? old('facebook')); ?>">
                </div>
            </div>
            <div class="col-lg-2">
                <p><?php echo e(__('Gender Optional')); ?></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <select name="gender" class="form-select form-control <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        required>
                        <option value="">Select Gender</option>
                        <option value="1" <?php if($seller->gender == '1'): ?> selected <?php endif; ?>>Male</option>
                        <option value="2" <?php if($seller->gender == '2'): ?> selected <?php endif; ?>>Female</option>
                        <option value="0" <?php if($seller->gender == '0'): ?> selected <?php endif; ?>>Other</option>
                    </select>
                    <?php $__errorArgs = ['gender'];
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
            <div class="col-lg-2">
                <p><?php echo e(__('Post Code')); ?></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" name="post_code" class="form-control <?php $__errorArgs = ['post_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e($seller->post_code ?? old('post_code')); ?>" placeholder="Post Code">
                </div>
            </div>
            <div class="col-lg-2">
                <p><?php echo e(__('City')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" name="city" class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e($seller->city ?? old('city')); ?>" placeholder="City" required>
                    <?php $__errorArgs = ['city'];
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

            <div class="col-lg-2">
                <p><?php echo e(__('Website')); ?></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" name="domain_name"
                        class="form-control <?php $__errorArgs = ['domain_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e($seller->domain_name ?? old('domain_name')); ?>" placeholder="Website">
                </div>
            </div>

            <div class="col-lg-2">
                <p><?php echo e(__('Profile Images')); ?> </p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="file" name="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        name="image" accept="image/*">
                    <?php $__errorArgs = ['image'];
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

            <div class="col-lg-2">
                <p><?php echo e(__('Banner Images')); ?></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="file" name="banner" class="form-control">
                </div>
            </div>

            <div class="col-lg-2">
                <p><?php echo e(__('Password')); ?> <?php if(Request::is('admin/sellers/create')): ?>
                        <span class="text-red">*</span>
                    <?php endif; ?>
                </p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="password" minlength="8" name="password"
                        class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password"
                        <?php if(Request::is('admin/sellers/create')): ?> required <?php endif; ?>>
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
            <div class="col-lg-2">
                <p><?php echo e(__('Confirm Password')); ?> <?php if(Request::is('admin/sellers/create')): ?>
                        <span class="text-red">*</span>
                    <?php endif; ?>
                </p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="password" minlength="8" name="password_confirmation"
                        class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        placeholder="Confirm Password" <?php if(Request::is('admin/sellers/create')): ?> required <?php endif; ?>>
                    <?php $__errorArgs = ['password_confirmation'];
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
            <div class="clearfix"></div>
            <div class="col-lg-2">
                <p><?php echo e(__('Address')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-10">
                <div class="input-group">
                    <textarea name="address" placeholder="Address" required class="form-control"><?php if($seller->address): ?><?php echo e($seller->address); ?><?php else: ?><?php echo e(old('address')); ?><?php endif; ?></textarea>
                    <?php $__errorArgs = ['address'];
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
        </div>
        <div class="container content-title">
            <h4><?php echo e(__('Seller Business Information')); ?></h4>
        </div>
        <div class="clearfix mt-3"></div>
        <div class="row">
            <div class="col-lg-2">
                <p><?php echo e(__('Company Name')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" name="company_name" class="form-control <?php $__errorArgs = ['company_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php if($seller->company_name): ?> <?php echo e($seller->company_name); ?><?php else: ?><?php echo e(old('company_name')); ?> <?php endif; ?>" placeholder="Company Name" required>
                    <?php $__errorArgs = ['company_name'];
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
            <div class="col-lg-2">
                <p><?php echo e(__('Business Email')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="email" name="business_email" class="form-control <?php $__errorArgs = ['business_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php if($seller->business_email): ?> <?php echo e($seller->business_email); ?><?php else: ?><?php echo e(old('business_email')); ?> <?php endif; ?>" placeholder="Business Email" required>
                    <?php $__errorArgs = ['business_email'];
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

            <div class="col-lg-2">
                <p><?php echo e(__('Business Mobile Number')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="number" name="business_mobile" class="form-control <?php $__errorArgs = ['business_mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php if($seller->business_mobile): ?><?php echo e($seller->business_mobile); ?><?php else: ?><?php echo e(old('business_mobile')); ?><?php endif; ?>" placeholder="Business Mobile Numbber" required>
                    <?php $__errorArgs = ['business_mobile'];
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
            <div class="col-lg-2">
                <p><?php echo e(__('TIN/Trade Licence')); ?></p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text" class="form-control" value="<?php echo e($seller->tin ?? old('tin')); ?>" name="tin" placeholder="TIN/Trade Licence">
                </div>
            </div>
            <div class="col-lg-2">
                <p><?php echo e(__('Business Address')); ?> <span class="text-red">*</span></p>
            </div>
            <div class="col-lg-10">
                <div class="input-group">
                    <textarea name="business_address" class="form-control" required placeholder="Business Address"><?php if($seller->business_address): ?><?php echo e($seller->business_address); ?><?php else: ?><?php echo e(old('business_address')); ?><?php endif; ?></textarea>
                    <?php $__errorArgs = ['business_address'];
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
        </div>
        <div class="clearfix mt-3"></div>
        <div class="row">
            <?php if(Request::is('admin/sellers/create')): ?>
                <div class="col-lg-12">
                    <div class="from-submit-btn">
                        <button type="submit" class="submit-btn" type="submit"><i class="fa-solid fa-floppy-disk"></i> <?php echo e(__('Save')); ?></button>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-lg-12">
                    <div class="from-submit-btn">
                        <button type="submit" class="submit-btn"><i class="fa-solid fa-floppy-disk"></i> <?php echo e(__('Update')); ?></button>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </form>
</div>

<?php $__env->startPush('js'); ?>
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                // validate form on keyup and submit
                $("#sellerForm").validate();
            });
        })(jQuery)
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/app/Modules/Backend/SellerManagement/Resources/views/sellers/form.blade.php ENDPATH**/ ?>