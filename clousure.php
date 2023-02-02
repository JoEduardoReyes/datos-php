<?php

// una variable que requiere logica
/*
$greet = function ($name) {
  return "Hello, $name";
};

echo $greet('world'). "\n";
*/

function greet(Closure $lang, $name) {
  return $lang($name);
}

$es = function ($name) {
  return "hola, $name";
};

$en = function ($name) {
  return "Hello, $name";
};

echo greet($es, "Lynda");
echo greet($en, "Lynda");