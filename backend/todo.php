<?php

$todoFromDb = file_get_contents('./db/todo.json');

$toDolist = json_decode($todoFromDb, true);




echo json_encode($toDolist);

header('Content-Type: application/json');



