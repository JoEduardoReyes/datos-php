<?php

// Valores
/*
function greet($name) {
  return "Hola, $name!";
}

echo greet("Eduardo");
*/

// Referencias

/*
$course = "PHP";

function path($course) {
  $course = "Laravel";
  echo $course;
}

path($course);

echo $course;
*/

// predeterminados

function greet($name = "Eduardo") {
  return "Hola, $name!";
}

echo greet();
echo greet("Fabiola");


?>