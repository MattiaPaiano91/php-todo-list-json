<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$todoFromDb = file_get_contents(__DIR__ . './db/todo.json');

$toDolist = json_decode($todoFromDb, true);

echo json_encode($toDolist);

header('Content-Type: application/json');






