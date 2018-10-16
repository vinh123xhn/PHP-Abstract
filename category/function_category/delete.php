<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 21/09/2018
 * Time: 10:20
 */


require __DIR__ . '/../class/Category.php';

if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    $category = new Category();
    $delete = $category->delete($categoryId);
    header('Location: ../index.php');
    exit();
}

