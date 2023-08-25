<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Http\Reposiotries\TaskReposiotries;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->task = new TaskReposiotries();
    }

    public function index()
    {
        $tasks = $this->task->list();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(TaskRequest $request)
    {
        $this->task->create($request);
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(TaskRequest $request, $id)
    {
        $this->task->update($request,$id);

        return redirect()->route('tasks')->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        $this->task->delete($id);

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
