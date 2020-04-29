<?php
$str = null;
if (isset($str)) {
    echo 'String $str there' . '</br>';
}

$str2 = '';
if (isset($str2)) {
    echo 'String $str2 there' . '</br>';
}

$str3 = null;
if (empty($str3)) {
    echo 'String $str3 there' . '</br>';
}

$str4 = '';
if (empty($str4)) {
    echo 'String $str4 there' . '</br>';
}

$str5  ='333';
if (empty($str5)) {
    echo 'String $str5 there' . '</br>';
}

$str = "bekn400";
$$str = '10';
if (isset($bekn400)) {
    echo 'echo $bekn;';
}