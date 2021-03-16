<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Repositories\TaskRepository;
use Exception;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public $taskRepository;

    function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->taskRepository->getTaskList();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->taskRepository->createTask($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->taskRepository->getTaskDetails($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = $this->taskRepository->updateTask($id, $request->all());
        if ($task) {
            return response(['status' => false, 'data' => $task, 'message' => 'Task Updated Successfully !']);
        } else {
            return response(['status' => false, 'data' => null, 'message' => 'No task found !']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::where('id', $id)->first();
        if ($task) {
            $task->delete();
            return response(['status' => false, 'data' => $task, 'message' => 'Task Deleted Successfully !']);
        } else {
            return response(['status' => false, 'data' => null, 'message' => 'No task found !']);
        }
    }
}
