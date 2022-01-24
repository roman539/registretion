<?php
require_once 'aut.php';

require_once  'file.php';
if (empty($_GET['passwordaut']) and empty($_GET['loginaut'])){

    include 'formaut.php';
}
else {

    $getlogin = $_GET['loginaut'];
    $getpassword = ($_GET['passwordaut']);

    $hero = new aut($getlogin, $getpassword);

    $fike = new file('package.json');
    if ($hero->checkLogin() and $hero->checkPass()) {


        if ($fike->searchfile($getlogin, $getpassword)) {
            echo    ;
        }


    }
}
















