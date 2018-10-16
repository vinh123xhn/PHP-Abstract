<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 21/09/2018
 * Time: 09:44
 */


require __DIR__ . '/../class/Category.php';


if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    $update = new Category();
    $category = $update->getCategoryById($categoryId);

    if (!$category) {
        echo "Thể loại không tồn tại";
        die();
    }


    if (isset($_POST['names'])) {
        $categoryName = $_POST['names'];
        $data = [
            'id' => $categoryId,
            'nameCategory' => $categoryName
        ];

        $update->update($data);
        header('Location: ../index.php');
        exit();
    }
}

include '../html_category/from_update.php';
