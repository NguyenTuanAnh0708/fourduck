<?php
require '../model/Category.php';
$category = new Category();
$check = $category->deteleCategory(1);
var_dump($check);
