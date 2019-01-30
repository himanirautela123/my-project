@extends('master')

@section('content')
<div class="container" style="margin-top: 50px;">
<div class="mt-50px">
<div align ="center">
<div class="card bg-light mb-10" style="max-width: 40rem;">
  <div class="card-header">Projects </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
  

  @if($message = Session::get('success'))
  <div class="alert alert-success">
  	<p>{{$message}}</p>
  </div>
  @endif
  <div align ="right">
  	<a href="{{route('create')}}"class="btn btn-primary" > Add new project</a>

<body bgcolor="#E6E6FA">
<table class="table table-bordered table-striped"">
  
 
<tr><th>Project name</th>
  <th>Edit</th>
    <th>Delete</th>
  </tr>

@foreach($project as $row)

<tr>
 
	<td> 
  <a href="/{{$row['id']}}">  

  {{$row['Project_name']}}</a></td>
    <td><a href="
      {{action('projectController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td>
     <form method="post" class="delete_form" action="{{action('projectController@destroy', $row['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Delete</button>
     </form>
    </td>  
     
 </tr>
@endforeach
</ul>
</table>
  
	


</div>
</div>
</div>
</div>
</div>
</div>

<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>

@endsection
</body>