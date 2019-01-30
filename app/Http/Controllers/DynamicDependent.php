<?php

class DynamicDependent extends Controller
{
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

    public function index()
    {
        $Project_list=DB::table('Project name')
                      ->groupBy('Project name')        
                      ->get();
       return view('dynamic_dependent')->with('Project_list',$Project_list);              
}

}
