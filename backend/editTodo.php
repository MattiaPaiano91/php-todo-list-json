<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");


$todoFromDb = file_get_contents('db/todo.json');

$allTodo = json_decode($todoFromDb, true);

if (strlen($_POST['task']) > 0) {
    $newTodo = [
        'todo' => $_POST['task'],
        'done' => false
    ];


    $allTodo[$_POST['index']] = $newTodo;
}

$allTodoInJSON = json_encode($allTodo);

file_put_contents('db/todo.json', $allTodoInJSON);


echo json_encode([
    'message' => 'ok',
    'code' => 200
]);
