<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
     
     public function store(Project $project)
     {
       Task::create([
       'Project_id' => $project->id,
       'description'=> request('description')
         ]);
       return back();

     }   

     public function detail()
    {
    
      return view('detail');
    }


    public function update( Task $task)
    {
        $task->update([
        	'completed' => request()->has('completed')
        ]);

        return back();
    }

  
     

}
