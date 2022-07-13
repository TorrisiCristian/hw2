<?php $__env->startSection('title','Create Admin'); ?>
<?php $__env->startSection('scripts'); ?>
<link rel="stylesheet" href="/css/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="/js/controll-form.js"></script>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dashboard'); ?>
<div class="main-content">

    <div class="wrapper">
        <h1 class="text-center">Add Admin </h1>
        <div id="errorMessage"></div>

        

        
        <?php $__env->startSection('form'); ?>
        <form action="<?php echo e(route('admin.store')); ?>" method="POST" onsubmit="return ValidateAdd()" >
        <?php echo csrf_field(); ?>
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name = "fullname" placeholder="Add a fullname" id="full_name" >
                    </td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name = "username" placeholder="Add an username" id="username" >
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name = "password" placeholder="Add a password" id="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Create Admin" class="btn-secondary">
                    </td>
                </tr>
                    
                

            </table>

        </form>
        <?php $__env->stopSection(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2-app/resources/views/create.blade.php ENDPATH**/ ?>