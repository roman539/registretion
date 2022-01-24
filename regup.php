<?php


$das = null;
if (empty($_GET['login']) and empty ($_GET['password'])){
    $_SESSION['login']='Логин не может быть пустым';
    $_SESSION['password']='Пароль не может быть пустым';
    $_SESSION['password1']='Пароль не может быть пустым';
    $_SESSION['mail']='Mail не может быть пустым';
    $_SESSION['Name']='Имя не может быть пустым';
include 'formregist.php';

}
else {

    require_once 'register.php';
    require_once 'file.php';
$login = $_GET['login'];
    $password = md5($salt . $_GET['password']);
    $password1 = md5($salt . $_GET['password1']);
    $mail = $_GET['mail'];
    $name = $_GET['Name'];
    $peremen = ['login' => $_GET['login'], 'password' => $_GET['password'],'name'=>$_GET['Name']];

    $das = new register($login, $password, $password1, $mail, $name);



    if($das->checkLogin()){
        unset($_SESSION['login']);
    }
    else {
        unset($_SESSION['login']);
        $_SESSION['login']='Неправильный логин';
    }


    if($das->checkPass()){
        unset($_SESSION['password']);
    }
    else {
        unset($_SESSION['password']);
        $_SESSION['password']='Неправильный пароль';
    }


    if($das->comparisonPass()){
        unset($_SESSION['password1']);
    }
    else {
        unset($_SESSION['password1']);
        $_SESSION['password1']='Пароли не совпадают';
    }

    if($das->mail()){
        unset($_SESSION['mail']);
    }
    else {
        unset($_SESSION['mail']);
        $_SESSION['mail']='Неправильный mail';
    }

    if($das->Name()){
        unset($_SESSION['Name']);
    }
    else {
        unset($_SESSION['Name']);
        $_SESSION['Name']='Неправильный Имя';
    }





    if ($das->checkLogin() and $das->checkPass() and $das->comparisonPass() and $das->mail() and $das->Name()) {



        $zap = new file('package.json');
        $zap->writefile($peremen);
        echo 'вы зарегестрировались';

    } // если  регистрацию прошли переходим на домшнюю страницу
    else {



        include 'formregist.php';


// если  возращаем index.php


    }
}



?>
