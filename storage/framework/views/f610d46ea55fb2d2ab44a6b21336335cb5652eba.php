<script>
    $('.another-variation').on('click', function() {
        var inputs = `<div class="input-group mb-4">
                        <select name="colors[]" class="form-control">
                            <option value="">-<?php echo e(__('Select Color')); ?>-</option>
                            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($color->id); ?>"><?php echo e($color->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <select name="sizes[]" class="form-control">
                            <option value="">-<?php echo e(__('Select Size')); ?>-</option>
                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($sz->id); ?>"><?php echo e($sz->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <input type="number" class="form-control" placeholder="Enter quantity" name="quantities[]">
                        <button type="button" class="btn btn-danger input-group-text btn-sm text-light remove-row"><i class="fas fa-trash d-inline-block mt-1"></i></button>
                    </div>`;

        $('.variants').append(inputs);
    })

    $(document).on('click', '.remove-row', function() {
        $(this).parent('.input-group').remove();
    })
</script>
<?php /**PATH D:\office\mf-final2\main_last\app/Modules/Backend/ProductManagement\Resources/views/products/product-js.blade.php ENDPATH**/ ?>