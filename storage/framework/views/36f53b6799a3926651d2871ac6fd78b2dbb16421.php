<?php $__env->startSection('title'); ?>

    <title>Profiles</title>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li class='active'>Profiles</li>
    </ol>

    <h2>Profiles</h2>

    <hr/>

    <?php if($profiles->count() > 0): ?>

        <table class="table table-hover table-bordered table-striped">

            <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Birthdate</th>
            </thead>

            <tbody>

            <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                <tr>
                    <td><?php echo e($profile->id); ?></td>
                    <td><a href="/profile/<?php echo e($profile->id); ?>"><?php echo e($profile->fullName()); ?></a></td>
                    <td><?php echo e($profile->showGender($profile->gender)); ?></td>
                    <td><?php echo e($profile->birthdate->format('m-d-Y')); ?></td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

            </tbody>

        </table>



    <?php else: ?>

        <div>Sorry, no profiles</div>

    <?php endif; ?>

    <?php echo e($profiles->links()); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>