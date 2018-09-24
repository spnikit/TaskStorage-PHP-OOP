<?php

namespace Todo;

use Todo\storage\contracts\TaskStorageInterface;
use Todo\models\Task;

/*
 
  public function store(Task $task);
    public function update(Task $task);
    public function get($id);
    public function all();
 */

class TaskManager {

    protected $storage;

    public function __construct(TaskStorageInterface $storage) {
        $this->storage = $storage;
    }

    public function addTask(Task $task){

        return $this->storage->store($task);

    }

    public function updateTask(Task $task) {
        
        return $this->storage->update($task);
    }

    public function getTask($id) {

        return $this->storage->get($id);
    }

    public function getTasks() {

        return $this->storage->all();
    }

}