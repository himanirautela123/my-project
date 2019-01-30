<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class projectController extends Controller
{
   public function project()
    {
       $project = project::all()->toArray();
       return view('project',compact('project'));

       
     }   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
          return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'Project_name'    =>  'required'
            ]);
        $project = new Project([
            'Project_name'    =>  $request->get('Project_name')
        ]);
        $project->save();
        return redirect()->route('project')->with('success','data stored');

    }
        
     /**
      * Display the specified resource.
      *
       @param  int  $id
      * @return \Illuminate\Http\Response
      */
    public function show($id)
     {
      $project=Project::find($id);

     return view('show',compact('project'));
     }


            /**
      * Show the form for editing the specified resource.
      *
      @param  int  $id
       @return \Illuminate\Http\Response
      */
      public function edit($id)
      {     
         $project = Project::findOrFail($id);
        return view('edit', compact('project', 'id')); 
  
     }

    
     public function update(Request $request, $id)
     {
         

       // $this->validate($request, [
       //      'project_name'    =>  'required',
            
       //  ]);
        $project = Project::findOrFail($id);
        $project->Project_name = $request->get('Project_name');
    
        $project->save();
        return redirect()->route('project')->with('success', 'Data Updated');

    
     }
 
     /**
     * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response      */
    public function destroy($id)
     {    

        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('project')->with('success', 'Data Deleted');
    }
     
}

