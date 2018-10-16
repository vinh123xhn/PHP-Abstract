<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 18/09/2018
 * Time: 13:50
 */


class Database
{
    private $url = null;
    private $userName = null;
    private $passWord = null;

    public function connect ($user, $passWord, $dbName)
    {
        $this->url = "mysql:host=localhost;dbname=$dbName";
        $this->userName = $user;
        $this->passWord = $passWord;


        try {
            $conn = new PDO($this->url, $this->userName, $this->passWord);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "connection failed" . $e->getMessage();
        }
        return null;
    }
}

