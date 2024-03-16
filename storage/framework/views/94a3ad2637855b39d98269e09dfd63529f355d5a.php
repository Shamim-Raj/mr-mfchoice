<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto Condensed', sans-serif;
        }
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

        .email-body {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="email-container">
    <h2 class="email-header"><?php echo e(config('app.name')); ?></h2>
    <div class="email-body">
        <h3><?php echo e(__('A new review from '. $options['user'])); ?> (<?php echo e($options['email']); ?>)</h3>
        <?php for($i = 0; $i < $options['review_point']; $i++): ?>
        ⭐
        <?php endfor; ?>
        <p><?php echo e($options['review_note']); ?></p>
        <a target="_blank" href="<?php echo e($options['link']); ?>" class="email-btn"><?php echo e(__('CLICK TO VIEW')); ?></a>
        <br><br>
    </div>
</div>
</body>
</html>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/frontend/mail/product-review.blade.php ENDPATH**/ ?>