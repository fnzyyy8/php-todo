<?php

require_once "./Helper/Input.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("TAMBAHKAN JUDUL PEKERJAAN");

    if (strtolower($todo) == "x") {
        echo PHP_EOL . "BATAL" . PHP_EOL;
        showTodoList();
    } else {
        addTodoList($todo);
        echo "BERHASIL MENAMBAHKAN $todo" . PHP_EOL;
        showTodoList();
    }
}
