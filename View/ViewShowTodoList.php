<?php
require_once "./Model/TodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./Helper/Input.php";
require_once "./View/ViewAddTodoList.php";
require_once "./View/ViewRemoveTodoList.php";
function viewShowTodoList()
{
    showTodoList();
    while (true) {
        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "3. Cancel" . PHP_EOL . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } elseif ($pilihan == "2") {
            viewRemoveTodoList();
        } elseif ($pilihan == "3") {
            break;
        } else {
            echo "Tidak ada di pilihan" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi!" . PHP_EOL;
}
