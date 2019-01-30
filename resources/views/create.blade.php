
@extends('master')

@section('content')



<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Data</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

<form method="POST" action="{{url('project')}}">
	{{csrf_field()}}
	 <div class="form-group">Project name<br>
    <input type="text" name="Project_name" class="form-control" placeholder=" project name" />

   </div>
</form>
</div>
</div>
@endsection
