<?php
 

$todoFromDb = file_get_contents('db/todo.json');

$allTodo = json_decode($todoFromDb, true);

unset($allTodo[$_POST['index']]);
$newAllTodo = array_values($allTodo);

$allTodoInJSON = json_encode($newAllTodo);


file_put_contents('db/todo.json', $allTodoInJSON);

header("location: ../frontend/index.html");
