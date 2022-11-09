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
    public function delUser($id_user)
    {
        $user = new User();
        $checkDel = $user->deteleUser($id_user);
        if ($checkDel) {
            header('location:index.php?url=clienMange');
        }
    }
}
