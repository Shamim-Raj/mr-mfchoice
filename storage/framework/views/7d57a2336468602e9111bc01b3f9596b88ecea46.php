<div class="col-lg-3">
    <p><?php echo e(__('Coupon Code')); ?> <span class="text-red">*</span></p>
</div>
<div class="col-lg-7">
    <div class="input-group">
        <input name="code" type="text" required class="form-control" placeholder="Alphabet & Number">
    </div>
</div>
<div class="col-lg-3">
    <p><?php echo e(__('Product')); ?> <span class="text-red">*</span></p>
</div>
<div class="col-lg-7">
    <div class="input-group">
        <select name="products[]" class="form-select select2 category form-control<?php echo e($errors->has('faq_category_id') ? ' is-invalid' : ''); ?>" required multiple>
            <option value=""><?php echo e(__('Select Product')); ?></option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $subCategory->subSubCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $subSubCategory->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($product->id); ?>"><?php echo e($category->name.' >>> '.$subCategory->name .' >>> '.$subSubCategory->name.' >>> '.$product->name); ?></span></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>

<div class="col-lg-3">
    <p><?php echo e(__('Number of Coupon')); ?> <span class="text-red">*</span></p>
</div>
<div class="col-lg-7">
    <div class="input-group">
        <input name="qty" type="number" required class="form-control" min="0" placeholder="<?php echo e(__('Total coupon can be used')); ?>">
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
<div class="col-lg-3">
    <p><?php echo e(__('Discount')); ?></p>
</div>
<div class="col-lg-5">
    <div class="input-group month overflow-visible">
        <input name="discount" type="number" class="form-control" min="0">
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
            <option value=""><?php echo e(__('Select Product')); ?></option>
            <option value="currency"><?php echo e(__('$')); ?></option>
            <option value="percent"><?php echo e(__('%')); ?></option>
        </select>
    </div>
</div>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/coupon/_product.blade.php ENDPATH**/ ?>