<?php

// show todo list
function showTodoList()
{
    global $todolist;

    echo PHP_EOL . "TODOLIST" . PHP_EOL;
    echo "------------" . PHP_EOL;
    foreach ($todolist as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
    echo PHP_EOL;
}
