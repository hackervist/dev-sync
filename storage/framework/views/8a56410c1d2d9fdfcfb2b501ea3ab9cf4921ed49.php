<?php $__env->startSection('content'); ?>

    <div class="alert alert-danger alert-dismissible alert-important" role="alert">

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <strong>Oh Snap!</strong> You are not authorized to do this...

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>