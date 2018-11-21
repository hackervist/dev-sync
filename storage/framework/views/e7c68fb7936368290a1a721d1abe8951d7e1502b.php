<?php $__env->startSection('title'); ?>

    <title><?php echo e($widget->name); ?> document</title>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/widget'>Documents</a></li>
        <li><a href='/widget/<?php echo e($widget->id); ?>'><?php echo e($widget->name); ?></a></li>
    </ol>

    <h1><?php echo e($widget->name); ?></h1>

    <hr/>

    <div class="panel panel-default">

        <!-- Table -->
        <table class="table table-striped">
            <tr>

               
                <th>Name</th>
                <th>Description</th>
                <th>Last Updated</th>
                

                <?php if(Auth::user()->adminOrCurrentUserOwns($widget)): ?>
                   
                    <th>Contribute</th>
                    <th>Edit</th>
                   <th>Delete</th>
                <?php endif; ?>
             

            </tr>


            <tr>
               
                <td> <a href="/widget/<?php echo e($widget->id); ?>/edit">
                        <?php echo e($widget->name); ?></a></td>
              
                <td> <?php echo e($widget->description); ?> </td>
                
                <td><?php echo e($widget->updated_at); ?></td>


                <?php if(Auth::user()->adminOrCurrentUserOwns($widget)): ?>

                    <td> <a href="<?php echo e($widget->link_address); ?>">

                            <button type="button" class="btn btn-default">Contribu</button></a></td>



                    <td> <a href="/widget/<?php echo e($widget->id); ?>/edit">

                            <button type="button" class="btn btn-default">Edit</button></a></td>

            

                <td>
                    <div class="form-group">

                        <form class="form" role="form" method="POST" action="<?php echo e(url('/widget/'. $widget->id)); ?>">
                            <input type="hidden" name="_method" value="delete">
                            <?php echo e(csrf_field()); ?>


                            <input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

                        </form>
                    </div>
                </td>

               
                

                <?php endif; ?>
            

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