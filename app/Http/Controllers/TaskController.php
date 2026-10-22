<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    // Welcome Page: Today's tasks only
    public function welcome()
    {
        $todayTasks = Task::whereDate('task_date', Carbon::today())->get();
        return view('welcome', compact('todayTasks'));
    }

    // Task List Page: All tasks ordered by date
    public function index()
    {
        $tasks = Task::orderBy('task_date', 'asc')->get();
        return view('tasks.index', compact('tasks'));
    }
}