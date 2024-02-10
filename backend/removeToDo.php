<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$todoFromDb = file_get_contents('./db/todo.json');

$allTodo = json_decode($todoFromDb, true);
echo $allTodo;

unset($allTodo[$_POST['index']]);
echo $_POST['index'];
$newListWithChange = array_values($allTodo);
echo $newListWithChange;
$list = json_encode($newListWithChange);


file_put_contents('db/todo.json', $list);
