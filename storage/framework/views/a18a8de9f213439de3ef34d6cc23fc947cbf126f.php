<?php $__env->startSection('title'); ?>

    <title>Edit a Profile</title>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if(Auth::user()->isAdmin()): ?>

        <ol class='breadcrumb'>
            <li><a href='/'>Home</a></li>
            <li><a href='/profile'>Profiles</a></li>
            <li><a href='/profile/<?php echo e($profile->id); ?>'><?php echo e($profile->fullName()); ?></a></li>
        </ol>

    <?php else: ?>

        <ol class='breadcrumb'>
            <li><a href='/'>Home</a></li>
            <li><a href='/profile/<?php echo e($profile->id); ?>'><?php echo e($profile->fullName()); ?></a></li>
        </ol>

    <?php endif; ?>

    <h2>Edit Your Profile</h2>

    <hr/>

    <form class="form" role="form" method="POST" action="<?php echo e(url('/profile/'. $profile->id)); ?>">

        <input type="hidden" name="_method" value="patch">

    <?php echo e(csrf_field()); ?>


    <!-- first_name Form Input -->

        <div class="form-group<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">

            <label class="control-label">First Name</label>

            <input type="text" class="form-control" name="first_name" value="<?php echo e($profile->first_name); ?>">

            <?php if($errors->has('first_name')): ?>

                <span class="help-block">
                <strong><?php echo e($errors->first('first_name')); ?></strong>
                </span>

            <?php endif; ?>

        </div>

        <!-- last_name Form Input -->

        <div class="form-group<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">

            <label class="control-label">Last Name</label>

            <input type="text" class="form-control" name="last_name" value="<?php echo e($profile->last_name); ?>">

            <?php if($errors->has('last_name')): ?>

                <span class="help-block">
                <strong><?php echo e($errors->first('last_name')); ?></strong>
                </span>

            <?php endif; ?>

        </div>

         <!-- last_name Form Input -->

        <div class="form-group<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">

            <label class="control-label">Last Name</label>

            <input type="text" class="form-control" name="last_name" value="<?php echo e($profile->last_name); ?>">

            <?php if($errors->has('last_name')): ?>

                <span class="help-block">
                <strong><?php echo e($errors->first('last_name')); ?></strong>
                </span>

            <?php endif; ?>

        </div>


        

        <!-- birthdate Form Input -->

        <div class="form-group<?php echo e($errors->has('birthdate') ? ' has-error' : ''); ?>">

            <label class="control-label">Birthdate</label>

                <div>

                <?php echo e(Form::date('birthdate', $profile->birthdate)); ?>


                </div>


            <?php if($errors->has('birthdate')): ?>

                <span class="help-block">
                <strong><?php echo e($errors->first('birthdate')); ?></strong>
                </span>

            <?php endif; ?>

        </div>

        <!-- Gender Form Input -->

        <div class="form-group<?php echo e($errors->has('gender') ? ' has-error' : ''); ?>">

            <label class="control-label">Gender</label>


            <select class="form-control" id="gender" name="gender">
                <option value="<?php echo e($profile->gender); ?>"><?php echo e($profile->showGender($profile->gender)); ?></option>
                <option value="1">Male</option>
                <option value="0">Female</option>
            </select>


            <?php if($errors->has('gender')): ?>

                <span class="help-block">
                <strong><?php echo e($errors->first('gender')); ?></strong>
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