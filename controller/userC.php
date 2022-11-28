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
            header('location: index.php?url=clienMange');
        }
    }
    public function amoutUser()
    {
        $user = new User();
        $amout = $user->amoutUser();
        return $amout;
    }
    public function checkUser($gmail, $password)
    {
        $user = new User();
        $result = $user->getUser($gmail, $password);
        if ($result == null) {
            $errorLogin = 'errorLogin';
            return $errorLogin;
        } else {
            $_SESSION["user"] = $result;
            $okLogin = 'okLogin';
            return $okLogin;
        }
    }
    public function insertNew($name, $gmail, $password, $img_user, $phone, $location, $role)
    {
        $user = new User();
        $result = $user->checkUserExist($gmail);
        $errorRegister = "okRegister";
        if ($result) {
            $errorRegister = "errorRegister";
            return $errorRegister;
        }
        $check = $user->insertNewUser($name, $gmail, $password, $img_user, $phone, $location, $role);
        if ($check) {
            return $errorRegister;
        }
    }
}
