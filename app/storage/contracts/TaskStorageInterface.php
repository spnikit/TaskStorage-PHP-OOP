<?php

namespace Todo\storage\contracts;

use Todo\models\Task;

interface TaskStorageInterface {

    public function store(Task $task);
    public function update(Task $task);
    public function get($id);
    public function all();

}