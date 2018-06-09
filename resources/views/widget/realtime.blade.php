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




@section('content')
	<ol class='breadcrumb'>
		<li><a href='/'>Home</a></li> ->>
		<li><a href='/widget'>Documents</a></li> ->>
		<li class='active'>Collaborate</li>
	</ol>

<h2>Realtime Dashboard</h2>


  <h2></h2>
  			 <form class="form" role="form" method="POST" action="{{ url('/widget') }}">

						{{ csrf_field() }}
						

						<script type="text/javascript">
							$(document).ready(function() {
									alert("Settings page was loaded");
									    });
						</script>


						<textarea rows="8" cols="50" id="text_area_1" ></textarea>
	    				<textarea id="text_area_2"></textarea>
	     				<button id="auth_button">Authorize</button>


@yield('layouts.scripts')


	    <!-- name Form Input -->

			        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

			            <label class="control-label">Name</label>

			            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

			            @if ($errors->has('name'))

			                <span class="help-block">
			                <strong>{{ $errors->first('name') }}</strong>
			                </span>

			            @endif

			        </div>
			        	<!-- description Form Input -->

			        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

			            <label class="control-label">Description</label>

			            <input type="text" class="form-control" name="description" value="{{ old('description') }}">

			            @if ($errors->has('description'))

			                <span class="help-block">
			                <strong>{{ $errors->first('description') }}</strong>
			                </span>

			            @endif

			        </div>

			        <div class="form-group">

			            <button type="submit" class="btn btn-primary btn-lg">

			             Save

			            </button>

			        </div>
			</form>

 
			
		</div>
	</div>
</div>
 

  


@endsection