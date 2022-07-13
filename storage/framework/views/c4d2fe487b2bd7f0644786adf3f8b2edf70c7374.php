<html>

<head>

<title><?php echo $__env->yieldContent('title'); ?></title>
<?php $__env->startSection('scripts'); ?>

<?php echo $__env->yieldSection(); ?>

</head>

<body>
        <div class="login">
            <h1 class="text-center">Log in </h1>
            <br><br>

            <br><br>

            <?php $__env->startSection('form'); ?>

            <?php echo $__env->yieldSection(); ?>


        </div>
    </body>



</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2-app/resources/views/layouts/log_in.blade.php ENDPATH**/ ?>