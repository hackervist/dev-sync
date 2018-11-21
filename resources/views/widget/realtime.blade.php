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


@extends('layouts.master')

@section('title')
	<title>Collaborate</title>
@endsection


    <!-- Load Styles -->
    <link href="https://www.gstatic.com/realtime/quickstart-styles.css" rel="stylesheet" type="text/css"/>

    <!-- Load the Realtime JavaScript library -->
    <script src="https://apis.google.com/js/api.js"></script>

    <!-- Load the utility library -->
    <script src="https://www.gstatic.com/realtime/realtime-client-utils.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
   
@section('content')
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
			    <form class="form" role="form" method="POST" action="{{ url('/inviteMail') }} ">
			    	{{ csrf_field() }}	

					    <p>PLease enter the email of the user.</p>
						
							    <input type="email" name="email" placeholder="Email" id="email">
								
								<input type="hidden" name="HDN_FormClicked" value= {{"http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }} />
								<!--span></span--->
					  <button class="btn btn-primary">Invite</button>
					  	
			  	</form>
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
		
  			<form class="form" role="form" method="POST" action="{{ url('/widget') }}">

						{{ csrf_field() }}
						
						<script type="text/javascript">
							$(document).ready(function() {
									alert("Realtime loaded");
									    });
						</script>


						<textarea rows="8" cols="50" id="text_area_1" ></textarea>
	    				<textarea id="text_area_2"></textarea>
	     				<button id="auth_button">Authorize</button>

@yield('layouts.scripts')

	    <!-- name Form Input -->

			        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

			            <label class="control-label">Name</label>

			            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="txtName">

			            @if ($errors->has('name'))

			                <span class="help-block">
			                <strong>{{ $errors->first('name') }}</strong>
			                </span>

			            @endif

			        </div>
			        	<!-- description Form Input -->

			        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

			            <label class="control-label">Description</label>

			            <input type="text" class="form-control" name="description" value="{{ old('description') }}" id="txtDesc">

			            @if ($errors->has('description'))

			                <span class="help-block">
			                <strong>{{ $errors->first('description') }}</strong>
			                </span>

			            @endif

			        </div>
			
			      			    
			        <div class="form-group">
			
						<input type="hidden" name="HDN_FormClicked" value= {{"http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }} />
			    
			            <button type="submit" class="btn btn-primary btn-lg" id="btnSave">
			             	Save
			            </button>

			        </div>
			</form>

		</div>
	</div>
</div>
 
@endsection