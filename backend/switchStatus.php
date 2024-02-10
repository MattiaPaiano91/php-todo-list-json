
<?php

$todoFromDb = file_get_contents('./db/todo.json');

$toDolist = json_decode($todoFromDb, true);

$toDolist[$_POST['index']]['done'] = !$toDolist[$_POST['index']]['done'];

$newAllTodo = array_values($toDolist);

$allTodoInJSON = json_encode($newAllTodo);

file_put_contents('./db/todo.json', $allTodoInJSON);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

header('Content-Type: application/json');