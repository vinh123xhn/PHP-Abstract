<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 24/09/2018
 * Time: 14:16
 */
require_once __DIR__."/../class/Book.php";


if (isset($_GET['id'])) {
    $idBook = $_GET['id'];

    $books = new Book();
    $book = $books->getBookById($idBook);


    if (!$book) {
        echo "Thể loại không tồn tại";
        die();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idCategory = $_POST['category_id'];
        $bookName = $_POST['book_name'];
        $authorName = $_POST['author_name'];


        $data = [
            'id' => $idBook,
            'nameBook' => $bookName,
            'nameAuthor' => $authorName,
            'idCategory' => $idCategory
        ];


        $books->update($data);

        header('Location: ../index.php');
        exit();

}