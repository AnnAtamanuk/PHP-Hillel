<div style="color:Green;font-size:30px;text-align:center">

<?php

echo 'Hello!
<br/>';
//text-align:center = центрует текст
// font-size:30px = размер шрифта
//olor:Green = цвет шрифта
echo 'My name is';
//<br/> следующим за ним текст переносит на другую строку
echo '<p style="color:blue;font-size:35px;">Atamanuk Anna Ruslanovna
</p>';
echo 'New Year through'.'<br/>';
$data_end=31;
$data_1=date("j");
//date("j")=день без 0 в дате
$res=$data_end-$data_1;
echo $res.'<br/>';

$picture="<img src='https://m.popkey.co/325b1b/drxOg_s-200x150.gif?c=popkey-web&p=cheezburger&i=cheezburger-ent&l=search&f=.gif'>";
echo $picture;
?>