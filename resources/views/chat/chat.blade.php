<!DOCTYPE>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Chat what what</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
	<div class="container"> 

		<div class ="row" id="app">
			
			<ul class="list-group offset-4 col-4">

				<li class="list-group-item active">Chat</li>

				<li class="list-group-item">ghgdf</li>
				<li class="list-group-item">hsdfjk</li>
				<li class="list-group-item">hjdfk</li>
				<input type="text" class="form-control" placeholder="Type message" v-model='message' v-on:'keyup.send' >
			</ul>

		</div>

	</div>

	<Script src="{{asset('js/app.js')}}"></Script>		
</body>

</html>