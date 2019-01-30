@extends('master')
@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Task</h3>
  <br />
 

  <form method="post" action="{{url('task')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="Task_name" class="form-control" placeholder="task name" />
   </div>
   
  </form>
 </div>
</div>
@endsection




















@endsection