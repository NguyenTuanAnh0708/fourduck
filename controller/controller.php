<?php
require '../model/User.php';
$user = new User();
$usernow = $user->getUser('tuananhnguyenbsbd@gmail.comm', '123123');
$check = false;
if (is_array($usernow) && sizeof($usernow) > 0) {
    $check = true;
}
var_dump($check);
