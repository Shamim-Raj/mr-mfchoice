<div class="row">

    <div class="col-lg-3">
        <p><?php echo e(__('Title')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input name="title" type="text" required
                   class="form-control <?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>"
                   value="<?php if($page->title): ?><?php echo e($page->title); ?><?php else: ?><?php echo e(old('title')); ?><?php endif; ?>"
                   placeholder="Page Title">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error invalid-feedback" id="title-error" for="title"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Description')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <textarea name="description" id="editor"
                      class="form-control"><?php if($page->description): ?><?php echo e($page->description); ?><?php else: ?><?php echo e(old('description')); ?><?php endif; ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error invalid-feedback" id="description-error" for="description"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(__('Status')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <select name="is_active"
                    class="form-select form-control<?php echo e($errors->has('is_active') ? ' is-invalid' : ''); ?>">
                <option value="1" <?php if($page->is_active==1): ?> selected <?php endif; ?>><?php echo e(__('Active')); ?></option>
                <option value="0" <?php if($page->is_active==0): ?> selected <?php endif; ?> ><?php echo e(__('Inactive')); ?></option>
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
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/website_setting/pages/form.blade.php ENDPATH**/ ?>