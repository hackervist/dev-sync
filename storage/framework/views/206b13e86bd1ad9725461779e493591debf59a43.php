<?php $__env->startSection('title'); ?>

    <title>Edit Your User Settings</title>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

        <ol class='breadcrumb'>
            <li><a href='/'>Home</a></li>
            <li>Settings</li>
        </ol>


        <div class="pull-right">

            <a href="<?php echo e(url('/password/reset')); ?>">

                <button type="button" class="btn btn-lg btn-primary">

                    Reset Password

                </button>

            </a>

        </div>

        <h1 class="myTableFont">Update <?php echo e($user->name); ?></h1>

        <hr/>


        <?php echo $__env->make('errors.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        <form class="form" role="form" method="POST" action="<?php echo e(url('/settings')); ?>">

        <?php echo e(csrf_field()); ?>


        <!-- name Form Input -->

            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">

                <label class="control-label">User Name</label>

                <input type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>">

                <?php if($errors->has('name')): ?>

                    <span class="help-block">
                <strong><?php echo e($errors->first('name')); ?></strong>
                </span>

                <?php endif; ?>

            </div>

            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <label for="email" class="control-label">E-Mail Address</label>

                <div>
                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e($user->email); ?>">

                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                    <?php endif; ?>
                </div>
            </div>

            <!-- is_subscribed Form Input -->

            <div class="form-group<?php echo e($errors->has('is_subscribed') ? ' has-error' : ''); ?>">

                <label class="control-label">Is Subscribed?</label>


                <select class="form-control" id="is_subscribed" name="is_subscribed">
                    <option value="<?php echo e($user->is_subscribed); ?>"><?php echo e($user->is_subscribed == 1 ? 'Yes' : 'No'); ?></option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>


                <?php if($errors->has('is_subscribed')): ?>

                    <span class="help-block">
                <strong><?php echo e($errors->first('is_subscribed')); ?></strong>
                </span>

                <?php endif; ?>

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary btn-lg">

                    Update

                </button>

            </div>

        </form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>