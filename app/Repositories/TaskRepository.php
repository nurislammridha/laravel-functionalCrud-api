<?php

namespace App\Repositories;

use App\Interfaces\TaskInterface;
use App\Models\Task;

class TaskRepository implements TaskInterface
{

    /**
     * Get Task List
     *
     * @return array Task List Array
     */
    public function getTaskList()
    {
        $tasks = Task::orderBy('id', 'desc')->get();
        return $tasks;
    }

    /**
     * Get Task Detail By ID
     *
     * @param integer $id
     * @return object Task Obejct
     */
    public function getTaskDetails($id)
    {
        $task = Task::where('id', $id)->first();
        return $task;
    }

    /**
     * Create New Task
     *
     * @param array $data
     * @return Object Task Object
     */
    public function createTask($data)
    {
        return Task::create($data);
    }

    /**
     * Update Task
     *
     * @param integer $id
     * @param array $data
     * @return Object Task Object
     */
    public function updateTask($id, $data)
    {
        $task = $this->getTaskDetails($id);
        if ($task) {
            $task->update($data);
        }
        return $task;
    }

    public function deleteTask($id)
    {
    }
}
