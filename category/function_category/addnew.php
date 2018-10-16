<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 20/09/2018
 * Time: 23:25
 */


require __DIR__ . '/../class/Category.php';
require __DIR__ . '/../html_category/from_add.php';

if (isset($_POST['names'])) {
    $nameCategory = $_POST['names'];
    $data = [
        'name' => $nameCategory
    ];

    $catagory = new Category();
    $catagory->insert($data);

    header('location: ../index.php');
    exit();
}
?>
