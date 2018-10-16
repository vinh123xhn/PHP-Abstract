<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 21/09/2018
 * Time: 16:55
 */


require __DIR__."/../class/Book.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameBook = $_POST['book_name'];
    $nameAuthor = $_POST['author_name'];
    $idCategory = $_POST['category_id'];

    $data = [
        'nameBook' => $nameBook,
        'nameAuthor' => $nameAuthor,
        'idCategory' => $idCategory
    ];

    $book = new Book();
    $book->insert($data);

    header('Location: ../index.php');
    exit();

}
