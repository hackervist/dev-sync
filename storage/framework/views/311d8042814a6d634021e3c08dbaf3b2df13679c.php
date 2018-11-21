<?php $__env->startSection('title'); ?>

    <title>The Admin Page</title>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Admin</h1>

    <?php echo $__env->make('admin.grid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>