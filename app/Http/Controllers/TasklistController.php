<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task; // 追加

class TasklistController extends Controller
{
    public function index()
    {
        $tasklist = Task::find($id);

        return view('tasks.index', [
            'tasklist' => $tasklist,
        ]);
    }
}
