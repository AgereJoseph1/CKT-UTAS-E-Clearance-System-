<?php

require_once "../app/app.php";


$ctx = [
    "title" => "All Books",
    "books" => CRUD::query('book')
];

if (isset($_POST['delBook'])){
    $pk = $_POST['bid'];
    $res = CRUD::delete('book', $pk);

    if ($res == 1){
        $_SESSION['at'] = 'info';
        $_SESSION['am'] = 'Book deleted Successfully';
    }else{
        $_SESSION['at'] = 'danger';
        $_SESSION['am'] = $res;
    }
    redirect("books.php");

}

render_view("library/all-books", $ctx);