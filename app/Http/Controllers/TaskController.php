<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasks = [
        [
            'id' => 1,
            'name' => 'Task 1',
            'description' => 'This is task 1',
            'status' => 'completed'
        ],
        [
            'id' => 2,
            'name' => 'Task 2',
            'description' => 'This is task 2',
            'status' => 'in progress'
        ],
        [
            'id' => 3,
            'name' => 'Task 3',
            'description' => 'This is task 3',
            'status' => 'not started'
        ],
        [
            'id' => 4,
            'name' => 'Task 4',
            'description' => 'This is task 4',
            'status' => 'completed'
        ],
        [
            'id' => 5,
            'name' => 'Task 5',
            'description' => 'This is task 5',
            'status' => 'in progress'
        ],
        [
            'id' => 6,
            'name' => 'Task 6',
            'description' => 'This is task 6',
            'status' => 'not started'
        ],
    ];


    function index() {
        // return response($this->taks, 200);
        return response()->json($this->tasks, 200);
    }


    function show($taskId) {
        // $task = $this->tasks[$taskId] ?? null;
        if ($taskId < 1 || $taskId > count($this->tasks)) {
            // abort(404);
            $result = [
                'error' => 'Task not found'
            ]; 

            return response()->json($result, 404);

        }

        $task = $this->tasks[$taskId - 1] ?? null;

        return response()->json($task);
    }
}
