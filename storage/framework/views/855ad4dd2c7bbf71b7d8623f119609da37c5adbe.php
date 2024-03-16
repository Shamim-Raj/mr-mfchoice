<div class="row">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <span class="title"><?php echo e(__('Announcements Title')); ?> <span class="text-red">*</span></span>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" class="form-control <?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" name="title"
                               value="<?php if($announcements->title): ?><?php echo e($announcements->title); ?><?php else: ?><?php echo e(old('title')); ?><?php endif; ?>"
                               placeholder="Announcements Title" required>
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <label class="error" id="title-error" for="title"><?php echo e($message); ?></label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="title"><?php echo e(__('Thumbnail')); ?> <span class="text-red">*</span></span>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="file" class="form-control <?php echo e($errors->has('thumbnail') ? ' is-invalid' : ''); ?>" name="thumbnail" accept="image/*"
                               <?php if(Request::is('website_setting/announcements/create')): ?> required <?php endif; ?>>
                        <?php $__errorArgs = ['thumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <label class="error" id="thumbnail-error" for="thumbnail"><?php echo e($message); ?></label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="title"><?php echo e(__('Description')); ?> <span class="text-red">*</span></span>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                                <textarea name="description"><?php if($announcements->description): ?><?php echo e($announcements->description); ?><?php else: ?><?php echo e(old('description')); ?><?php endif; ?></textarea>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <label class="error" id="description-error" for="description"><?php echo e($message); ?></label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="title"><?php echo e(__('Sale price')); ?> <span class="text-red">*</span></span>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="number" min="0" name="sale_price" class="form-control <?php echo e($errors->has('sale_price') ? ' is-invalid' : ''); ?>"
                               value="<?php if($announcements->sale_price): ?><?php echo e($announcements->sale_price); ?><?php else: ?><?php echo e(old('sale_price')); ?><?php endif; ?>"
                               placeholder="Sale price" required>
                        <?php $__errorArgs = ['sale_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <label class="error" id="sale_price-error" for="sale_price"><?php echo e($message); ?></label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="title"><?php echo e(__('Old price')); ?> <span class="text-red">*</span></span>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="number" min="0" name="old_price" class="form-control <?php echo e($errors->has('old_price') ? ' is-invalid' : ''); ?>"
                               value="<?php if($announcements->old_price): ?><?php echo e($announcements->old_price); ?><?php else: ?><?php echo e(old('old_price')); ?><?php endif; ?>" placeholder="Old price" required>
                        <?php $__errorArgs = ['old_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <label class="error" id="old_price-error" for="old_price"><?php echo e($message); ?></label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="title"><?php echo e(__('Expire At')); ?></span>
                </div>
                <div class="col-md-7">
                    <div class="input-group month overflow-visible">
                        <input name="expire_at" type="date" min="<?php echo e(date("Y-m-d")); ?>"
                               value="<?php if($announcements->expire_at): ?><?php echo e(date("Y-m-d",strtotime($announcements->expire_at))); ?><?php else: ?><?php echo e(old('expire_at')); ?><?php endif; ?>"
                               class="form-control <?php $__errorArgs = ['expire_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                        <?php $__errorArgs = ['expire_at'];
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
        </div>

    </div>
</div>

<?php $__env->startPush('js'); ?>
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {

                // validate form on keyup and submit
                $("#announcementsForm").validate({
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
                });
            });
        })(jQuery);

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/website_setting/announcements/form.blade.php ENDPATH**/ ?>