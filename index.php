<?php


require 'vendor/autoload.php';

use Todo\models\Task;
use Todo\storage\MySqlDatabaseTaskStorage;



$db = new PDO('mysql:host=127.0.0.1;dbname=testdb', 'root', 'root');

$storage = new MySqlDatabaseTaskStorage($db);

