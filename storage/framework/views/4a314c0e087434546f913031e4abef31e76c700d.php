<?php $__env->startSection('title','Food Order Website - Ricerca'); ?>
<?php $__env->startSection('scripts'); ?>
<link rel="stylesheet" href="/css/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<script src="/js/call-spotify.js" defer></script>
<?php $__env->stopSection(); ?>

<html>
<?php $__env->startSection('dashboard'); ?>
 
    
        <body>
            <!--Form -->
            <?php $__env->startSection('form'); ?>
            <form action="" method="post" name="form_spo"  id="spo" class="text-center">
                <?php echo csrf_field(); ?>
                Autore: <br>
                <input type="text" name="autore" placeholder="Insert autore" id="autore" > <br><br>
                <br>
                <input type="submit" name="submit" value="search" class="btn-primary">
            </form>
            <?php $__env->stopSection(); ?>
<!--Locazione dove far apparire i risultati-->
        
    <article id="album-view">
        
    </article>
        </body>
      <?php $__env->stopSection(); ?>
</html>


<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2-app/resources/views/cerca.blade.php ENDPATH**/ ?>