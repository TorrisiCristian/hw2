<?php $__env->startSection('title','Log in'); ?>
<?php $__env->startSection('scripts'); ?>
<link rel="stylesheet" href="/css/admin.css">
<script src="/js/controll-form.js"></script>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('form'); ?>
            <form action="<?php echo e(url('login')); ?>" method="post" onsubmit="return ValidateSignForm()" name="login_form" 
            class="text-center">
            <?php echo csrf_field(); ?>
            <?php if($error == 'campo_vuoto'): ?>
            <section class="error">Riempi tutti i campi</section>
            <?php elseif($error == 'errato'): ?>
            <section class="error">Utente non esistente</section>
            <?php endif; ?>
                Username: <br>
                <input type="text" name="username" placeholder="Insert username" > <br><br>
                Password: <br>
                <input type="password" name="password" placeholder="Insert password" ><br><br>
                <br>
                <input type="submit" name="submit" value="Sign" class="btn-primary">
               <div>Non sei registrato? <a href="/register">Registrati</a></div> 
            </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.log_in', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2-app/resources/views/login.blade.php ENDPATH**/ ?>