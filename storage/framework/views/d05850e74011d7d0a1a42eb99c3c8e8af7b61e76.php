<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(__('Customer Information')); ?></title>
    <style>
        .email-container{
            justify-content: center;
            display: grid;
            background-color: #ccc;
            padding: 0 5%
        }
        .email-header{
            text-align: center;
        }
        .email-header{
            background-color: orange;
            padding: 10px;
        }
        .hyper-link
        {
            color: orangered;
        }
        .hyper-link:hover
        {
            color: #1c881c;
        }
        .email-btn{
            border: 1px solid orange;
            padding: 10px;
            border-radius: 5px;
            background-color: orange;
            color: white;
            text-decoration: none;
            display: grid;
            justify-content: center;
            margin: 0 15rem;
            text-align: center;
        }

        .email-btn:hover{
            border: 1px solid #2ec618;
            background-color: #22b31d;
            color: #f4f4f4;
        }

        hr{
            border: 1px solid #bbbbbb;
            width: 100%
        }

        .copyright{
            color: #248c48;
            font-size: 11px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="email-container">
    <h2 class="email-header"><?php echo e(config('app.name')); ?></h2>

    <div class="email-body">
        <p><?php echo e(__('Dear')); ?> <?php echo e($data->name); ?>,<br><br></p>
        <p><?php echo e($data->message); ?></p>

        <p><?php echo e(__('Regards')); ?>,<br> <?php echo e(config('app.name')); ?></p>
    </div>

    <hr>

    <p class="copyright">&copy; <?php echo e(config('app.name')); ?>. <?php echo e(__('All right reserved')); ?>.</p>
</div>
</body>
</html>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/emails/customer.blade.php ENDPATH**/ ?>