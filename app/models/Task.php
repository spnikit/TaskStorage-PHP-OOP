<?php

namespace Todo\models;

use DateTime;

class Task {

    protected $id;
    protected $isComplete = false;
    protected $description;
    protected $due;

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {

        $this->description = $description;
    }

    public function getIsComplete() {
        return (bool)$this->isComplete;
    }

    public function setIsComplete($complete=true) {
        $this->isComplete = $complete;
    }

    public function setDue(DateTime $due) {
         $this->due = $due;
    }

    public function getDue() {

        if(!$this->due instanceof DateTime) {
            return new DateTime($this->due);
        }

        return $this->due;
    }


    public function getId() {
        return $this->id;
    }
 }