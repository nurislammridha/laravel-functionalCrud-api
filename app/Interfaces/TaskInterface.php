<?php

namespace App\Interfaces;

interface TaskInterface
{
    /**
     * Get Task List
     *
     * @return array Task List Array
     */
    public function getTaskList();


    public function getTaskDetails($id);

    public function createTask($data);

    public function updateTask($id, $data);

    public function deleteTask($id);
}
