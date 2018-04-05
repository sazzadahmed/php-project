<?php
include '../Src/cv.php';
echo'<pre>';
print_r($_POST);
$obj=new cv();
$obj->prepare($_POST);
$obj->store();
header('Location:index.php');