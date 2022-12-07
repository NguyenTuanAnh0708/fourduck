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
    
    public function getAllUserclient($id_user)
    {
        $user = new user();
        $getAlluserclient = $user->getAllUserclient($id_user);
        return $getAlluserclient;
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
    public function checkuserclient($id_user,$name, $gmail, $password, $img_user, $phone, $address, $role)
    {
        $user = new User();
        $result = $user->getAllUserclient($id_user,$name, $gmail, $password, $img_user, $phone, $address, $role);
        if ($result == null) {
            $errorUser = 'errorUser';
            return $errorUser;
        } else {
            $_SESSION["user"] = $result;
            $okUser = 'okUser';
            return $okUser;
        }
    }
    public function checkOptionOwner()
    {
        $shop = new Shop();
        if ($_SESSION["user"]['role'] == 1) {
            $_SESSION["optionShop"] = true;
            $getShop = $shop->getIdShop($_SESSION["user"]["id_user"]);
            if ($getShop == null) {
                $_SESSION["optionShop"] = false;
            } else {
                $statusShop = $shop->getStatus($_SESSION["user"]["id_user"]);
                if ($statusShop == 1) {
                    $_SESSION["optionShop"] = false;
                }
            }
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
     // public function updatetNew($id_uesr, $name, $gmail, $password, $img_user, $phone, $address, $role)
    // {
    //     $user = new User();
    //     $result = $user->checkUserExist($_SESSION['user']);
    //     $updateuser = "okUpdate";
    //     if ($result) {
    //         $updateuser = "updateuser";
    //         return $updateuser;
    //     }
    //     $check = $user->updateNewUser($name, $gmail, $password, $img_user, $phone, $address, $role,$id_uesr );
    //     if ($check) {
    //         return $updateuser;
    //     }
    // }
    public function getIdUser($id_user)
    {
        $user = new  user();
        $id_user = $user-> getIdUser($id_user);
        return $id_user;
    }
}
