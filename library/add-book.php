<?php

require_once "../app/app.php";



$ctx = [
    "title" => "Add Book",
    "books" => CRUD::query("book")
];


if(isset($_POST['addbook'])){
    $title=$_POST['title'];
    $author=$_POST['author'];
    if(empty($title)|| empty($author) ){
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'All fields are required';
        redirect("add-book.php");
    }else{
        $book = [
            'title' => $title,
            'author' => $author,
            'officer_id' => $_SESSION['lid'],
            'created_at' => date("d/m/Y"),
       
        ];

        $res=CRUD::insert('book',$book);

        if($res > 0){
            $_SESSION['at']= 'info';
            $_SESSION['am']= 'Book  added successfully';
            redirect('add-book.php');
        }else{
            $_SESSION['at']='warning';
            $_SESSION['am']=$res;
            redirect('add-book.php');
        }

    }

    if(isset($_POST['edit'])){
        $title=$_POST['title'];
        $author=$_POST['author'];
        if(empty($title)|| empty($author) ){
            $_SESSION['at'] = 'warning';
            $_SESSION['am'] = 'All fields are required';
            redirect("add-book.php");
        }else{
            $book = [
                'title' => $title,
                'author' => $author,
           
            ];
    
            $res=CRUD::update("book", $book, 1);
    
            if($res==1){
                $_SESSION['at']= 'info';
                $_SESSION['am']= 'Book  added successfully';
                redirect('add-book.php');
            }else{
                $_SESSION['at']='warning';
                $_SESSION['am']=$res;
                redirect('add-book.php');
            }
    
        }
    
    }

}
render_view('library/add-book', $ctx);


