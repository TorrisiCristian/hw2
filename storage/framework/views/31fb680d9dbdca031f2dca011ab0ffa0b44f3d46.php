<?php $__env->startSection('title','Manage Admin'); ?>

<?php $__env->startSection('scripts'); ?>
<link rel="stylesheet" href="/css/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dashboard'); ?>
        <!-- Main content section starts-->
        <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1>
            
            <br />
            <a href="<?php echo e(route('admin.create')); ?>" class="btn-primary">Add Admin</a>
            <br /><br /><br />
            <!-- Button to add Admin -->
            
            <?php if(session()->get('completed')): ?>
                <div class="success"><?php echo e(session()->get('completed')); ?> </div><br />
            <?php endif; ?>
            <br /><br /><br />
                <table class="tbl-full">
                    <tr>
                        <th>S.N</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                        <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($admin->id); ?> </td>
                            <td> <?php echo e($admin->fullname); ?> </td>
                            <td> <?php echo e($admin->username); ?></td>
                            <td>
                                
                                <a href="<?php echo e(route('admin.edit',$admin->id)); ?>" class="btn-secondary" >Update </a>
                               
                                <form action="<?php echo e(route('admin.destroy', $admin->id)); ?>" method="post" style="display: inline-block; padding-left:10">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn-danger" id="delete-button" type="submit">Delete </button>
                        </form>
                            </td>
                            
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                       
                </table>
            </div>
        </div>
        <!-- Main content section ends-->

<?php $__env->stopSection(); ?>

   
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2-app/resources/views/admin.blade.php ENDPATH**/ ?>