
<html>
    <head>
        <title> <?php echo $__env->yieldContent('title'); ?> </title>
        <?php $__env->startSection('scripts'); ?>

        <?php echo $__env->yieldSection(); ?>
    </head>
    <body>
         <!--Menu section starts -->  
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="main">Home</a></li>
                    <li><a href="admin">Admin</a></li>
                    <li><a href="cerca">Ricerca</a></li>
                    <li><a href="login">Log in </a></li>
                    <!--Inserisco il nome dell'utente solo se è presente anche nel DB-->
                    <?php if( App\Models\Admin::where('username',Session::get('username'))->exists() ): ?>
                    <li><a href="profile"><?php echo e(Session::get('username')); ?> 
                        <?php else: ?>
                            <?php echo e(Session::forget('username')); ?>

                         </a></li>
                         <?php endif; ?>
                    <li><a href="logout">Logout</a></li>
                </ul>
            </div>
        </div>
         <!-- Menu section ends-->
       
         <div class="main-content">
         <?php $__env->startSection('dashboard'); ?>
         <?php echo $__env->yieldSection(); ?>
        </div>
        <?php $__env->startSection('form'); ?>
        <?php echo $__env->yieldSection(); ?>
         
         <div class="footer">
        <div class="wrapper">
           <p class="text-center"> 2022 All rights reserved, Gestion data. Developed by - Torrisi Cristian</p>
            </div>
        </div>
        <!-- Footer content section ends-->
    </body> <?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2-app/resources/views/layouts/menu.blade.php ENDPATH**/ ?>