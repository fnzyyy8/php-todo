<?php
require_once "./Model/TodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar OOP");
addTodoList("Belajar Database");

showTodoList();

removeTodoList(2);

showTodoList();
