<!DOCTYPE html>
<html dir="<?php echo e(lang('direction')); ?>" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php echo e(maanAppearance('keywords')); ?>">
    <meta name="description" content="<?php echo e(maanAppearance('meta_desc')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Apple Favicon -->
    <link rel="apple-touch-icon" href="<?php echo e(asset('uploads')); ?>/<?php echo e(maanAppearance('favicon')); ?>">

    <!-- All Device Favicon -->
    <link rel="icon" href="<?php echo e(asset('uploads')); ?>/<?php echo e(maanAppearance('favicon')); ?>">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">

    <!-- Normalize -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/normalize.css')); ?>">

    <!-- Nice Select -->
    <link rel="stylesheet" href="<?php echo e(asset('customer/css/nice-select.css')); ?>">

    <!-- Default -->
    <link rel="stylesheet" href="<?php echo e(asset('customer/css/default.css')); ?>">

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo e(asset('customer/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('customer/css/style.rtl.css')); ?>">

    <!-- Responsive -->
    <link rel="stylesheet" href="<?php echo e(asset('customer/css/responsive.css')); ?>">
</head>

<body>
<div class="mybazar-login-section">
    <div class="mybazar-login-wrapper">
        <div class="login-wrapper">
            <div class="login-header">
                <img src="<?php echo e(asset('uploads')); ?>/<?php echo e(maanAppearance('logo')); ?>" alt="">
            </div>
            <div class="login-body">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo e(asset('customer/js/vendor/jquery-3.6.0.min.js')); ?>"></script>

<!-- Bootstrap -->
<script src="<?php echo e(asset('customer/js/vendor/bootstrap.min.js')); ?>"></script>

<!-- Nice Select -->
<script src="<?php echo e(asset('customer/js/vendor/jquery.nice-select.min.js')); ?>"></script>

<!-- Waypoints -->
<script src="<?php echo e(asset('customer/js/vendor/waypoints.min.js')); ?>"></script>

<!-- Counter Up -->
<script src="<?php echo e(asset('customer/js/vendor/counterup.min.js')); ?>"></script>

<!-- Count Down -->
<script src="<?php echo e(asset('customer/js/vendor/countdown.js')); ?>"></script>
<script src="<?php echo e(asset('customer/js/vendor/chart.min.js')); ?>"></script>

<!-- Index -->
<script src="<?php echo e(asset('customer/js/index.js')); ?>"></script>

<script src="<?php echo e(asset('customer/js/form-pass.js')); ?>"></script>

<?php echo $__env->yieldPushContent('script'); ?>

</body>

</html>
<?php /**PATH D:\office\mf-final2\main_last\resources\views/frontend/layouts/auth.blade.php ENDPATH**/ ?>