<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 21/09/2018
 * Time: 11:38
 */

require_once __DIR__ . '/../../class_Dad/CURD.php';


class Book extends CURD
{
    public function __construct ()
    {
        $database = new Database();
        $this->conn = $database->connect('root', '123456@Abc', 'library_database');
    }


    public function showBook ()
    {
        $sql = "  SELECT book.id, book.book_name, book.author, category.category_name, book.id_category
          FROM book
          JOIN category ON book.id_category = category.id
          ORDER BY book.id";

        $result = $this->conn->query($sql);
        $books = $result->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }

    public function getBookById ($id)
    {
        $book = parent::getById("book", $id);
        return $book;
    }


    public function update (array $data)
    {
        $id = $data['id'];
        $nameBook = $data['nameBook'];
        $nameAuthor = $data['nameAuthor'];
        $idCategory = $data['idCategory'];

        $sql = "UPDATE `book` SET `book_name` = '$nameBook', `author` = '$nameAuthor', `id_category` = '$idCategory' WHERE `id` = '$id'";
        $this->conn->exec($sql);
    }


    public function insert (array $data)
    {
        $name = $data['nameBook'];
        $author = $data['nameAuthor'];
        $idCategory = $data['idCategory'];
        $sql = "INSERT INTO book (book_name, author, id_category) VALUE ('$name', '$author', '$idCategory')";
        $this->conn->exec($sql);
    }

    public function delete ($id)
    {
        $book = parent::delete('book',$id);
        return $book;
    }


}
