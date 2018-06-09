@extends('layouts.master')

@section('title')
	<title>Reports</title>
@endsection

@section('content')
	<ol class='breadcrumb'>
		<li><a href='/admin'>Home</a></li> ->>
		<li><a class='active'  href='/report'>Reports</a></li> 
	</ol>




<div class="row">
    <div class="col-xs-6 col-lg-4">
     	<h2>  Summary </h2>
      <a href="#">  	</a>

     	<p> Total number of profile {{ count($pro)  }} </p> 
      <p> Total number of active users {{ count($subscribed-> where ('status_id', '=', 10)) }}</p>
      <p> Total number of incative users {{ count($subscribed-> where ('status_id', '=', 7)) }}</p>
      <!--p> Total number of groups created  </p-->
      <p> Total number of files {{ count($files) }} </p>
      <p> Total number of subscribed users {{ count($subscribed-> where ('is_subscribed', '=', true)) }} </p>
      <p></p>
      <strong></strong><p><h3>Demographics</h3></p></strong>
        <p> Males {{ count($pro-> where ('gender', '=', 1)) }}</p>
        <p> Females {{ count($pro-> where ('gender', '=', 0)) }}</p>
    </div><!--/.col-xs-6.col-lg-4-->
   


    <div class="col-xs-6 col-lg-4">
 <h2>  Executive Report</h2>
      	<a href="#">  	</a>

     	<p>  </p>
       
    </div><!--/.col-xs-6.col-lg-4-->
    




    <div class="col-xs-6 col-lg-4">
     	<h2>  </h2>
      <a href="#">  	</a>

     	<p> </p>
    <p></p>
    </div><!--/.col-xs-6.col-lg-4-->
    






    <div class="col-xs-6 col-lg-4">
   	<strong>	<h2> Graphs</h2></strong>
      		<a href="#">  	</a>

     		<p> USe vue.js and package to generate a bar graph of monthly </p>

        <p>But ke why are you not showing in my DIV? 

          memo: recheck javascript
        </p>



    </div><!--/.col-xs-6.col-lg-4-->
   






    <div class="col-xs-6 col-lg-4">
     	<H2> </H2>
      <a href="#">  	</a>

     	<p>  </p>
    </div><!--/.col-xs-6.col-lg-4-->
    





    <div class="col-xs-6 col-lg-4">
       <h2>  </h2>
      <a href="#">  	</a>

     	<p>  </p>
    </div><!--/.col-xs-6.col-lg-4-->

</div><!--/row-->

			
		

<br>

@endsection