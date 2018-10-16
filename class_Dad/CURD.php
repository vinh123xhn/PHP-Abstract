<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 20/09/2018
 * Time: 22:37
 */

require __DIR__ . '/../database/Database.php';

abstract class CURD
{
    public $conn;
    public $sql;
    public $table;

    public function __construct ()
    {
        $database = new Database();
        $this->conn = $database->connect('root', '123456@Abc', 'library_database');
    }

    public function show ($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id";
        $result = $this->conn->query($sql);
        $categories = $result->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    public function getById ($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id = '$id'";
        $result = $this->conn->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }

    public function delete ($table ,$id)
    {
        $sql = "DELETE FROM $table WHERE `id` = '$id'";
        $this->conn->exec($sql);
    }

    abstract protected function insert (array $data);

    abstract protected function update (array $data);

}