<?php

$password = '123456A';

var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password));