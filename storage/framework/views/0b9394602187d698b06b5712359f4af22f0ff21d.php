<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author hackson
 */
?>




<?php $__env->startSection('title'); ?>
	<title>Collaborate</title>
<?php $__env->stopSection(); ?>


    <!-- Load Styles -->
    <link href="https://www.gstatic.com/realtime/quickstart-styles.css" rel="stylesheet" type="text/css"/>

    <!-- Load the Realtime JavaScript library -->
    <script src="https://apis.google.com/js/api.js"></script>

    <!-- Load the utility library -->
    <script src="https://www.gstatic.com/realtime/realtime-client-utils.js"></script>



<meta name="viewport" content="width=device-width, initial-scale=1">

   


<?php $__env->startSection('content'); ?>
	<ol class='breadcrumb'>
		<li><a href='/'>Home</a></li> ->>
		<li><a href='/widget'>Documents</a></li> ->>
		<li class='active'>Collaborate</li>


		  
	</ol>


		<div id="navbar" class="navbar-collapse collapse pull-right">

		  	<button  id="myBtn" type="submit" class="btn btn-primary btn-lg">

			          Add collaborator
			</button>

		</div>

			<!-- The Modal -->
		<div id="myModal" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content">
				    <span class="close">&times;</span>
				    <p>PLease enter the email of the user.</p>
						<div>
						    <input type="email" name="email" placeholder="Email" id="email">
							<span></span>
						 </div>
				  <button>Invite</button>
			  </div>

		</div>


		<script>
			// Get the modal
			var modal = document.getElementById('myModal');

			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks the button, open the modal 
			btn.onclick = function() {
			    modal.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			    modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }
			}


		</script>

<h2>Realtime Dashboard</h2>
		


  <h2></h2>
  			 <form class="form" role="form" method="POST" action="<?php echo e(url('/widget')); ?>">

						<?php echo e(csrf_field()); ?>

						

						<script type="text/javascript">
							$(document).ready(function() {
									alert("Realtime loaded");
									    });
						</script>


						<textarea rows="8" cols="50" id="text_area_1" ></textarea>
	    				<textarea id="text_area_2"></textarea>
	     				<button id="auth_button">Authorize</button>


<?php echo $__env->yieldContent('layouts.scripts'); ?>


	    <!-- name Form Input -->

			        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">

			            <label class="control-label">Name</label>

			            <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">

			            <?php if($errors->has('name')): ?>

			                <span class="help-block">
			                <strong><?php echo e($errors->first('name')); ?></strong>
			                </span>

			            <?php endif; ?>

			        </div>
			        	<!-- description Form Input -->

			        <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">

			            <label class="control-label">Description</label>

			            <input type="text" class="form-control" name="description" value="<?php echo e(old('description')); ?>">

			            <?php if($errors->has('description')): ?>

			                <span class="help-block">
			                <strong><?php echo e($errors->first('description')); ?></strong>
			                </span>

			            <?php endif; ?>

			        </div>
			
			       
					<input type="hidden" name="HDN_FormClicked" value= <?php echo e("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?> />

			    
			        <div class="form-group">

			            <button type="submit" class="btn btn-primary btn-lg">

			             Save

			            </button>

			        </div>
			</form>

 
			
		</div>
	</div>
</div>
 

  


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>