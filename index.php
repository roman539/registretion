<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Это заголовок тайтл</title>

</head>
<body>

<?php
function fa(){
    $p1=sum($ds,$be);
    return $p1;
}

function kvadrat ($a)
{
    $perem =$a*$a ;
    $ppp=$perem-fa();
    return $ppp;
}
function kyb ($perem){
    $keb=$perem*$perem;
       return $keb;
}
$ds=kvadrat(3);
echo $ds;

$be=kyb(2);

function sum($pe,$pe2){
   $de=$pe+$pe2;
return $de;
}
 echo sum($ds,$be);
?>
<a href="regup.php">Регистрация</a>

<a href="auteriz.php">Авторизация</a>


</html>
