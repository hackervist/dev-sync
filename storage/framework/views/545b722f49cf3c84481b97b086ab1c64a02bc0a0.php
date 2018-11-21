<?php $__env->startSection('title'); ?>

    <title>Profile</title>

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



    <h1><?php echo e($profile->fullName()); ?></h1>

    <hr/>

    <div class="panel panel-default">

        <!-- Table -->
        <table class="table table-striped">
            <tr>

                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Birthdate</th>
                <?php if(Auth::user()->adminOrCurrentUserOwns($profile)): ?>
                    <th>Edit</th>
                <?php endif; ?>
                <th>Delete</th>

            </tr>


            <tr>
                <td><?php echo e($profile->id); ?> </td>
                <td> <a href="/profile/<?php echo e($profile->id); ?>/edit">
                        <?php echo e($profile->fullName()); ?></a></td>
                <td><?php echo e($profile->showGender($profile->gender)); ?></td>
                <td><?php echo e($profile->birthdate->format('m-d-Y')); ?></td>

                <?php if(Auth::user()->adminOrCurrentUserOwns($profile)): ?>

                    <td> <a href="/profile/<?php echo e($profile->id); ?>/edit">

                            <button type="button" class="btn btn-default">Edit</button></a></td>

                <?php endif; ?>

                <td>
                    <div class="form-group">

                        <form class="form" role="form" method="POST" action="<?php echo e(url('/profile/'. $profile->id)); ?>">
                            <input type="hidden" name="_method" value="delete">
                            <?php echo e(csrf_field()); ?>


                            <input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

                        </form>
                    </div>
                </td>

            </tr>

        </table>


    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>