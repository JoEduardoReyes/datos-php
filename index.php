<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('jo@joeduardo.com'));
var_dump(App\Validate::url('https://www.facebook.com'));