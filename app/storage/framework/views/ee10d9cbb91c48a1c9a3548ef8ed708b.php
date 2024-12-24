<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'AdminLTE'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/admin.js','resources/css/admin.css']); ?>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH C:\Solicode_Mobile\13.Eloquence_advanced (en groupe)\app\resources\views/layouts/layout.blade.php ENDPATH**/ ?>