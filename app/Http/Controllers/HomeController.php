<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $task=Task::all();
        $project=Project::all();
        $employee=Employee::all();
        $completed = Task::where('Status', 'completed')->get();
        $uncompleted = Task::where('Status', 'uncompleted')->get();
        return view('home',compact('task'),compact('project'))
            ->with('employee',$employee)
            ->with('completed',$completed)
            ->with('uncompleted',$uncompleted);
    }
}
