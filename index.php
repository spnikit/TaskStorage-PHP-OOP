<?php


require 'vendor/autoload.php';

use Todo\models\Task;
use Todo\storage\MySqlDatabaseTaskStorage;



$db = new PDO('mysql:host=127.0.0.1;dbname=testdb', 'root', 'root');

$storage = new MySqlDatabaseTaskStorage($db);


$task = $storage->get(2);

$task->setDescription('WOW');
$task->setDue(new DateTime('+ 30 days'));

var_dump($storage->update($task));

// $storage->update($task);