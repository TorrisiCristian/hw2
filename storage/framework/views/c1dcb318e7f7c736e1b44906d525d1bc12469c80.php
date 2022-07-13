<?php $__env->startSection('title','Update Admin'); ?>
<?php $__env->startSection('scripts'); ?>
<link rel="stylesheet" href="/css/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="/js/controll-form.js"></script>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard'); ?>
<div class="main-content">

    <div class="wrapper text-center">
  
        <h1>Change Password</h1>
        <br><br>
        <?php $__env->startSection('form'); ?>
        <form action="" method="POST" name="update_pass" onsubmit="return ValidatePassForm()" >
        <?php echo csrf_field(); ?>
        <input type = "hidden" name = "_token" value = "csfr-token>">
            <table class="tbl-30">

                <tr>
                    <td>Current Password:</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo e($data['id']); ?> ">
                    <input type="password" name="current_password" placeholder="Current Password" required>
                    </td> 
                </tr>

                <tr>
                    <td>New Password:</td>
                    <td>
                    <input type="password" name="new_password" placeholder="New password" required>
                    </td>
                </tr>



                <tr>
                    <td>Confirm Password:</td>
                    <td>
                    <input type="password" name="confirm_password" placeholder="Confirm password" required>
                    </td>
                    
                </tr>


                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" >
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary" >
                    </td>
                </tr>
            </table>
            

        </form>
        <?php $__env->stopSection(); ?>
    </div>
    <?php $__env->stopSection(); ?>
</div>


<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2-app/resources/views/change.blade.php ENDPATH**/ ?>