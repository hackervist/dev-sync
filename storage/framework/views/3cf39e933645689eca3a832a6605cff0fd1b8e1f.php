<?php $__env->startSection('title'); ?>

    <title>Documents</title>

    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li class='active'>Documents</li>
    </ol>

    <h2>Documents</h2>

    <hr/>

    <widget-grid></widget-grid>

    <div> <a href="/widget/collab">
            <button type="button" class="btn btn-lg btn-primary">
                Create New
            </button></a>
    </div>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>