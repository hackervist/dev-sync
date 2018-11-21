<?php $__env->startSection('title'); ?>

    <title>Users</title>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li class='active'>Users</li>
    </ol>

    <h2>Users</h2>

    <user-chart></user-chart>

    <hr/>

    <?php if($users->count() > 0): ?>

        <table class="table table-hover table-bordered table-striped">

            <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Admin</th>
            <th>Status</th>
            <th>Newsletter</th>
            <th>Date Created</th>
            <th>Edit</th>
            <th>Delete</th>
            </thead>

            <tbody>

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><a href="/user/<?php echo e($user->id); ?>"><?php echo e($user->name); ?></a></td>
                    <td><?php echo e($user->showAdminStatusOf($user)); ?></td>
                    <td><?php echo e($user->showStatusOf($user)); ?></td>
                    <td><?php echo e($user->showNewsletterStatusOf($user)); ?></td>
                    <td><?php echo e($user->created_at->format('m-d-Y')); ?></td>


                        <td> <a href="/user/<?php echo e($user->id); ?>/edit">

                            <button type="button" class="btn btn-default">Edit</button></a></td>

                    <td>
                        <div class="form-group">

                            <form class="form" role="form" method="POST" action="<?php echo e(url('/user/'. $user->id)); ?>">
                                    <input type="hidden" name="_method" value="delete">
                                    <?php echo e(csrf_field()); ?>


                                <input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

                            </form>
                        </div>
                    </td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

            </tbody>

        </table>



    <?php else: ?>

        Sorry, no Widgets

    <?php endif; ?>

    <?php echo e($users->links()); ?>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>