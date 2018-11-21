<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make(('layouts.meta'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('title'); ?>

    <?php echo $__env->make('layouts.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('css'); ?> <!--includes the dojo-->

</head>

<body role="document">

<?php echo $__env->make('layouts.facebook', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container theme-showcase" role="main">
<?php echo $__env->yieldContent('js'); ?> <!--The dojo-->
    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div> <!-- /container -->

<?php echo $__env->make('layouts.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('Alerts::show', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('js'); ?> <!--The dojo-->
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>