<?php

$courses = [
  "Frontend" => "JavaScript",
  "Framework" => "Laravel",
  "Backend" => "PHP",
  "Liberia" => "Vue.js"];

foreach ($courses as $key => $value) {
  echo $key. " - ". $value. "\n";
}

function upper($course, $key) {
  echo strtoupper($course) . "- $key \n";
}

array_walk($courses, 'upper');

var_dump((bool) array_key_exists('Frontend', $courses));
echo in_array('JavaScript', $courses);
var_dump(array_keys($courses));
var_dump(array_values($courses));