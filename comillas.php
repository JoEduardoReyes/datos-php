<?php

// echo 'Un texto de una linea
// Varias lineas
// \' backslsh \\';

// $name = 'Eduardo';

// echo "mi nombre es $name <br>";

// $courses = ['backend' => 'PHP'];


// class User {
//   public $name = 'Eduardo';
// }

// $user = new User();

// echo "$user->name quiere aprender $courses['backend']";

// $teacher = 'Eduardo';
// $Eduardo = 'Profesor de PHP';

// echo "$teacher es ${$teacher}";

$teacher = 'Eduardo';

function getTeacher(){
  return 'teacher';
}


echo "${getTeacher()}";