<?php

$courses = ['JavaScript', 'PHP'];
$wishes = ['JavaScript', 'PHP', 'vue.je', 'laravel'];

// var_dump(array_diff($wishes, $courses)); nos muestra un nuevo array con las diferencias


$arrayA = ['1', '2', '3', '4', '5'];
$arrayB = ['3', '4', '5', '6', '7'];

var_dump(array_diff($arrayB, $arrayA));

var_dump(array_diff_assoc($arrayA, $arrayB));