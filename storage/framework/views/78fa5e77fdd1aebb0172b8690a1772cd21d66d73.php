<?php $__env->startSection('title'); ?>
<title>About</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

	<ol class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class='active'><a href="#" "active">About</a></li>
	</ol>

		<div class="card">
	                
	                

					<div class="card-body">


							<h1>Dev-Sync</h1>
								<p>
									Collaborating made easy.
								</p>

								 <img src="/images/conn7.jpg" alt="cloud gears" width=400>
					<p>	 <br><br></p>
							

							<p>	 
								Developed by 

								<h4>Promise Mazibuko</h4>
								<br>
								Student of Tshwane University.

							</p>

					</div>

			

		</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>