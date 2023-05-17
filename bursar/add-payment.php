<?php

require_once "../app/app.php";



$ctx = [
    "title" => "Add payment",
    "payments" => CRUD::query("payment")
];


if(isset($_POST['addpy'])){
    $stid=$_POST['stid'];
    $amount=$_POST['amt'];
    if(empty($stid)|| empty($amount) ){
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'All fields are required';
        redirect("add-payment.php");
    }else{
        $student = CRUD::querySingle("student", "index_number=:ind", [":ind" => $stid]);
        $payment= [
            'student_id' => $student['id'],
            'amount' => $amount,
            'officer_id' => $_SESSION['bid'],
            'created_at' => date("d/m/Y")
       
        ];

        $res=CRUD::insert('payment', $payment);

        if($res > 0){
            $_SESSION['at']= 'info';
            $_SESSION['am']= 'payment added successfully';
            redirect('add-payment.php');
        }else{
            $_SESSION['at']='warning';
            $_SESSION['am']=$res;
            redirect('add-payment.php');
        }

    }
    

}
render_view('bursar/add-payment', $ctx);


