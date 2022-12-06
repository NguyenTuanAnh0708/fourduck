<?php
require '../model/User.php';
$user = new User();
$userdata = $user->getAll();
