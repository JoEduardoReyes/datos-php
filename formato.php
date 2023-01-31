<?php

$text = "PHP es UN lenguaje, año 2023, programación\n";

/*
// alterar


echo strtolower($text);
echo strtoupper($text);
echo ucfirst($text);
echo lcfirst($text);
*/

/*
// Reemplazar
$slug = str_replace('PHP', 'JavaScript', $text);

echo $slug;
*/

/*
// Modificar
$code = 39;

echo str_pad($code, 8, '#', STR_PAD_BOTH);

echo strip_tags($text);
*/

echo strtoupper($text); // monobyte
echo mb_strtoupper($text); // multibyte