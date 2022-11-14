<?php
require './model/Category.php';
class categoryC
{
    public function getAllCategory()
    {
        $category = new Category();
        $dataCategory = $category->getAllCategory();
        return $dataCategory;
    }
    public function delCategory($id_category)
    {
        $category = new Category();
        $checkdel = $category->deteleCategory($id_category);
        if ($checkdel) {
            header('location:index.php?url=category');
        }
    }
    public function amoutCategoryA()
    {
        $category = new Category();
        $amount = $category->amoutCategoryA();
        return $amount;
    }
    public function insertCategory($id_user, $name_category, $img_category, $role)
    {
        $category = new Category();
        $check = $category->insertCategory($id_user, $name_category, $img_category, $role);
        if ($check) {
            header('location:index.php?url=category');
        }
    }
}
