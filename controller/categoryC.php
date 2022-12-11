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

    public function getCategoryByName()
    {
        $category = new Category();
        $dataNameCategory = $category->getAllCategoryByName();
        return $dataNameCategory;
    }
    public function getName($id_category)
    {
        $category = new Category();
        $name = $category->getName($id_category);
        return $name;
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
    public function insertCategory($id_user, $name_category, $img_category)
    {
        $category = new Category();
        $check = $category->insertCategory($id_user, $name_category, $img_category);
        if ($check) {
            header('location:index.php?url=category');
        }
    }
    public function getOneCategory($id_category)
    {
        $category = new Category();
        $data = $category->getOne($id_category);
        return $data;
    }
    public function updateCategory($id_category, $name_category, $img_category)
    {
        $category = new Category();
        $check = $category->updateCategory($id_category, $name_category, $img_category);
        if ($check) {
            header('location:index.php?url=category');
        }
    }
}
