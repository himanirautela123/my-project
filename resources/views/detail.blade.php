@extends('master')

@section('content')
<div>
<div class="container" style="margin-top: 50px;">
<div class="mt-50px">
<!-- <div align ="left">  -->
	
	<div class="card w-75">
   <div class="card-body">
    <h5 class="card-title"><h2>
    	<div align ="center"> SubTask</h2></h5></div>
    	      <h5 style="color:red;">Description</h5>
       <textarea rows="4" cols="85">Description of Task Details...
</textarea>
<p style="color:red;">Add hours	
	<form method="POST" action="{{url('show')}}">
	{{csrf_field()}}
<input type="text" name="task hours">
  <input type="submit" value="Submit">
</form></p>
 

	</div>
</div>
</div>
  </div>
</div>
</div>



  @endsection