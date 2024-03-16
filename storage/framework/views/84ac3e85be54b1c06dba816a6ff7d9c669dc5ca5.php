<div class="col-lg-3">
    <p><?php echo e(__('Coupon Code')); ?> <span class="text-red">*</span></p>
</div>
<div class="col-lg-7">
    <div class="input-group">
        <input name="code" type="text" required class="form-control" value="<?php echo e(old('code')); ?>" placeholder="Alphabet & Number">
    </div>
</div>

<div class="col-lg-3">
    <p><?php echo e(__('Minimum Shopping')); ?> <span class="text-red">*</span></p>
</div>
<div class="col-lg-7">
    <div class="input-group">
        <input name="min_buy" type="number" required class="form-control" placeholder="<?php echo e(__('Minimum shopping amount to eligible for this coupon')); ?>">
    </div>
</div>

<div class="col-lg-3">
    <p><?php echo e(__('Maximum Discount')); ?> <span class="text-red">*</span></p>
</div>
<div class="col-lg-7">
    <div class="input-group">
        <input name="max_discount" type="number" required class="form-control" placeholder="<?php echo e(__('Maximum amount to be discount')); ?>">
    </div>
</div>

<div class="col-lg-3">
    <p><?php echo e(__('Number of Coupon')); ?> <span class="text-red">*</span></p>
</div>
<div class="col-lg-7">
    <div class="input-group">
        <input name="qty" type="number" required class="form-control" placeholder="<?php echo e(__('Maximum usage of this coupon')); ?>">
    </div>
</div>

<div class="col-lg-3">
    <p><?php echo e(__('Discount')); ?></p>
</div>
<div class="col-lg-5">
    <div class="input-group month overflow-visible">
        <input name="discount" type="number" class="form-control">
        <?php $__errorArgs = ['discount'];
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
    <div class="input-group month overflow-visible">
        <select name="discount_type" class="form-select category form-control" required>
            <option value=""><?php echo e(__('Discount Type')); ?></option>
            <option value="amount"><?php echo e(__('$')); ?></option>
            <option value="percent"><?php echo e(__('%')); ?></option>
        </select>
    </div>
</div>

<div class="col-lg-3">
    <p><?php echo e(__('Start')); ?></p>
</div>
<div class="col-lg-7">
    <div class="input-group month overflow-visible">
        <input name="start" type="date" min="<?php echo e(date("Y-m-d")); ?>" class="form-control">
        <?php $__errorArgs = ['start'];
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
    <p><?php echo e(__('End')); ?></p>
</div>
<div class="col-lg-7">
    <div class="input-group month overflow-visible">
        <input name="end" type="date" min="<?php echo e(date("Y-m-d")); ?>" class="form-control">
        <?php $__errorArgs = ['end'];
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
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/coupon/_cart.blade.php ENDPATH**/ ?>