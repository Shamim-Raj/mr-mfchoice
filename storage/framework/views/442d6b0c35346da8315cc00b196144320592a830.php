<div class="row">

    <div class="col-lg-3">
        <p><?php echo e(__('Name')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input name="name" type="text" required
                   class="form-control <?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>"
                   value="<?php if($color->name): ?><?php echo e($color->name); ?><?php else: ?><?php echo e(old('name')); ?><?php endif; ?>"
                   placeholder="Color Name">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error invalid-feedback" id="name-error" for="name"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Color Code')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input type="color" name="hex" class="form-control" value="<?php echo e($color->hex); ?>">
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Status')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <select name="is_active"
                    class="form-select form-control<?php echo e($errors->has('is_active') ? ' is-invalid' : ''); ?>">
                <option value="1" <?php if($color->is_active==1): ?> selected <?php endif; ?>><?php echo e(__('Active')); ?></option>
                <option value="0" <?php if($color->is_active==0): ?> selected <?php endif; ?> ><?php echo e(__('Inactive')); ?></option>
            </select>
    </div>
</div>

<?php $__env->startPush('js'); ?>
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {

                // validate form on keyup and submit
                $("#pageForm").validate({
                    ignore: ".note-editor *"
                });

                $('#editor').summernote({
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['codeview', 'help']]
                    ]
                })
            });
        })(jQuery);

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/colors/pages/form.blade.php ENDPATH**/ ?>