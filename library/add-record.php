<?php

require_once "../app/app.php";



$ctx = [
    "title" => "Add Record",
    "records" => CRUD::query("record"),
    "books" => CRUD::query('book')

];


if(isset($_POST['addR'])){
    $bk_id=$_POST['bk'];
    $std_id=$_POST['std'];
    if(empty($bk_id)|| empty($std_id) ){
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'All fields are required';
        redirect("add-record.php");
    }else{
        $record = [
            'book_id' => $bk_id,
            'student_id' => $std_id,
       
        ];

        $res=CRUD::insert('record', $record);

        if($res > 0){
            $_SESSION['at']= 'info';
            $_SESSION['am']= 'Record added successfully';
            redirect('add-record.php');
        }else{
            $_SESSION['at']='warning';
            $_SESSION['am']=$res;
            redirect('add-record.php');
        }

    }
    

}
render_view('library/add-records', $ctx);


