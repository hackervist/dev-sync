<?php $__env->startSection('title'); ?>

    <title>Edit Document</title>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/widget'>Documents</a></li>
        <li><a href='/widget/<?php echo e($widget->id); ?>'><?php echo e($widget->name); ?></a></li>
        <li class='active'>Edit</li>
    </ol>

    <h1>Edit Document</h1>

    <hr/>


    <form class="form" role="form" method="POST" action="<?php echo e(url('/widget/'. $widget->id)); ?>">
        <input type="hidden" name="_method" value="patch">
    <?php echo e(csrf_field()); ?>


    <!-- widget_name Form Input -->
        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <label class="control-label">Document Name</label>

            <input type="text" class="form-control" name="name" value="<?php echo e($widget->name); ?>">

            <?php if($errors->has('name')): ?>
                <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
            <?php endif; ?>

        </div>


          <!-- widget_description Form Input -->
        <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
            <label class="control-label">Document Description</label>

            <input type="text" class="form-control" name="description" value="<?php echo e($widget->description); ?>">

            <?php if($errors->has('description')): ?>
                <span class="help-block">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
            <?php endif; ?>

        </div>






        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">
                Edit
            </button>
        </div>

    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>