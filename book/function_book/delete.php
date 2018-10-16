<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 24/09/2018
 * Time: 13:52
 */


require __DIR__."/../class/Book.php";

if (isset($_GET['id'])) {
    $bookId = $_GET['id'];

    $book = new Book();
    $delete = $book->delete($bookId);
    header('Location: ../index.php');
    exit();
}