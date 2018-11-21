@extends('layouts.master')



@section('title')
<title>Invites</title>
@endsection


@section('content')

	<ol class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class='active'><a href="#" "active">INvites</a></li>
	</ol>

		<div class="card">
	                
	       
				<h1>Invites</h1> 
					
				
							@if ($invites->count() > 0)
								
								<table class="table table-hover table-bordered table-striped">

						            <thead>
							            <th>From</th>
							            <th>Click to acceess document</th>
							            <th>Received</th>
						            </thead>

						            <tbody>

						            @foreach($invites as $invite)

						                <tr>
						                  <!-- select name from user where user_id = uid -->
						                    <td>{{  $invite->fromName  }}</td>
						                  	<td><a href="{{$invite->link_address}}"> 	{{$invite->link_address}} 	</a></td>
						                  	
						                    <td>{{ $invite->created_at->format('m-d-Y') }}</td>				                        
						               
						                </tr>

						            @endforeach

						            </tbody>

						        </table>


							@else
								You have no Invites

							@endif 
					
		</div>


@endsection