@extends('master')

@section('content')
    <h1 class="project name">{{$project->Project_name}}</h1>
<br>
<br>
<form method="POST" action="/{{$project->id}}/tasks" class= "box">
	@csrf
<div class="field">
    <label class ="labl" for="description">New Task</label>
	<div class ="control">
		<input type="text" class="input" name="description" placeholder="New Task">
	</div>
</div>
<div class="field">
	<div class="control">
				<button type ="submit" class ="button is-link">Add Task</button>
	</div>
</div>
</form>
@if ($project->tasks->count())
<div>
	<div class="card w-75">
   <div class="card-body">
    <h5 class="card-title"><h2>Task BreakDown</h2></h5>
	<div>
    <br>
       <div class="row">
    <div class="col-md-6"><h5><strong>Task</strong></h5>
     
     @foreach($project->tasks as $task)
     <br>
    
	<li>
		{{$task->description}}
		
	</li>
     <br>
    @endforeach
     </div>
    <div class="col-md-1 text-right"><h5><strong>Status</h5></strong>
    
    	 @foreach($project->tasks as $task)
    	 <br>
    	 
    	<select>    
      <option value=""></option>
  <option value="completed">Completed</option>
  <option value="in progress">In Progress</option>
  <option value="q/a">Q/A</option>
  </select>
  <br>
  <br>
  @endforeach
   </div>
       <div class="col-md-4 text-right"><h5><strong>Details</strong></h5>
                     	     	 @foreach($project->tasks as $task)
    	
    	<div>
    	<br>
      <a href="http://testlaravel.local/detail"class="btn btn-primary" >Details
      </a><br>
      </div>     
    @endforeach
    <div class="col-md-4 text-right"><h5><strong>Effort</strong></h5>

 
    </div>

    	</div>
   </div>
    </div>
     </div>
    
	

 </div>
 </div>   	
 
</li>


 <!-- <form method="POST" action="/{{$project->id}}/tasks" class= "box">
	@csrf
<div class="field">
    <label class ="labl" for="description">New Task</label>

	<div class ="control">
		<input type="text" class="input" name="description" placeholder="New Task">
	</div>
</div>

<div class="field">
	<div class="control">
				<button type ="submit" class ="button is-link">Add Task</button>
	</div>
</div>
</form> -->
@endif

@endsection



</div>

</div>
</div>
