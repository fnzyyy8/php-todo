<?php

require_once './BusinessLogic/ShowTodoList.php';
require_once './Helper/Input.php';
require_once './BusinessLogic/RemoveTodoList.php';


function viewRemoveTodoList()
{
    echo "HAPUS TODO" . PHP_EOL;
    $number = input("NOMOR");

    // Cek apakah pengguna memilih untuk batal
    if (strtolower($number) == "x") {
        echo "BATAL MENGHAPUS DATA" . PHP_EOL;
        showTodoList();
    } else {
        $success = removeTodoList($number);
        if ($success) {
            echo "SUKSES MENGHAPUS PEKERJAAN NOMOR $number" . PHP_EOL;
            showTodoList();
        } else {
            echo "NOMOR $number TIDAK ADA" . PHP_EOL;
            showTodoList();
            viewRemoveTodoList();
        }
    }
}
