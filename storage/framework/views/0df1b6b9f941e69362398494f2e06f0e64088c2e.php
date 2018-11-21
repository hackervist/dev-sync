<?php $__env->startSection('title'); ?>
<title>Invites</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

	<ol class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class='active'><a href="#" "active">INvites</a></li>
	</ol>

		<div class="card">
	                
	       
				<h1>Invites</h1> 
					
				
							<?php if($invites->count() > 0): ?>
								
								<table class="table table-hover table-bordered table-striped">

						            <thead>
							            <th>From</th>
							            <th>Click to acceess document</th>
							            <th>Received</th>
						            </thead>

						            <tbody>

						            <?php $__currentLoopData = $invites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invite): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

						                <tr>
						                  <!-- select name from user where user_id = uid -->
						                    <td><?php echo e($invite->fromName); ?></td>
						                  	<td><a href="<?php echo e($invite->link_address); ?>"> 	<?php echo e($invite->link_address); ?> 	</a></td>
						                  	
						                    <td><?php echo e($invite->created_at->format('m-d-Y')); ?></td>				                        
						               
						                </tr>

						            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

						            </tbody>

						        </table>


							<?php else: ?>
								You have no Invites

							<?php endif; ?> 
					
		</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>