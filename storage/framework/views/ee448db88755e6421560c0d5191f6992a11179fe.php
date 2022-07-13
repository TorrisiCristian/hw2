<?php $__env->startSection('title','Sign in'); ?>
<?php $__env->startSection('scripts'); ?>
<link rel="stylesheet" href="/css/admin.css">
<script src="/js/controll-form.js"></script>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
            <form action="<?php echo e(url('register')); ?>" method="post" onsubmit="return ValidateSignForm()" name="sign_form" 
            enctype="multipart/form-data" 
            class="text-center">
            <?php echo csrf_field(); ?>
            <?php if(Session::get('error') == 'esistente'): ?>
            <section class="error">Username già utilizzato</section>
            <?php endif; ?>
                FullName: <br>
                <input type="text" name="full_name" placeholder="Insert fullname" > <br><br>
                Username: <br>
                <input type="text" name="username" placeholder="Insert username" > <br><br>
                Password: <br>
                <input type="password" name="password" placeholder="Insert password" ><br><br>
                <br>
                <input type="submit" name="submit" value="Sign" class="btn-primary">
               <div>Hai già un account? <a href="/login">Accedi</a></div> 
            </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sign_log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2-app/resources/views/register.blade.php ENDPATH**/ ?>