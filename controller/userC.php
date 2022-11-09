<?php
require './model/User.php';
class userC
{
    public function getAllUser()
    {
        $user = new User();
        $dataUser = $user->getAll();
        return $dataUser;
    }
}
