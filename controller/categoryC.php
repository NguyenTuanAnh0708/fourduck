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
}
