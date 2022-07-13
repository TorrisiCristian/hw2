<?php $__env->startSection('title','My Profile'); ?>
<?php $__env->startSection('scripts'); ?>
<link rel="stylesheet" href="/css/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="/js/visual-pref.js" defer> </script>
<?php $__env->stopSection(); ?>

<html>
<?php $__env->startSection('dashboard'); ?>
    <body>

        <h1 class="user-display">
            Benvenuto, <?php echo e(Session::get('username')); ?>

        </h1>

       <div class="text-center">Questo è la mia pagina di profilo di <?php echo e(Session::get('username')); ?> </div> 
        <br><br>
       <div class="text-center">
            <a href="<?php echo e(url('admin')); ?>" class="btn-secondary">Modifica credenziali</a></div>

            <!-- Dovrò inserire anche gli album preferiti del relativo utente-->
            
           
            <h1 class="user-display text-center">I miei preferiti</h1>


            <article id="album-view">
			
             </article>
             
    </body>
    <?php $__env->stopSection(); ?>
</html>


<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2-app/resources/views/profile.blade.php ENDPATH**/ ?>