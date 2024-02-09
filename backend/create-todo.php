<?php
var_dump($_POST); 

$todoFromDb = file_get_contents('db/todo.json');

$allTodo = json_decode($todoFromDb, true);

$newTodo = [
    'todo' => $_POST['todo'],
    'done' => false
];
$allTodo[] = $newTodo;

$allTodoInJSON = json_encode($allTodo);

file_put_contents('db/todo.json', $allTodoInJSON);


echo json_encode([
    'message' => 'ok',
    'code' => 200,
]);


header("location: ../frontend/index.html");
